<?php


/**
 **********************************************************
 * Name:     MediawikiPlayer
 * Desc:     Embedds a mediaplayer into a wiki page
 *
 * @version:  0.3.0
 *
 * @author:  Andrew Fitzgerald (contact@swiftlytilting.com)
 * Homepage: http://www.mediawiki.org/wiki/Extension:MediawikiPlayer
 *           http://www.swiftlytilting.com/
 *
 * License:  GNU GPL
 *
 * @file
 ***********************************************************
 */

// using $wgScriptPath so head em off at the pass
if ( !defined( 'MEDIAWIKI' ) ) {
    echo "Not a valid entry point";
    exit( 1 );
}

$wgExtensionCredits['parserhook'][] = array(
	'name' => 'MediawikiPlayer',
	'author' =>'[http://swiftlytilting.com Andrew Fitzgerald]',
	'url' => 'http://www.mediawiki.org/wiki/Extension:MediawikiPlayer',
	'description' => 'Embeds a media player into a wiki page',
	'descriptionmsg' => "mediawikiplayer-desc", // Same as above but name of a message, for i18n - string, added in 1.12.0
	'version' => '0.3.0',
	'path' => __FILE__,
);


//Avoid unstubbing $wgParser on setHook() too early on modern (1.12+) MW versions, as per r35980
if ( defined( 'MW_SUPPORTS_PARSERFIRSTCALLINIT' ) ) {
   $wgHooks['ParserFirstCallInit'][] = 'MediawikiPlayer::setup';
} else { // Otherwise do things the old fashioned way
   $wgExtensionFunctions[] = 'MediawikiPlayer::setup';
}

class MediawikiPlayer
{
   protected static
   	$id = 0,
   	$addOns = array(),
   	$jwPlayerJsLoaded = false,
   	$swfJsLoaded = false,
   	$paramNames = array(
   		'allowfullscreen', 
   		'allowscriptaccess', 
   		'wmode', 
   		'flashvars'
   	);

   /**
    * Set up the extension variables and functions
    */
   static function setup()   
   {      
      global 
      	$wgParser, 
      	$wgMWPlayerConfig, 
      	$wgMWPlayerDefaultSettings,$wgScriptPath, 
      	$wgMWPlayerDir, 
      	$wgMWPlayerUseSWFObject;

      $wgMWPlayerDir = $wgScriptPath  . '/extensions/MediawikiPlayer';;
      $wgMWPlayerConfig = array();

      $wgMWPlayerUseSWFObject = false;

      $wgMWPlayerDefaultSettings = array(
         'width' => '400',
         'height' => '300',
         'allowfullscreen' => 'true',
         'backcolor' => 'eeeeee',
      );

      $wgParser->setHook( 'mediaplayer', array(__CLASS__, 'render') );
      $wgParser->setHook( 'mp3player', array(__CLASS__, 'renderMP3') );
     
      foreach(self::$addOns as $addOn)
      {
      	call_user_func(array($addOn,'setup'),$wgParser);
      }

      return true;
   }

   /**
    * Handler for mp3player tag
    */
   static function renderMP3( $input, $args, $parser )
   {
      $args['height'] = '24';
      $args['controlbar'] = 'bottom';
      return self::render( $input, $args, $parser);
   }

