<?php
/**
 * A special page for uploading avatars
 * This page is a big hack -- it's just the image upload page with some changes
 * to upload the actual avatar files.
 * The avatars are not held as MediaWiki images, but
 * rather based on the user_id and in multiple sizes
 *
 * Requirements: Need writable directory $wgUploadPath/avatars
 *
 * @file
 * @ingroup Extensions
 * @author David Pean <david.pean@gmail.com>
 * @copyright Copyright Â© 2007, Wikia Inc.
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

class SpecialUploadAvatar extends SpecialUpload {
	var $avatarUploadDirectory;

	/**
	 * Constructor
	 */
	public function __construct( $request = null ) {
		SpecialPage::__construct( 'UploadAvatar', 'upload', false/* listed? */ );
	}

	/**
	 * Let the parent handle most of the request, but specify the Upload
	 * class ourselves
	 */
	protected function loadRequest() {
		$request = $this->getRequest();
		parent::loadRequest( $request );
		$this->mUpload = new UploadAvatar();
		$this->mUpload->initializeFromRequest( $request );
	}

	/**
	 * Show the special page. Let the parent handle most stuff, but handle a
	 * successful upload ourselves
	 *
	 * @param $params Mixed: parameter(s) passed to the page or null
	 */
	public function execute( $params ) {
		global $wgUserProfileScripts;

		$out = $this->getOutput();
		$out->addExtensionStyle( $wgUserProfileScripts . '/UserProfile.css' );
		parent::execute( $params );

		if ( $this->mUploadSuccessful ) {
			// Cancel redirect
			$out->redirect( '' );

			$this->showSuccess( $this->mUpload->mExtension );
			// Run a hook on avatar change
			wfRunHooks( 'NewAvatarUploaded', array( $this->getUser() ) );
		}
	}

	/**
	 * Show some text and linkage on successful upload.
	 *
	 * @param $ext String: file extension (gif, jpg or png)
	 */
	private function showSuccess( $ext ) {
		global $wgDBname, $wgUploadPath, $wgUploadAvatarInRecentChanges;

		$user = $this->getUser();
		$log = new LogPage( 'avatar' );
		if ( !$wgUploadAvatarInRecentChanges ) {
			$log->updateRecentChanges = true;
		}
		$log->addEntry(
			'avatar',
			$user->getUserPage(),
			wfMsgForContent( 'user-profile-picture-log-entry' )
		);

		$uid = $user->getId();

		$output = '<h1>' . wfMsg( 'uploadavatar' ) . '</h1>';
		$output .= UserProfile::getEditProfileNav( wfMsg( 'user-profile-section-picture' ) );
		$output .= '<div class="profile-info">';
		$output .= '<p class="profile-update-title">' .
			wfMsg( 'user-profile-picture-yourpicture' ) . '</p>';
		$output .= '<p>' . wfMsg( 'user-profile-picture-yourpicturestext' ) . '</p>';

		$output .= '<table cellspacing="0" cellpadding="0" style="margin-top:20px;">';
		$output .= '<tr>
			<td valign="top" style="color:#797979;font-size:12px;font-weight:bold;padding-bottom:20px;">' .
				wfMsg( 'user-profile-picture-large' ) .
			'</td>
			<td style="padding-bottom:20px;">
				<img src="' . $wgUploadPath . '/avatars/' . $uid . '_l.' . $ext . '?ts=' . rand() . '" alt="" border="0" />
			</td> 
		</tr>'; // 2 above NXT cut ". $wgDBname . '_'"
		$output .= '<tr>
			<td valign="top" style="color:#797979;font-size:12px;font-weight:bold;padding-bottom:20px;">' .
				wfMsg( 'user-profile-picture-medlarge' ) .
			'</td>
			<td style="padding-bottom:20px;">
				<img src="' . $wgUploadPath . '/avatars/' . $uid . '_ml.' . $ext . '?ts=' . rand() . '" alt="" border="0" />
			</td>
		</tr>'; // above, NXT cut ". $wgDBname . '_' "
		$output .= '<tr>
			<td valign="top" style="color:#797979;font-size:12px;font-weight:bold;padding-bottom:20px;">' .
				wfMsg( 'user-profile-picture-medium' ) .
			'</td>
			<td style="padding-bottom:20px;">
				<img src="' . $wgUploadPath . '/avatars/' . $uid . '_m.' . $ext . '?ts=' . rand() . '" alt="" border="0" />
			</td>
		</tr>';// above, NXT cut ". $wgDBname . '_' "
		$output .= '<tr>
			<td valign="top" style="color:#797979;font-size:12px;font-weight:bold;padding-bottom:20px;">' .
				wfMsg( 'user-profile-picture-small' ) .
			'</td>
			<td style="padding-bottom:20px;">
				<img src="' . $wgUploadPath . '/avatars/' . $uid . '_s.' . $ext . '?ts=' . rand() . '" alt="" border="0" />
			</td>
		</tr>';// above, NXT cut ". $wgDBname . '_' "
		$output .= '<tr>
			<td>
				<input type="button" onclick="javascript:history.go(-1)" class="site-button" value="' . wfMsg( 'user-profile-picture-uploaddifferent' ) . '" />
			</td>
		</tr>';
		$output .= '</table>';
		$output .= '</div>';

		$this->getOutput()->addHTML( $output );
	}

	/**
	 * Displays the main upload form, optionally with a highlighted
	 * error message up at the top.
	 *
	 * @param $msg String: error message as HTML
	 * @param $sessionKey String: session key in case this is a stashed upload
	 * @param $hideIgnoreWarning Boolean: whether to hide "ignore warning" check box
	 * @return HTML output
	 */
	protected function getUploadForm( $message = '', $sessionKey = '', $hideIgnoreWarning = false ) {
		global $wgUseCopyrightUpload;

		if ( $message != '' ) {
			$sub = wfMsg( 'uploaderror' );
			$this->getOutput()->addHTML( "<h2>{$sub}</h2>\n" .
				"<h4 class='error'>{$message}</h4>\n" );
		}

		$ulb = wfMsg( 'uploadbtn' );

		$source = null;

		if ( $wgUseCopyrightUpload ) {
			$source = "
				<td align='right' nowrap='nowrap'>" . wfMsg( 'filestatus' ) . ":</td>
				<td><input tabindex='3' type='text' name=\"wpUploadCopyStatus\" value=\"" .
				htmlspecialchars( $this->mUploadCopyStatus ) . "\" size='40' /></td>
				</tr><tr>
				<td align='right'>" . wfMsg( 'filesource' ) . ":</td>
				<td><input tabindex='4' type='text' name='wpUploadSource' value=\"" .
				htmlspecialchars( $this->mUploadSource ) . "\" style='width:100px' /></td>
				";
		}

		$output = '<h1>' . wfMsg( 'uploadavatar' ) . '</h1>';
		$output .= UserProfile::getEditProfileNav( wfMsg( 'user-profile-section-picture' ) );
		$output .= '<div class="profile-info">';

		if ( $this->getAvatar( 'l' ) != '' ) {
			$output .= '<table>
				<tr>
					<td>
						<p class="profile-update-title">' . wfMsg( 'user-profile-picture-currentimage' ) . '</p>
					</td>
				</tr>';
				$output .= '<tr>
					<td>' . $this->getAvatar( 'l' ) . '</td>
				</tr>
			</table>';
		}

		$output .= '<form id="upload" method="post" enctype="multipart/form-data" action="">';
		// The following two lines are delicious copypasta from HTMLForm.php,
		// function getHiddenFields() and they are required; wpEditToken is, as
		// of MediaWiki 1.19, checked _unconditionally_ in
		// SpecialUpload::loadRequest() and having the hidden title doesn't
		// hurt either
		// @see https://bugzilla.wikimedia.org/show_bug.cgi?id=30953
		$output .= Html::hidden( 'wpEditToken', $this->getUser()->getEditToken(), array( 'id' => 'wpEditToken' ) ) . "\n";
		$output .= Html::hidden( 'title', $this->getTitle()->getPrefixedText() ) . "\n";
		$output .= '<table border="0">
				<tr>
					<td>
						<p class="profile-update-title">' .
							wfMsg( 'user-profile-picture-choosepicture' ) .
						'</p>
						<p style="margin-bottom:10px;">' .
							wfMsg( 'user-profile-picture-picsize' ) .
						'</p>
						<input tabindex="1" type="file" name="wpUploadFile" id="wpUploadFile" size="36"/>
						</td>
				</tr>
				<tr>' . $source . '</tr>
				<tr>
					<td>
						<input tabindex="5" type="submit" name="wpUpload" class="site-button" value="' . $ulb . '" />
					</td>
				</tr>
			</table>
			</form>' . "\n";

		$output .= '</div>';

		return $output;
	}

	/**
	 * Gets an avatar image with the specified size
	 *
	 * @param $size String: size of the image ('s' for small, 'm' for medium,
	 * 'ml' for medium-large and 'l' for large)
	 * @return String: full img HTML tag
	 */
	function getAvatar( $size ) {
		global $wgDBname, $wgUploadDirectory, $wgUploadPath;
		$files = glob( //below, NXT cut ". $wgDBname . '_' "
			$wgUploadDirectory . '/avatars/' .
			$this->getUser()->getID() . '_' . $size . '*'
		);
		if ( isset( $files[0] ) && $files[0] ) {
			return "<img src=\"{$wgUploadPath}/avatars/" .
				basename( $files[0] ) . '" alt="" border="0" />';
		}
	}

}

