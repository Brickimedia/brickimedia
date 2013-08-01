/*!
 * VisualEditor UserInterface Context class.
 *
 * @copyright 2011-2013 VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */

/**
 * UserInterface context.
 *
 * @class
 * @extends ve.Element
 *
 * @constructor
 * @param {ve.ui.Surface} surface
 * @param {Object} [config] Config options
 */
ve.ui.Context = function VeUiContext( surface, config ) {
	// Parent constructor
	ve.Element.call( this, config );

	// Properties
	this.surface = surface;
	this.inspectors = {};
	this.visible = false;
	this.showing = false;
	this.selecting = false;
	this.relocating = false;
	this.embedded = false;
	this.selection = null;
	this.toolbar = null;
	this.popup = new ve.ui.PopupWidget( { '$$': this.$$, '$container': this.surface.getView().$ } );
	this.$menu = this.$$( '<div>' );
	this.inspectors = new ve.ui.WindowSet( surface, ve.ui.inspectorFactory );

	// Initialization
	this.$.addClass( 've-ui-context' ).append( this.popup.$ );
	this.inspectors.$.addClass( 've-ui-context-inspectors' );
	this.popup.$body.append(
		this.$menu.addClass( 've-ui-context-menu' ),
		this.inspectors.$.addClass( 've-ui-context-inspectors' )
	);

	// Events
	this.surface.getModel().connect( this, { 'change': 'onChange' } );
	this.surface.getView().connect( this, {
		'selectionStart': 'onSelectionStart',
		'selectionEnd': 'onSelectionEnd',
		'relocationStart': 'onRelocationStart',
		'relocationEnd': 'onRelocationEnd'
	} );
	this.inspectors.connect( this, {
		'setup': 'onInspectorSetup',
		'open': 'onInspectorOpen',
		'close': 'onInspectorClose'
	} );

	this.$$( this.getElementWindow() ).on( {
		'resize': ve.bind( this.update, this )
	} );
	this.$.add( this.$menu )
		.on( 'mousedown', false );
};

/* Inheritance */

ve.inheritClass( ve.ui.Context, ve.Element );

/* Methods */

/**
 * Handle change events on the model.
 *
 * Changes are ignored while the user is selecting text.
 *
 * @method
 * @param {ve.dm.Transaction[]} transactions Change transactions
 * @param {ve.Range} selection Change selection
 */
ve.ui.Context.prototype.onChange = function ( transactions, selection ) {
	if ( selection ) {
		if ( this.popup.isVisible() ) {
			this.hide();
			this.update();
		} else if ( !this.selecting && !this.draggingAndDropping ) {
			this.update();
		}
	}
};

/**
 * Handle selection start events on the view.
 *
 * @method
 */
ve.ui.Context.prototype.onSelectionStart = function () {
	this.selecting = true;
	this.hide();
};

/**
 * Handle selection end events on the view.
 *
 * @method
 */
ve.ui.Context.prototype.onSelectionEnd = function () {
	this.selecting = false;
	if ( !this.relocating ) {
		this.update();
	}
};

/**
 * Handle selection start events on the view.
 *
 * @method
 */
ve.ui.Context.prototype.onRelocationStart = function () {
	this.relocating = true;
	this.hide();
};

/**
 * Handle selection end events on the view.
 *
 * @method
 */
ve.ui.Context.prototype.onRelocationEnd = function () {
	this.relocating = false;
	this.update();
};

/**
 * Handle an inspector being setup.
 *
 * @method
 * @param {ve.ui.Inspector} inspector Inspector that's been setup
 */
ve.ui.Context.prototype.onInspectorSetup = function () {
	this.selection = this.surface.getModel().getSelection();
};

/**
 * Handle an inspector being opened.
 *
 * @method
 * @param {ve.ui.Inspector} inspector Inspector that's been opened
 */
ve.ui.Context.prototype.onInspectorOpen = function () {
	// Transition between menu and inspector
	this.show( true );
};

/**
 * Handle an inspector being closed.
 *
 * @method
 * @param {ve.ui.Inspector} inspector Inspector that's been opened
 * @param {boolean} accept Changes have been accepted
 */
ve.ui.Context.prototype.onInspectorClose = function () {
	this.update();
};

/**
 * Gets the surface the context is being used in.
 *
 * @method
 * @returns {ve.ui.Surface} Surface of context
 */
ve.ui.Context.prototype.getSurface = function () {
	return this.surface;
};

/**
 * Destroy the context, removing all DOM elements.
 *
 * @method
 * @returns {ve.ui.Context} Context UserInterface
 * @chainable
 */
ve.ui.Context.prototype.destroy = function () {
	this.$.remove();
	return this;
};

/**
 * Updates the context menu.
 *
 * @method
 * @chainable
 */
