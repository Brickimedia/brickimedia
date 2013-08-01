/*!
 * VisualEditor DataModel MWBlockImageNode class.
 *
 * @copyright 2011-2013 VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */

/**
 * DataModel MediaWiki image node.
 *
 * @class
 * @extends ve.dm.BranchNode
 * @constructor
 * @param {number} [length] Length of content data in document
 * @param {Object} [element] Reference to element in linear model
 */
ve.dm.MWBlockImageNode = function VeDmMWBlockImageNode( length, element ) {
	ve.dm.BranchNode.call( this, 0, element );
};

/* Inheritance */

ve.inheritClass( ve.dm.MWBlockImageNode, ve.dm.BranchNode );

/* Static Properties */

ve.dm.MWBlockImageNode.static.name = 'mwBlockImage';

ve.dm.MWBlockImageNode.static.storeHtmlAttributes = {
	'blacklist': [ 'typeof', 'class', 'src', 'resource', 'width', 'height', 'href', 'rel' ]
};

ve.dm.MWBlockImageNode.static.handlesOwnChildren = true;

ve.dm.MWBlockImageNode.static.childNodeTypes = [ 'mwImageCaption' ];

ve.dm.MWBlockImageNode.static.matchTagNames = [ 'figure' ];

ve.dm.MWBlockImageNode.static.matchRdfaTypes = [
	'mw:Image',
	'mw:Image/Thumb',
	'mw:Image/Frame',
	'mw:Image/Frameless'
];

ve.dm.MWBlockImageNode.static.toDataElement = function ( domElements, converter ) {
	var $figure = $( domElements[0] ),
		$a = $figure.children( 'a' ).eq( 0 ),
		$img = $a.children( 'img' ).eq( 0 ),
		$caption = $figure.children( 'figcaption' ).eq( 0 ),
		typeofAttr = $figure.attr( 'typeof' ),
		classes = $figure.attr( 'class' ),
		recognizedClasses = [],
		attributes = {
			href: $a.attr( 'href' ),
			src: $img.attr( 'src' ),
			width: $img.attr( 'width' ),
			height: $img.attr( 'height' ),
			resource: $img.attr( 'resource' ),
			originalClasses: classes
		};

	// Extract individual classes
	classes = typeof classes === 'string' ? classes.trim().split( /\s+/ ) : [];

	// Type
	switch ( typeofAttr ) {
		case 'mw:Image/Thumb':
			attributes.type = 'thumb';
			break;
		case 'mw:Image/Frame':
			attributes.type = 'frame';
			break;
		case 'mw:Image/Frameless':
			attributes.type = 'frameless';
			break;
		case 'mw:Image':
			attributes.type = 'none';
			break;
	}

	// Horizontal alignment
	if ( classes.indexOf( 'mw-halign-left' ) !== -1 ) {
		attributes.align = 'left';
		recognizedClasses.push( 'mw-halign-left' );
	} else if ( classes.indexOf( 'mw-halign-right' ) !== -1 ) {
		attributes.align = 'right';
		recognizedClasses.push( 'mw-halign-right' );
	} else if ( classes.indexOf( 'mw-halign-center' ) !== -1 ) {
		attributes.align = 'center';
		recognizedClasses.push( 'mw-halign-center' );
	} else if ( classes.indexOf( 'mw-halign-none' ) !== -1 ) {
		attributes.align = 'none';
		recognizedClasses.push( 'mw-halign-none' );
	} else {
		attributes.align = 'default';
	}

	// Default-size
	if ( classes.indexOf( 'mw-default-size' ) !== -1 ) {
		attributes.defaultSize = true;
		recognizedClasses.push( 'mw-default-size' );
	}

	// Store unrecognized classes so we can restore them on the way out
	attributes.unrecognizedClasses = ve.simpleArrayDifference( classes, recognizedClasses );

	if ( $caption.length === 0 ) {
		return [
			{ 'type': 'mwBlockImage', 'attributes': attributes },
			{ 'type': 'mwImageCaption' },
			{ 'type': '/mwImageCaption' },
			{ 'type': '/mwBlockImage' }
		];
	} else {
		return [ { 'type': 'mwBlockImage', 'attributes': attributes } ].
			concat( converter.getDataFromDomRecursionClean( $caption[0], { 'type': 'mwImageCaption' } ) ).
			concat( [ { 'type': '/mwBlockImage' } ] );
	}
};

// TODO: Consider using jQuery instead of pure JS.
// TODO: At this moment node is not resizable but when it will be then adding defaultSize class
// should be more conditional.
ve.dm.MWBlockImageNode.static.toDomElements = function ( data, doc, converter ) {
	var dataElement = data[0],
		figure = doc.createElement( 'figure' ),
		a = doc.createElement( 'a' ),
		img = doc.createElement( 'img' ),
		wrapper = doc.createElement( 'div' ),
		classes = [],
		originalClasses = dataElement.attributes.originalClasses,
		captionData = data.slice( 1, -1 );

	// Type
	switch ( dataElement.attributes.type ) {
		case 'thumb':
			figure.setAttribute( 'typeof', 'mw:Image/Thumb' );
			break;
		case 'frame':
			figure.setAttribute( 'typeof', 'mw:Image/Frame' );
			break;
		case 'frameless':
			figure.setAttribute( 'typeof', 'mw:Image/Frameless' );
			break;
		case 'none':
			figure.setAttribute( 'typeof', 'mw:Image' );
			break;
	}

	// Default-size
	if ( dataElement.attributes.defaultSize === true ) {
		classes.push( 'mw-default-size' );
	}

	// Horizontal alignment
	switch ( dataElement.attributes.align ) {
		case 'left':
			classes.push( 'mw-halign-left' );
			break;
		case 'right':
			classes.push( 'mw-halign-right' );
			break;
		case 'center':
			classes.push( 'mw-halign-center' );
			break;
		case 'none':
			classes.push( 'mw-halign-none' );
			break;
	}

	if ( dataElement.attributes.unrecognizedClasses ) {
		classes = ve.simpleArrayUnion( classes, dataElement.attributes.unrecognizedClasses );
	}

	if (
		originalClasses &&
		ve.compare( originalClasses.trim().split( /\s+/ ).sort(), classes.sort() )
	) {
		figure.className = originalClasses;
	} else if ( classes.length > 0 ) {
		figure.className = classes.join( ' ' );
	}
	a.setAttribute( 'href', dataElement.attributes.href );
	img.setAttribute( 'src', dataElement.attributes.src );
	img.setAttribute( 'width', dataElement.attributes.width );
	img.setAttribute( 'height', dataElement.attributes.height );
	img.setAttribute( 'resource', dataElement.attributes.resource );
	figure.appendChild( a );
	a.appendChild( img );

	// If length of captionData is smaller or equal to 2 it means that there is no caption or that
	// it is empty - in both cases we are going to skip appending <figcaption>.
	if ( captionData.length > 2 ) {
		converter.getDomSubtreeFromData( data.slice( 1, -1 ), wrapper );
		while ( wrapper.firstChild ) {
			figure.appendChild( wrapper.firstChild );
		}
	}
	return [ figure ];
};

/* Methods */

/**
 * Get the caption node of the image.
 *
 * @method
 * @returns {ve.dm.MWImageCaptionNode|null} Caption node, if present
 */
ve.dm.MWBlockImageNode.prototype.getCaptionNode = function() {
	var node = this.children[0];
	return node instanceof ve.dm.MWImageCaptionNode ? node : null;
};

/* Registration */

ve.dm.modelRegistry.register( ve.dm.MWBlockImageNode );
