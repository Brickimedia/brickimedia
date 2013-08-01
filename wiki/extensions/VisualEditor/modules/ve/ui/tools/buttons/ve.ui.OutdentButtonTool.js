/*!
 * VisualEditor UserInterface OutdentButtonTool class.
 *
 * @copyright 2011-2013 VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */

/**
 * UserInterface outdent button tool.
 *
 * @class
 * @extends ve.ui.IndentationButtonTool
 * @constructor
 * @param {ve.ui.Toolbar} toolbar
 * @param {Object} [config] Config options
 */
ve.ui.OutdentButtonTool = function VeUiOutdentButtonTool( toolbar, config ) {
	// Parent constructor
	ve.ui.IndentationButtonTool.call( this, toolbar, config );
};

/* Inheritance */

ve.inheritClass( ve.ui.OutdentButtonTool, ve.ui.IndentationButtonTool );

/* Static Properties */

ve.ui.OutdentButtonTool.static.name = 'outdent';

ve.ui.OutdentButtonTool.static.icon = 'outdent-list';

ve.ui.OutdentButtonTool.static.titleMessage = 'visualeditor-indentationbutton-outdent-tooltip';

ve.ui.OutdentButtonTool.static.method = 'decrease';

/* Registration */

ve.ui.toolFactory.register( 'outdent', ve.ui.OutdentButtonTool );

// TODO: Consistency between outdent and unindent.
ve.ui.commandRegistry.register( 'outdent', 'indentation', 'decrease' );

ve.ui.triggerRegistry.register( 'outdent', new ve.ui.Trigger( 'shift+tab' ) );
