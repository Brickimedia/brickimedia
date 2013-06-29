<?php
/**
 * Classes for YaShare for Wiki extension
 *
 * @file
 * @ingroup Extensions
 */

// FooterManager class
class FooterManager {

	/* Fields */

	/* Functions */
	
	public static function setFooterLinks($template) {
		global $wgFooterManagerLinks, $wgFooterManagerCustomLinks;

		foreach ( $template->data["footerlinks"] as $footerLinksKey => &$footerLinksBlock ) {
			if ( count($footerLinksBlock) > 0 ) {		
				foreach ( $footerLinksBlock as $linkKey => &$footerLink ) {				
					if ( isset($wgFooterManagerLinks[$footerLink]) && !$wgFooterManagerLinks[$footerLink] ) {
						unset($footerLinksBlock[$linkKey]);
					}
				}
			} 
		}
		
		//TODO: custom links $template->set( 'uniqId', $text ); see example at Skin and SkinTemplate
	}
	
	public static function setFooterIcons($outputPage) {
		global $wgFooterShowPoweredbyMwIcon, $wgFooterIcons;
		
		if(!$wgFooterShowPoweredbyMwIcon && isset($wgFooterIcons["poweredby"]) &&  isset($wgFooterIcons["poweredby"]["mediawiki"])){
			unset($wgFooterIcons["poweredby"]["mediawiki"]);
		}	
	}
	
	public static function setFooterBanners($outputPage) {
		global $wgFooterIcons, $wgFooterManagerBanners, $wgFooterManagerDefBannersBlock;
		
		$idx = 0;
		
		foreach($wgFooterManagerBanners as $analyticKey => $analyticConfig) {
			if(is_array($analyticConfig)){
				
				if (isset($analyticConfig['headscript'])) {
					$outputPage->addHeadItem('wfmBannersItem'.($idx++), $analyticConfig['headscript']);
				}
				if (isset($analyticConfig['icon'])) {
					$defBlock = isset($analyticConfig['block']) ? $analyticConfig['block'] : $wgFooterManagerDefBannersBlock;
					$wgFooterIcons[$defBlock][] = $analyticConfig['icon'];
				}
				if (isset($analyticConfig['bottomscript'])) {
					$outputPage->addScript($analyticConfig['bottomscript']);
				}
			}
			else { # is Id
				#TODO: supported analytics
			}	
		}
	}
}