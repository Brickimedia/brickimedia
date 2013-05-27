<?php
/**
 * Hooks for FooterManager extension
 *
 * @file
 * @ingroup Extensions
 */

// Footer Manager hooks
class FooterManagerHooks {

	/* Functions */

	// Configuration
	public static function configureLinks( $skin, $template ) {
		FooterManager::setFooterLinks($template);

		return true;
	}

	public static function configureIconsAndBanners($outputPage) {
		FooterManager::setFooterIcons($outputPage);
		FooterManager::setFooterBanners($outputPage);

		return true;
	}
}
