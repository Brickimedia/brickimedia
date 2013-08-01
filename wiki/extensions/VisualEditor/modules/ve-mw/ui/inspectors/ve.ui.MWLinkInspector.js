/*!
 * VisualEditor UserInterface LinkInspector class.
 *
 * @copyright 2011-2013 VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */

/*global mw */

/**
 * MediaWiki link inspector.
 *
 * @class
 * @extends ve.ui.LinkInspector
 *
 * @constructor
 * @param {ve.ui.Surface} surface
 * @param {Object} [config] Config options
 */
ve.ui.MWLinkInspector = function VeUiMWLinkInspector( surface, config ) {
	// Parent constructor
	ve.ui.LinkInspector.call( this, surface, config );
};

/* Inheritance */

ve.inheritClass( ve.ui.MWLinkInspector, ve.ui.LinkInspector );

/* Static properties */

ve.ui.MWLinkInspector.static.modelClasses = [
	ve.dm.MWExternalLinkAnnotation, ve.dm.MWInternalLinkAnnotation
];

ve.ui.MWLinkInspector.static.linkTargetInputWidget = ve.ui.MWLinkTargetInputWidget;

/* Methods */

/**
 * Gets an annotation object from a target.
 *
 * The type of link is automatically detected based on some crude heuristics.
 *
 * @method
 * @param {string} target Link target
 * @returns {ve.dm.MWInternalLinkAnnotation|ve.dm.MWExternalLinkAnnotation}
 */
ve.ui.MWLinkInspector.prototype.getAnnotationFromText = function ( target ) {
	var title;

	// Figure out if this is an internal or external link
	if ( ve.init.platform.getExternalLinkUrlProtocolsRegExp().test( target ) ) {
		// External link
		return new ve.dm.MWExternalLinkAnnotation( {
			'type': 'link/mwExternal',
			'attributes': {
				'href': target
			}
		} );
	} else {
		// Internal link
		// TODO: In the longer term we'll want to have autocompletion and existence and validity
		// checks using AJAX
		try {
			title = new mw.Title( target );
			if ( title.getNamespaceId() === 6 || title.getNamespaceId() === 14 ) {
				// File: or Category: link
				// We have to prepend a colon so this is interpreted as a link
				// rather than an image inclusion or categorization
				target = ':' + target;
			}
		} catch ( e ) { }
		return new ve.dm.MWInternalLinkAnnotation( {
			'type': 'link/mwInternal',
			'attributes': {
				'title': target,
				'normalizedTitle': ve.dm.MWInternalLinkAnnotation.static.normalizeTitle( target )
			}
		} );
	}
};

/* Registration */

ve.ui.inspectorFactory.register( 'mwLink', ve.ui.MWLinkInspector );