ve.ui.Context.prototype.update = function () {
	var i, nodes, tools, tool,
		fragment = this.surface.getModel().getFragment( null, false ),
		selection = fragment.getRange(),
		inspector = this.inspectors.getCurrent();

	if ( inspector && selection.equals( this.selection ) ) {
		// There's an inspector, and the selection hasn't changed, update the position
		this.show();
	} else {
		// No inspector is open, or the selection has changed, show a menu of available inspectors
		tools = ve.ui.toolFactory.getToolsForAnnotations( fragment.getAnnotations() );
		nodes = fragment.getCoveredNodes();
		for ( i = 0; i < nodes.length; i++ ) {
			if ( nodes[i].range && nodes[i].range.isCollapsed() ) {
				nodes.splice( i, 1 );
				i--;
			}
		}
		if ( nodes.length === 1 ) {
			tool = ve.ui.toolFactory.getToolForNode( nodes[0].node );
			if ( tool ) {
				tools.push( tool );
			}
		}
		if ( tools.length ) {
			// There's at least one inspectable annotation, build a menu and show it
			this.$menu.empty();
			if ( this.toolbar ) {
				this.toolbar.destroy();
			}
			this.toolbar = new ve.ui.Toolbar( this.surface );
			this.toolbar.addTools( [{ 'name': 'inspectors', 'items' : tools }] );
			this.$menu.append( this.toolbar.$ );
			this.show();
			this.toolbar.initialize();
		} else if ( this.visible ) {
			// Nothing to inspect
			this.hide();
		}
	}

	// Remember selection for next time
	this.selection = selection.clone();

	return this;
};

/**
 * Updates the position and size.
 *
 * @method
 * @chainable
 */
ve.ui.Context.prototype.updateDimensions = function ( transition ) {
	var $container, focusableOffset, focusableWidth,
		surface = this.surface.getView(),
		inspector = this.inspectors.getCurrent(),
		focusedNode = surface.getFocusedNode(),
		// Get cursor position
		position = surface.getSelectionRect(),
		surfaceOffset = surface.$.offset();

	// translate from ce surface
	position = {
		y: position.end.y - surfaceOffset.top,
		x: position.end.x - surfaceOffset.left
	};

	if ( position ) {
		if ( this.embedded ) {
			focusableOffset = ve.Element.getRelativePosition(
				focusedNode.$focusable, this.surface.$
			);
			focusableWidth = focusedNode.$focusable.outerWidth();
			$container = this.$menu;
			position = { 'y': focusableOffset.top };
			// RTL check for Page-level (CE)
			if ( this.surface.view.getDir() === 'rtl' ) {
				position.x = focusableOffset.left;
				this.popup.align = 'left';
			} else {
				position.x = focusableOffset.left + focusableWidth;
				this.popup.align = 'right';
			}
		} else {
			$container = inspector ? this.inspectors.$ : this.$menu;
			this.popup.align = 'center';
		}
		this.$.css( { 'left': position.x, 'top': position.y } );

		this.popup.display(
			position.x,
			position.y,
			$container.outerWidth( true ),
			$container.outerHeight( true ),
			transition
		);
	}

	return this;
};

/**
 * Shows the context menu.
 *
 * @method
 * @chainable
 */
ve.ui.Context.prototype.show = function ( transition ) {
	var inspector = this.inspectors.getCurrent(),
		focusedNode = this.surface.getView().getFocusedNode();

	if ( !this.showing ) {
		this.showing = true;

		this.$.show();
		this.popup.show();

		// Show either inspector or menu
		if ( inspector ) {
			this.$menu.hide();
			this.inspectors.$.show();
			inspector.$.css( 'opacity', 0 );
			// Update size and fade the inspector in after animation is complete
			setTimeout( ve.bind( function () {
				inspector.fitHeightToContents();
				this.updateDimensions( transition );
				inspector.$.css( 'opacity', 1 );
			}, this ), 200 );
		} else {
			this.inspectors.$.hide();
			if (
				focusedNode &&
				focusedNode.$focusable.outerHeight() > this.$menu.outerHeight() * 2
			) {
				this.$.addClass( 've-ui-context-embed' );
				this.embedded = true;
			} else {
				this.$.removeClass( 've-ui-context-embed' );
				this.embedded = false;
			}
			this.$menu.show();
		}

		this.updateDimensions( transition );

		this.visible = true;
		this.showing = false;
	}

	return this;
};

/**
 * Hides the context menu.
 *
 * @method
 * @chainable
 */
ve.ui.Context.prototype.hide = function () {
	var inspector = this.inspectors.getCurrent();

	if ( inspector ) {
		// This will recurse, but inspector will be undefined next time
		inspector.close( 'hide' );
		return this;
	}

	this.popup.hide();
	this.$.hide();
	this.visible = false;

	return this;
};

/**
 * Opens a given inspector.
 *
 * @method
 * @param {string} name Symbolic name of inspector
 * @chainable
 */
ve.ui.Context.prototype.openInspector = function ( name ) {
	if ( !this.inspectors.currentWindow ) {
		this.inspectors.open( name );
	}
	return this;
};
