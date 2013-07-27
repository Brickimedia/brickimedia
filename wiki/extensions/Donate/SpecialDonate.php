<?php
class SpecialDonate extends SpecialPage {
        function __construct() {
                parent::__construct( 'Donate' );
        }
 
        function execute( $par ) {
                $request = $this->getRequest();
                $output = $this->getOutput();
                $this->setHeaders();
                $param = $request->getText( 'param' );
				$html = '
					<style type="text/css">
					#donate-callout {
						background:url("' . $wgScriptPath . '/extensions/Donate/donate-callout.png") 0 0 no-repeat;
						padding-top: 15px;
						padding-right: 50px;
						padding-left: 50px;
						padding-bottom: 30px;
						max-width: 400px;
					}
					#content td {
						vertical-align: middle;
					}
					#content table {
						margin-top: -10px;
					}
					</style>
					<table>
					<tbody>
					<tr>
					<td>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					</td>
					<td>
					<div id="donate-callout"><big><b>Click here to donate</b></big><br/>A valid credit card or PayPal account is required. Upon clicking the button, you will be redirected to a secured PayPal payment form.</div>
					</td>
					</tr>
					</tbody>
					</table>
				';
				$wikitext = '<div style="margin-top:-45px;">{{MediaWiki:Donation-page-text}}</div>';
                $output->addHTML( $html );
                $output->addWikiText( $wikitext );
        }
}