   /**
    * Handler for mediaplayer tag
    */
   static function render( $input, $args, $parser )
   {
      global 
      	$wgScriptPath, 
      	$wgContLang,
      	$wgMWPlayerDir, 
      	$wgMWPlayerDefaultSettings, 
      	$wgMWPlayerConfig, 
      	$wgMWPlayerUseSWFObject;

      ++self::$id;
		
		$useSWF = $wgMWPlayerUseSWFObject;
		
		
		// see if user wants to use old style embedding on this particular video
		if (array_key_exists('useswf', $args))		
		{				
			$useSWF = true;
			if	(strtolower($args['useswf']) === 'false')
			{
				$useSWF = false;
			}
						
			unset($args['useSWF']);
		}
			
		$currentID = 'MWPlayer-' . (array_key_exists('id', $args) ? $args['id'] : self::$id);
		
      // load international name of File namespac      
      $namespaceNames = $wgContLang->getNamespaces();
      $fileNS = strtolower($namespaceNames[NS_FILE]);
      $ns = strtolower(substr($input,0,5));

      // check to see if a file specified
      if ($ns == 'file:' || $ns == ($fileNS . ':'))
      {
         $image = wfFindFile(substr($input,5));
         if ($image)
         {
            $input = $image->getFullURL();
         }
         else
         {
            return 'Error loading file:' . Xml::encodeJsVar(substr($input,5));
         }
      }
    
		// if a configuration was set in the tag, and the configuration eists in 
		// wgMWPlayerConfig, load the config
      if (isset($wgMWPlayerConfig)
            && array_key_exists('MWPlayerConfig', $args)
            && array_key_exists($args['MWPlayerConfig'], $wgMWPlayerConfig)
      )
      {
         $wgMWPlayerDefaultSettings = $wgMWPlayerConfig[$args['MWPlayerConfig']];
         unset($args['MWPlayerConfig']);
      }

		// load the default settings if setting is not supplied in tag args
      foreach ($wgMWPlayerDefaultSettings as $n => $v)
      {
         if (!array_key_exists($n, $args))
         {  $args[$n] = $v;
         }
      }

		// use file arg if no input set
      if ((!array_key_exists('file',$args)) && (trim($input) != ''))
      {     $args['file'] = $input;
      }

		// Set up HTML
		
      $wgMWPlayerIDHTML = htmlspecialchars($currentID);
      $wgMWPlayerIDJS = Xml::encodeJsVar($currentID);
      $code = "<span id=\"$wgMWPlayerIDHTML\">The media player is loading...</span>\n";

      // Load the script if this is the first player of this type on the page
      if (($useSWF && !self::$swfJsLoaded)
      	|| (!$useSWF && !self::$jwPlayerJsLoaded)
      )
      {
         $scriptUrl = htmlspecialchars(
         	$wgMWPlayerDir . ($useSWF ? '/swfobject.js' : '/jwplayer.js')
         );
         
         if ($useSWF)         
         {	self::$swfJsLoaded = true;
         }
         else
         { self::$jwPlayerJsLoaded = true;
         }
         	
         $code .= "<script type='text/javascript' src=\"$scriptUrl\"></script>\n";
      }
		
		// load the player
      $code .= "<script type='text/javascript'>\n";
      $code .= "// <![CDATA[\n";

      $playerUrl = Xml::encodeJsVar($wgMWPlayerDir. '/player.swf');
      $width = Xml::encodeJsVar($args['width']);
      $height = Xml::encodeJsVar($args['height']);
      
      if ($useSWF)
      {	
      	$code .= "var s1 = new SWFObject($playerUrl, 'player', $width, $height,'9');\n";
      }
      else
      {      	
			$code .= "jwplayer($wgMWPlayerIDJS).setup({flashplayer: $playerUrl";	
      }
      
	  
		// loop through all of the arguments (params and variables)		
      foreach( $args as $name => $value )
      {
         // replace :PLAYERDIR:
         $value = str_replace(array( ':PLAYERDIR:'), array( Xml::escapeJsString($wgMWPlayerDir) ), $value);
			
			// escape characters for param names
         $name = str_replace(
            array(
               '00',
               '01',
               '02',
               '09',
            ),
            array(
               '.',
               '-',
               '_',
               '0',
            ),
            $name
         );
			
			// protect from XSS         
         $newvalue = Xml::encodeJsVar($value);
			
			// Add as either a Param or Variable
			if ($useSWF)
			{	
				$newname = Xml::encodeJsVar($name);
				$code .= 's1.add'
					. (in_array($name, self::$paramNames) ? 'Param' : 'Variable')
					. "($newname, $newvalue);\n";			
			}
			else
			{	// only allow letters and a few special chars
				$newname = preg_replace('%[^a-zA-Z0-9_\-\.]%', '', $name);
				$code .= ", $newname: " . Xml::encodeJsVar($value);
			}
      } 
      		
		if ($useSWF)
		{	
			
			$code .= "s1.write($wgMWPlayerIDJS);\n";
		}
		else
		{
			$code .= "});\n";
		}
      
      $code .= "// ]]>";
      $code .= "</script>";
      
      return $code;
   }
   
   static function useAddOn($addOn)
   {
   	self::$addOns[] = $addOn;
   	include (dirname(__FILE__) . '/AddOns/' . $addOn . '.php');	
   }
   
   static function setId($id)
   {
   	return self::$id = (int)$id;   	
   }
   
   static function getId()
   {
   	return self::$id;   	
   }
}

/**
 * Interface for AddOns
 */ 
interface MediawikiPlayerAddOn
{
    static public function setup(&$wgParser);    
}