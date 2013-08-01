/*!
 * VisualEditor UserInterface CodeButtonTool class.
 *
 * @copyright 2011-2013 VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */

/**
 * UserInterface code button tool.
 *
 * @class
 * @extends ve.ui.AnnotationButtonTool
 * @constructor
 * @param {ve.ui.Toolbar} toolbar
 * @param {Object} [config] Config options
 */
ve.ui.CodeButtonTool = function VeUiCodeButtonTool( toolbar, config ) {
	// Parent constructor
	ve.ui.AnnotationButtonTool.call( this, toolbar, config );
};

/* Inheritance */

ve.inheritClass( ve.ui.CodeButtonTool, ve.ui.AnnotationButtonTool );

/* Static Properties */

ve.ui.CodeButtonTool.static.name = 'code';

ve.ui.CodeButtonTool.static.icon = 'code';

ve.ui.CodeButtonTool.static.titleMessage = 'visualeditor-annotationbutton-code-tooltip';

ve.ui.CodeButtonTool.static.annotation = { 'name': 'textStyle/code' };

/* Registration */

ve.ui.toolFactory.register( 'code', ve.ui.CodeButtonTool );

ve.ui.commandRegistry.register( 'code', 'annotation', 'toggle', 'textStyle/code' );