class UploadAvatar extends UploadFromFile {
	public $mExtension;

	function createThumbnail( $imageSrc, $imageInfo, $imgDest, $thumbWidth ) {
		global $wgUseImageMagick, $wgImageMagickConvertCommand;

		if ( $wgUseImageMagick ) { // ImageMagick is enabled
			list( $origWidth, $origHeight, $typeCode ) = $imageInfo;

			if ( $origWidth < $thumbWidth ) {
				$thumbWidth = $origWidth;
			}
			$thumbHeight = ( $thumbWidth * $origHeight / $origWidth );
			$border = ' -bordercolor white  -border  0x';
			if ( $thumbHeight < $thumbWidth ) {
				$border = ' -bordercolor white  -border  0x' . ( ( $thumbWidth - $thumbHeight ) / 2 );
			}
			if ( $typeCode == 2 ) {
				exec(
					$wgImageMagickConvertCommand . ' -size ' . $thumbWidth . 'x' . $thumbWidth .
					' -resize ' . $thumbWidth . ' -crop ' . $thumbWidth . 'x' .
					$thumbWidth . '+0+0   -quality 100 ' . $border . ' ' .
					$imageSrc . ' ' . $this->avatarUploadDirectory . '/' . $imgDest . '.jpg'
				);
			}
			if ( $typeCode == 1 ) {
				exec(
					$wgImageMagickConvertCommand . ' -size ' . $thumbWidth . 'x' . $thumbWidth .
					' -resize ' . $thumbWidth . ' -crop ' . $thumbWidth . 'x' .
					$thumbWidth . '+0+0 ' . $imageSrc . ' ' . $border . ' ' .
					$this->avatarUploadDirectory . '/' . $imgDest . '.gif'
				);
			}
			if ( $typeCode == 3 ) {
				exec(
					$wgImageMagickConvertCommand . ' -size ' . $thumbWidth . 'x' . $thumbWidth .
					' -resize ' . $thumbWidth . ' -crop ' . $thumbWidth . 'x' .
					$thumbWidth . '+0+0 ' . $imageSrc . ' ' .
					$this->avatarUploadDirectory . '/' . $imgDest . '.png'
				);
			}
		} else { // ImageMagick is not enabled, so fall back to PHP's GD library
			// Get the image size, used in calculations later.
			list( $origWidth, $origHeight, $typeCode ) = getimagesize( $imageSrc );

			switch( $typeCode ) {
				case '1':
					$fullImage = imagecreatefromgif( $imageSrc );
					$ext = 'gif';
					break;
				case '2':
					$fullImage = imagecreatefromjpeg( $imageSrc );
					$ext = 'jpg';
					break;
				case '3':
					$fullImage = imagecreatefrompng( $imageSrc );
					$ext = 'png';
					break;
			}

			$scale = ( $thumbWidth / $origWidth );

			// Create our thumbnail size, so we can resize to this, and save it.
			$tnImage = imagecreatetruecolor(
				$origWidth * $scale,
				$origHeight * $scale
			);

			// Resize the image.
			imagecopyresampled(
				$tnImage,
				$fullImage,
				0, 0, 0, 0,
				$origWidth * $scale,
				$origHeight * $scale,
				$origWidth,
				$origHeight
			);

			// Create a new image thumbnail.
			if ( $typeCode == 1 ) {
				imagegif( $tnImage, $imageSrc );
			} elseif ( $typeCode == 2 ) {
				imagejpeg( $tnImage, $imageSrc );
			} elseif ( $typeCode == 3 ) {
				imagepng( $tnImage, $imageSrc );
			}

			// Clean up.
			imagedestroy( $fullImage );
			imagedestroy( $tnImage );

			// Copy the thumb
			copy(
				$imageSrc,
				$this->avatarUploadDirectory . '/' . $imgDest . '.' . $ext
			);
		}
	}

	/**
	 * Create the thumbnails and delete old files
	 */
	public function performUpload( $comment, $pageText, $watch, $user ) {
		global $wgUploadDirectory, $wgDBname, $wgMemc;

		$this->avatarUploadDirectory = $wgUploadDirectory . '/avatars';

		$imageInfo = getimagesize( $this->mTempPath );
		switch ( $imageInfo[2] ) {
			case 1:
				$ext = 'gif';
				break;
			case 2:
				$ext = 'jpg';
				break;
			case 3:
				$ext = 'png';
				break;
			default:
				return Status::newFatal( 'filetype-banned-type' );
		}

		$dest = $this->avatarUploadDirectory;

		$uid = $user->getId();
		$avatar = new wAvatar( $uid, 'l' );
		// If this is the user's first custom avatar, update statistics (in
		// case if we want to give out some points to the user for uploading
		// their first avatar)
		if ( strpos( $avatar->getAvatarImage(), 'default_' ) !== false ) {
			$stats = new UserStatsTrack( $uid, $user->getName() );
			$stats->incStatField( 'user_image' );
		}
//in below lines, NXT cut all occurances of " . $wgDBname . '_'"
		$this->createThumbnail( $this->mTempPath, $imageInfo, $uid . '_l', 75 );
		$this->createThumbnail( $this->mTempPath, $imageInfo, $uid . '_ml', 50 );
		$this->createThumbnail( $this->mTempPath, $imageInfo, $uid . '_m', 30 );
		$this->createThumbnail( $this->mTempPath, $imageInfo, $uid . '_s', 16 );

		/*if ( $ext != 'jpg' ) {
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_s.gif' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_s.gif' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' $uid . '_m.jpg' ) ) {
				unlink( $this->avatarUploadDirectory . '/' $uid . '_m.jpg' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_l.jpg' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_l.jpg' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_ml.jpg' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_ml.jpg' );
			}
		}*/
		if ( $ext != 'jpg' ) {
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_s.jpg' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_s.jpg' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_m.jpg' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_m.jpg' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_l.jpg' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_l.jpg' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_ml.jpg' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_ml.jpg' );
			}
		}
		if ( $ext != 'gif' ) {
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_s.gif' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_s.gif' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_m.gif' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_m.gif' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_l.gif' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_l.gif' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_ml.gif' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_ml.gif' );
			}
		}
		if ( $ext != 'png' ) {
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_s.png' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_s.png' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_m.png' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_m.png' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_l.png' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_l.png' );
			}
			if ( is_file( $this->avatarUploadDirectory . '/' . $uid . '_ml.png' ) ) {
				unlink( $this->avatarUploadDirectory . '/' . $uid . '_ml.png' );
			}
		}

		$key = wfMemcKey( 'user', 'profile', 'avatar', $uid, 's' );
		$data = $wgMemc->delete( $key );

		$key = wfMemcKey( 'user', 'profile', 'avatar', $uid, 'm' );
		$data = $wgMemc->delete( $key );

		$key = wfMemcKey( 'user', 'profile', 'avatar', $uid , 'l' );
		$data = $wgMemc->delete( $key );

		$key = wfMemcKey( 'user', 'profile', 'avatar', $uid, 'ml' );
		$data = $wgMemc->delete( $key );

		$this->mExtension = $ext;
		return Status::newGood();
	}

	/**
	 * Don't verify the upload, since it all dangerous stuff is killed by
	 * making thumbnails
	 */
	public function verifyUpload() {
		return array( 'status' => self::OK );
	}

	/**
	 * Only needed for the redirect; needs fixage
	 */
	public function getTitle() {
		return Title::makeTitle( NS_FILE, 'Avatar.jpg' );
	}

	/**
	 * We don't overwrite stuff, so don't care
	 */
	public function checkWarnings() {
		return array();
	}
}