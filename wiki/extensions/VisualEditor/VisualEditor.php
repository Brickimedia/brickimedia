<?php
/**
 * VisualEditor extension
 *
 * @file
 * @ingroup Extensions
 * @copyright 2011-2013 VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */

/* Setup */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'VisualEditor',
	'author' => array(
		'Trevor Parscal',
		'Inez Korczyński',
		'Roan Kattouw',
		'Neil Kandalgaonkar',
		'Gabriel Wicke',
		'Brion Vibber',
		'Christian Williams',
		'Rob Moen',
		'Subramanya Sastry',
		'Timo Tijhof',
		'Ed Sanders',
	),
	'version' => '0.1.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:VisualEditor',
	'descriptionmsg' => 'visualeditor-desc',
);

$dir = dirname( __FILE__ ) . '/';

// Register files
$wgAutoloadClasses['ApiVisualEditor'] = $dir . 'ApiVisualEditor.php';
$wgAutoloadClasses['ApiVisualEditorEdit'] = $dir . 'ApiVisualEditorEdit.php';
$wgAutoloadClasses['VisualEditorHooks'] = $dir . 'VisualEditor.hooks.php';
$wgAutoloadClasses['VisualEditorMessagesModule'] = $dir . 'VisualEditorMessagesModule.php';
$wgExtensionMessagesFiles['VisualEditor'] = $dir . 'VisualEditor.i18n.php';

// Register API modules
$wgAPIModules['visualeditor'] = 'ApiVisualEditor';
$wgAPIModules['visualeditoredit'] = 'ApiVisualEditorEdit';

// Register Hooks
$wgHooks['BeforePageDisplay'][] = 'VisualEditorHooks::onBeforePageDisplay';
$wgHooks['GetPreferences'][] = 'VisualEditorHooks::onGetPreferences';
$wgHooks['ListDefinedTags'][] = 'VisualEditorHooks::onListDefinedTags';
$wgHooks['MakeGlobalVariablesScript'][] = 'VisualEditorHooks::onMakeGlobalVariablesScript';
$wgHooks['ResourceLoaderGetConfigVars'][] = 'VisualEditorHooks::onResourceLoaderGetConfigVars';
$wgHooks['ResourceLoaderTestModules'][] = 'VisualEditorHooks::onResourceLoaderTestModules';
$wgExtensionFunctions[] = 'VisualEditorHooks::onSetup';

// Bug 49604: Running split test in production if $wgVisualEditorEnableSplitTest is true.
// This requires that GuidedTour and EventLogging are also enabled on the wiki.
$wgHooks['AddNewAccount'][] = 'VisualEditorHooks::onAddNewAccount';
$wgHooks['BeforeWelcomeCreation'][] = 'VisualEditorHooks::onBeforeWelcomeCreation';

// Set default values for new preferences
$wgDefaultUserOptions['visualeditor-enable'] = 0;
$wgDefaultUserOptions['visualeditor-betatempdisable'] = 0;

// Register resource modules

$wgVisualEditorResourceTemplate = array(
	'localBasePath' => dirname( __FILE__ ) . '/modules',
	'remoteExtPath' => 'VisualEditor/modules',
	'group' => 'ext.visualEditor',
);

$wgResourceModules += array(
	'rangy' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			'rangy/rangy-core-1.3.js',
			'rangy/rangy-position-1.3.js',
			'rangy/rangy-export.js',
		),
	),

	'jquery.visibleText' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			'jquery/jquery.visibleText.js',
		),
	),

	'oojs' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			'oojs/oo.js',
		),
	),

	'unicodejs.wordbreak' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			'unicodejs/unicodejs.js',
			'unicodejs/unicodejs.textstring.js',
			'unicodejs/unicodejs.graphemebreakproperties.js',
			'unicodejs/unicodejs.graphemebreak.js',
			'unicodejs/unicodejs.wordbreakproperties.js',
			'unicodejs/unicodejs.wordbreak.js',
		),
	),

	// Added for 18-Jun-2013 split test; safe to remove after
	'ext.visualEditor.splitTest' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			've-mw/init/ve.init.mw.splitTest.js',
		)
	),

	// Alias for backwards compat, safe to remove after
	'ext.visualEditor.editPageInit' => $wgVisualEditorResourceTemplate + array(
		'dependencies' => array(
			'ext.visualEditor.viewPageTarget',
		)
	),

	'ext.visualEditor.viewPageTarget.icons-raster' => $wgVisualEditorResourceTemplate + array(
		'styles' => array(
			've-mw/init/styles/ve.init.mw.ViewPageTarget.Icons-raster.css',
		),
	),

	'ext.visualEditor.viewPageTarget.icons-vector' => $wgVisualEditorResourceTemplate + array(
		'styles' => array(
			've-mw/init/styles/ve.init.mw.ViewPageTarget.Icons-vector.css',
		),
	),

	'ext.visualEditor.viewPageTarget.init' => $wgVisualEditorResourceTemplate + array(
		'scripts' => 've-mw/init/targets/ve.init.mw.ViewPageTarget.init.js',
		'styles' => 've-mw/init/styles/ve.init.mw.ViewPageTarget.init.css',
		'dependencies' => array(
			'jquery.client',
			'mediawiki.Title',
			'mediawiki.Uri',
			'mediawiki.util',
			'user.options',
		),
		'messages' => array(
			'accesskey-ca-editsource',
			'accesskey-ca-ve-edit',
			'pipe-separator',
			'tooltip-ca-createsource',
			'tooltip-ca-editsource',
			'tooltip-ca-ve-edit',
			'visualeditor-ca-createsource',
			'visualeditor-ca-editsource',
			'visualeditor-ca-editsource-section',
			'visualeditor-ca-ve-create',
			'visualeditor-ca-ve-edit',
		),
		'position' => 'top',
	),

	'ext.visualEditor.viewPageTarget' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			've-mw/init/targets/ve.init.mw.ViewPageTarget.js',
		),
		'styles' => array(
			've-mw/init/styles/ve.init.mw.ViewPageTarget.css',
		),
		'skinStyles' => array(
			'vector' => array(
				've-mw/init/styles/ve.init.mw.ViewPageTarget-vector.css',
				've-mw/init/styles/ve.init.mw.ViewPageTarget-vector-hd.css' => array(
					'media' => 'screen and (min-width: 982px)'
				),
			),
			'apex' => array(
				've-mw/init/styles/ve.init.mw.ViewPageTarget-apex.css',
			),
			'monobook' => array(
				've-mw/init/styles/ve.init.mw.ViewPageTarget-monobook.css',
			)
		),
		'dependencies' => array(
			'ext.visualEditor.base',
			'ext.visualEditor.mediawiki',
			'jquery.byteLength',
			'jquery.byteLimit',
			'jquery.client',
			'jquery.placeholder',
			'jquery.visibleText',
			'mediawiki.api',
			'mediawiki.feedback',
			'mediawiki.jqueryMsg',
			'mediawiki.notify',
			'mediawiki.Title',
			'mediawiki.Uri',
			'mediawiki.user',
			'user.options',
			'user.tokens',
		),
		'messages' => array(
			// MW core messages
			'creating',
			'editing',
			'spamprotectionmatch',
			'spamprotectiontext',

			// Messages needed by VE in init phase only (rest go below)
			'visualeditor-loadwarning',
			'visualeditor-loadwarning-token',
			'visualeditor-notification-created',
			'visualeditor-notification-restored',
			'visualeditor-notification-saved',
			'visualeditor-savedialog-identify-anon',
			'visualeditor-savedialog-identify-user',
		),
	),

	'ext.visualEditor.base' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			// ve
			've/ve.js',
			've/ve.EventEmitter.js',

			// init
			've/init/ve.init.js',
			've/init/ve.init.Platform.js',
			've/init/ve.init.Target.js',
		),
		'debugScripts' => array(
			've/ve.debug.js',
		),
		'dependencies' => array(
			'oojs',
			'unicodejs.wordbreak',
			'mediawiki.util',
		),
	),

	'ext.visualEditor.mediawiki' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			// init
			've-mw/init/ve.init.mw.js',
			've-mw/init/ve.init.mw.Platform.js',
			've-mw/init/ve.init.mw.Target.js',
		),
		'dependencies' => array(
			'jquery.client',
			'mediawiki.Uri',
			'ext.visualEditor.base',
		),
	),

	'ext.visualEditor.standalone' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			// init
			've/init/sa/ve.init.sa.js',
			've/init/sa/ve.init.sa.Platform.js',
			've/init/sa/ve.init.sa.Target.js',
		),
		'dependencies' => array(
			'ext.visualEditor.base',
		),
	),

	'ext.visualEditor.specialMessages' => $wgVisualEditorResourceTemplate + array(
		'class' => 'VisualEditorMessagesModule'
	),

	'ext.visualEditor.core' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			// ve
			've/ve.Registry.js',
			've/ve.Factory.js',
			've/ve.Range.js',
			've/ve.Node.js',
			've/ve.NamedClassFactory.js',
			've/ve.BranchNode.js',
			've/ve.LeafNode.js',
			've/ve.Element.js',
			've/ve.Document.js',

			// dm
			've/dm/ve.dm.js',
			've/dm/ve.dm.Model.js',
			've/dm/ve.dm.ModelRegistry.js',
			've/dm/ve.dm.NodeFactory.js',
			've/dm/ve.dm.AnnotationFactory.js',
			've/dm/ve.dm.AnnotationSet.js',
			've/dm/ve.dm.MetaItemFactory.js',
			've/dm/ve.dm.Node.js',
			've/dm/ve.dm.BranchNode.js',
			've/dm/ve.dm.LeafNode.js',
			've/dm/ve.dm.Annotation.js',
			've/dm/ve.dm.InternalList.js',
			've/dm/ve.dm.MetaItem.js',
			've/dm/ve.dm.MetaList.js',
			've/dm/ve.dm.TransactionProcessor.js',
			've/dm/ve.dm.Transaction.js',
			've/dm/ve.dm.Surface.js',
			've/dm/ve.dm.SurfaceFragment.js',
			've/dm/ve.dm.DataString.js',
			've/dm/ve.dm.Document.js',
			've/dm/ve.dm.LinearData.js',
			've/dm/ve.dm.DocumentSlice.js',
			've/dm/ve.dm.DocumentSynchronizer.js',
			've/dm/ve.dm.IndexValueStore.js',
			've/dm/ve.dm.Converter.js',

			've/dm/lineardata/ve.dm.ElementLinearData.js',
			've/dm/lineardata/ve.dm.MetaLinearData.js',

			've/dm/nodes/ve.dm.GeneratedContentNode.js',
			've/dm/nodes/ve.dm.AlienNode.js',
			've/dm/nodes/ve.dm.BreakNode.js',
			've/dm/nodes/ve.dm.CenterNode.js',
			've/dm/nodes/ve.dm.DefinitionListItemNode.js',
			've/dm/nodes/ve.dm.DefinitionListNode.js',
			've/dm/nodes/ve.dm.DivNode.js',
			've/dm/nodes/ve.dm.DocumentNode.js',
			've/dm/nodes/ve.dm.HeadingNode.js',
			've/dm/nodes/ve.dm.ImageNode.js',
			've/dm/nodes/ve.dm.InternalItemNode.js',
			've/dm/nodes/ve.dm.InternalListNode.js',
			've/dm/nodes/ve.dm.ListItemNode.js',
			've/dm/nodes/ve.dm.ListNode.js',
			've/dm/nodes/ve.dm.ParagraphNode.js',
			've/dm/nodes/ve.dm.PreformattedNode.js',
			've/dm/nodes/ve.dm.TableCaptionNode.js',
			've/dm/nodes/ve.dm.TableCellNode.js',
			've/dm/nodes/ve.dm.TableNode.js',
			've/dm/nodes/ve.dm.TableRowNode.js',
			've/dm/nodes/ve.dm.TableSectionNode.js',
			've/dm/nodes/ve.dm.TextNode.js',

			've-mw/dm/nodes/ve.dm.MWEntityNode.js',
			've-mw/dm/nodes/ve.dm.MWHeadingNode.js',
			've-mw/dm/nodes/ve.dm.MWPreformattedNode.js',
			've-mw/dm/nodes/ve.dm.MWInlineImageNode.js',
			've-mw/dm/nodes/ve.dm.MWBlockImageNode.js',
			've-mw/dm/nodes/ve.dm.MWImageCaptionNode.js',
			've-mw/dm/nodes/ve.dm.MWTransclusionNode.js',
			've-mw/dm/nodes/ve.dm.MWReferenceListNode.js',
			've-mw/dm/nodes/ve.dm.MWReferenceNode.js',

			've/dm/annotations/ve.dm.LinkAnnotation.js',
			've-mw/dm/annotations/ve.dm.MWExternalLinkAnnotation.js',
			've-mw/dm/annotations/ve.dm.MWInternalLinkAnnotation.js',
			've/dm/annotations/ve.dm.TextStyleAnnotation.js',
			've-mw/dm/annotations/ve.dm.MWNowikiAnnotation.js',

			've/dm/metaitems/ve.dm.AlienMetaItem.js',
			've-mw/dm/metaitems/ve.dm.MWAlienMetaItem.js',
			've-mw/dm/metaitems/ve.dm.MWCategoryMetaItem.js',
			've-mw/dm/metaitems/ve.dm.MWDefaultSortMetaItem.js',
			've-mw/dm/metaitems/ve.dm.MWLanguageMetaItem.js',
			've-mw/dm/metaitems/ve.dm.MWTransclusionMetaItem.js',

			've-mw/dm/models/ve.dm.MWTransclusionModel.js',
			've-mw/dm/models/ve.dm.MWTransclusionPartModel.js',
			've-mw/dm/models/ve.dm.MWTransclusionContentModel.js',
			've-mw/dm/models/ve.dm.MWTemplateSpecModel.js',
			've-mw/dm/models/ve.dm.MWTemplateModel.js',
			've-mw/dm/models/ve.dm.MWTemplatePlaceholderModel.js',
			've-mw/dm/models/ve.dm.MWTemplateParameterModel.js',

			// ce
			've/ce/ve.ce.js',
			've/ce/ve.ce.DomRange.js',
			've/ce/ve.ce.AnnotationFactory.js',
			've/ce/ve.ce.NodeFactory.js',
			've/ce/ve.ce.Document.js',
			've/ce/ve.ce.View.js',
			've/ce/ve.ce.Annotation.js',
			've/ce/ve.ce.Node.js',
			've/ce/ve.ce.BranchNode.js',
			've/ce/ve.ce.ContentBranchNode.js',
			've/ce/ve.ce.LeafNode.js',
			've/ce/ve.ce.ProtectedNode.js',
			've/ce/ve.ce.FocusableNode.js',
			've/ce/ve.ce.RelocatableNode.js',
			've/ce/ve.ce.ResizableNode.js',
			've/ce/ve.ce.Surface.js',
			've/ce/ve.ce.SurfaceObserver.js',

			've/ce/nodes/ve.ce.GeneratedContentNode.js',
			've/ce/nodes/ve.ce.AlienNode.js',
			've/ce/nodes/ve.ce.BreakNode.js',
			've/ce/nodes/ve.ce.CenterNode.js',
			've/ce/nodes/ve.ce.DefinitionListItemNode.js',
			've/ce/nodes/ve.ce.DefinitionListNode.js',
			've/ce/nodes/ve.ce.DivNode.js',
			've/ce/nodes/ve.ce.DocumentNode.js',
			've/ce/nodes/ve.ce.HeadingNode.js',
			've/ce/nodes/ve.ce.ImageNode.js',
			've/ce/nodes/ve.ce.InternalItemNode.js',
			've/ce/nodes/ve.ce.InternalListNode.js',
			've/ce/nodes/ve.ce.ListItemNode.js',
			've/ce/nodes/ve.ce.ListNode.js',
			've/ce/nodes/ve.ce.ParagraphNode.js',
			've/ce/nodes/ve.ce.PreformattedNode.js',
			've/ce/nodes/ve.ce.TableCaptionNode.js',
			've/ce/nodes/ve.ce.TableCellNode.js',
			've/ce/nodes/ve.ce.TableNode.js',
			've/ce/nodes/ve.ce.TableRowNode.js',
			've/ce/nodes/ve.ce.TableSectionNode.js',
			've/ce/nodes/ve.ce.TextNode.js',

			've-mw/ce/ve.ce.MWResizableNode.js',

			've-mw/ce/nodes/ve.ce.MWEntityNode.js',
			've-mw/ce/nodes/ve.ce.MWHeadingNode.js',
			've-mw/ce/nodes/ve.ce.MWPreformattedNode.js',
			've-mw/ce/nodes/ve.ce.MWInlineImageNode.js',
			've-mw/ce/nodes/ve.ce.MWBlockImageNode.js',
			've-mw/ce/nodes/ve.ce.MWImageCaptionNode.js',
			've-mw/ce/nodes/ve.ce.MWTransclusionNode.js',
			've-mw/ce/nodes/ve.ce.MWReferenceListNode.js',
			've-mw/ce/nodes/ve.ce.MWReferenceNode.js',

			've/ce/annotations/ve.ce.LinkAnnotation.js',
			've-mw/ce/annotations/ve.ce.MWExternalLinkAnnotation.js',
			've-mw/ce/annotations/ve.ce.MWInternalLinkAnnotation.js',
			've/ce/annotations/ve.ce.TextStyleAnnotation.js',
			've-mw/ce/annotations/ve.ce.MWNowikiAnnotation.js',

			// ui
			've/ui/ve.ui.js',
			've/ui/ve.ui.Surface.js',
			've/ui/ve.ui.Context.js',
			've/ui/ve.ui.Frame.js',
			've/ui/ve.ui.Window.js',
			've/ui/ve.ui.WindowSet.js',
			've/ui/ve.ui.Inspector.js',
			've/ui/ve.ui.InspectorFactory.js',
			've/ui/ve.ui.Dialog.js',
			've/ui/ve.ui.DialogFactory.js',
			've/ui/ve.ui.Layout.js',
			've/ui/ve.ui.Widget.js',
			've/ui/ve.ui.Tool.js',
			've/ui/ve.ui.ToolFactory.js',
			've/ui/ve.ui.Toolbar.js',
			've/ui/ve.ui.CommandRegistry.js',
			've/ui/ve.ui.Trigger.js',
			've/ui/ve.ui.TriggerRegistry.js',
			've/ui/ve.ui.Action.js',
			've/ui/ve.ui.ActionFactory.js',
			've-mw/ui/ve.ui.MWDialog.js',

			've/ui/actions/ve.ui.AnnotationAction.js',
			've/ui/actions/ve.ui.ContentAction.js',
			've/ui/actions/ve.ui.FormatAction.js',
			've/ui/actions/ve.ui.HistoryAction.js',
			've/ui/actions/ve.ui.IndentationAction.js',
			've/ui/actions/ve.ui.InspectorAction.js',
			've/ui/actions/ve.ui.ListAction.js',

			've/ui/elements/ve.ui.LabeledElement.js',
			've/ui/elements/ve.ui.GroupElement.js',
			've/ui/elements/ve.ui.FlaggableElement.js',

			've/ui/widgets/ve.ui.PopupWidget.js',
			've/ui/widgets/ve.ui.SelectWidget.js',
			've/ui/widgets/ve.ui.OptionWidget.js',
			've/ui/widgets/ve.ui.SearchWidget.js',
			've/ui/widgets/ve.ui.SurfaceWidget.js',
			've/ui/widgets/ve.ui.ButtonWidget.js',
			've/ui/widgets/ve.ui.IconButtonWidget.js',
			've/ui/widgets/ve.ui.InputWidget.js',
			've/ui/widgets/ve.ui.InputLabelWidget.js',
			've/ui/widgets/ve.ui.TextInputWidget.js',
			've/ui/widgets/ve.ui.OutlineItemWidget.js',
			've/ui/widgets/ve.ui.OutlineWidget.js',
			've/ui/widgets/ve.ui.OutlineControlsWidget.js',
			've/ui/widgets/ve.ui.MenuItemWidget.js',
			've/ui/widgets/ve.ui.MenuSectionItemWidget.js',
			've/ui/widgets/ve.ui.MenuWidget.js',
			've/ui/widgets/ve.ui.LookupInputWidget.js',
			've/ui/widgets/ve.ui.TextInputMenuWidget.js',
			've/ui/widgets/ve.ui.LinkTargetInputWidget.js',
			've-mw/ui/widgets/ve.ui.MWLinkTargetInputWidget.js',
			've-mw/ui/widgets/ve.ui.MWCategoryInputWidget.js',
			've-mw/ui/widgets/ve.ui.MWCategoryPopupWidget.js',
			've-mw/ui/widgets/ve.ui.MWCategoryItemWidget.js',
			've-mw/ui/widgets/ve.ui.MWCategoryWidget.js',
			've-mw/ui/widgets/ve.ui.MWMediaSearchWidget.js',
			've-mw/ui/widgets/ve.ui.MWMediaResultWidget.js',
			've-mw/ui/widgets/ve.ui.MWParameterSearchWidget.js',
			've-mw/ui/widgets/ve.ui.MWParameterResultWidget.js',
			've-mw/ui/widgets/ve.ui.MWReferenceSearchWidget.js',
			've-mw/ui/widgets/ve.ui.MWReferenceResultWidget.js',
			've-mw/ui/widgets/ve.ui.MWTitleInputWidget.js',

			've/ui/layouts/ve.ui.FieldsetLayout.js',
			've/ui/layouts/ve.ui.GridLayout.js',
			've/ui/layouts/ve.ui.PanelLayout.js',
			've/ui/layouts/ve.ui.StackPanelLayout.js',

			've/ui/dialogs/ve.ui.PagedDialog.js',
			've-mw/ui/dialogs/ve.ui.MWMetaDialog.js',
			've-mw/ui/dialogs/ve.ui.MWMediaInsertDialog.js',
			've-mw/ui/dialogs/ve.ui.MWMediaEditDialog.js',
			've-mw/ui/dialogs/ve.ui.MWTransclusionDialog.js',
			've-mw/ui/dialogs/ve.ui.MWReferenceListDialog.js',
			've-mw/ui/dialogs/ve.ui.MWReferenceDialog.js',

			've/ui/tools/ve.ui.ButtonTool.js',
			've/ui/tools/ve.ui.AnnotationButtonTool.js',
			've/ui/tools/ve.ui.DialogButtonTool.js',
			've/ui/tools/ve.ui.InspectorButtonTool.js',
			've/ui/tools/ve.ui.IndentationButtonTool.js',
			've/ui/tools/ve.ui.ListButtonTool.js',
			've/ui/tools/ve.ui.DropdownTool.js',

			've/ui/tools/buttons/ve.ui.BoldButtonTool.js',
			've/ui/tools/buttons/ve.ui.ItalicButtonTool.js',
			've/ui/tools/buttons/ve.ui.ClearButtonTool.js',
			've/ui/tools/buttons/ve.ui.LinkButtonTool.js',
			've-mw/ui/tools/buttons/ve.ui.MWLinkButtonTool.js',
			've-mw/ui/tools/buttons/ve.ui.MWMediaInsertButtonTool.js',
			've-mw/ui/tools/buttons/ve.ui.MWMediaEditButtonTool.js',
			've/ui/tools/buttons/ve.ui.BulletButtonTool.js',
			've/ui/tools/buttons/ve.ui.NumberButtonTool.js',
			've/ui/tools/buttons/ve.ui.IndentButtonTool.js',
			've/ui/tools/buttons/ve.ui.OutdentButtonTool.js',
			've/ui/tools/buttons/ve.ui.RedoButtonTool.js',
			've/ui/tools/buttons/ve.ui.UndoButtonTool.js',
			've-mw/ui/tools/buttons/ve.ui.MWTransclusionButtonTool.js',
			've-mw/ui/tools/buttons/ve.ui.MWReferenceListButtonTool.js',
			've-mw/ui/tools/buttons/ve.ui.MWReferenceButtonTool.js',

			've/ui/tools/dropdowns/ve.ui.FormatDropdownTool.js',
			've-mw/ui/tools/dropdowns/ve.ui.MWFormatDropdownTool.js',

			've/ui/inspectors/ve.ui.AnnotationInspector.js',
			've/ui/inspectors/ve.ui.LinkInspector.js',
			've-mw/ui/inspectors/ve.ui.MWLinkInspector.js',
		),
		'styles' => array(
			// ce
			've/ce/styles/ve.ce.Node.css',
			've-mw/ce/styles/ve.ce.Node.css',
			've/ce/styles/ve.ce.Surface.css',
			// ui
			've/ui/styles/ve.ui.css',
			've/ui/styles/ve.ui.Surface.css',
			've/ui/styles/ve.ui.Context.css',
			've/ui/styles/ve.ui.Frame.css',
			've/ui/styles/ve.ui.Window.css',
			've/ui/styles/ve.ui.Toolbar.css',
			've/ui/styles/ve.ui.Tool.css',
			've-mw/ui/styles/ve.ui.Tool.css',
			've/ui/styles/ve.ui.Element.css',
			've/ui/styles/ve.ui.Layout.css',
			've/ui/styles/ve.ui.Widget.css',
			've-mw/ui/styles/ve.ui.Widget.css',
			've/ui/styles/ve.ui.Inspector.css',
			've-mw/ui/styles/ve.ui.MWInspector.css',
			've/ui/styles/ve.ui.Dialog.css',
			've-mw/ui/styles/ve.ui.MWDialog.css',
		),
		'dependencies' => array(
			'jquery',
			'rangy',
			'unicodejs.wordbreak',
			'ext.visualEditor.base',
			'mediawiki.Title',
			'jquery.autoEllipsis',
		),
		'messages' => array(
			// VE messages for the editor (NOT experimental mode messages)
			'visualeditor',
			'visualeditor-aliennode-tooltip',
			'visualeditor-annotationbutton-bold-tooltip',
			'visualeditor-annotationbutton-code-tooltip',
			'visualeditor-annotationbutton-italic-tooltip',
			'visualeditor-annotationbutton-link-tooltip',
			'visualeditor-languageinspector-title',
			'visualeditor-languageinspector-block-tooltip',
			'visualeditor-languageinspector-block-tooltip-rtldirection',
			'visualeditor-languageinspector-widget-changelang',
			'visualeditor-languageinspector-widget-label-language',
			'visualeditor-languageinspector-widget-label-langcode',
			'visualeditor-languageinspector-widget-label-direction',
			'visualeditor-beta-label',
			'visualeditor-beta-warning',
			'visualeditor-browserwarning',
			'visualeditor-clearbutton-tooltip',
			'visualeditor-dialog-action-apply',
			'visualeditor-dialog-action-cancel',
			'visualeditor-dialog-action-close',
			'visualeditor-dialog-action-goback',
			'visualeditor-dialog-media-content-section',
			'visualeditor-dialog-media-insert-button',
			'visualeditor-dialog-media-insert-title',
			'visualeditor-dialog-media-title',
			'visualeditor-dialog-meta-categories-category',
			'visualeditor-dialog-meta-categories-data-label',
			'visualeditor-dialog-meta-categories-defaultsort-label',
			'visualeditor-dialog-meta-categories-input-matchingcategorieslabel',
			'visualeditor-dialog-meta-categories-input-movecategorylabel',
			'visualeditor-dialog-meta-categories-input-newcategorylabel',
			'visualeditor-dialog-meta-categories-input-placeholder',
			'visualeditor-dialog-meta-categories-options',
			'visualeditor-dialog-meta-categories-section',
			'visualeditor-dialog-meta-categories-sortkey-label',
			'visualeditor-dialog-meta-languages-code-label',
			'visualeditor-dialog-meta-languages-label',
			'visualeditor-dialog-meta-languages-link-label',
			'visualeditor-dialog-meta-languages-readonlynote',
			'visualeditor-dialog-meta-languages-section',
			'visualeditor-dialog-meta-title',
			'visualeditor-dialog-reference-insert-button',
			'visualeditor-dialog-reference-insert-title',
			'visualeditor-dialog-reference-options-group-label',
			'visualeditor-dialog-reference-options-name-label',
			'visualeditor-dialog-reference-options-section',
			'visualeditor-dialog-reference-title',
			'visualeditor-dialog-reference-useexisting-label',
			'visualeditor-dialog-referencelist-title',
			'visualeditor-dialog-transclusion-add-content',
			'visualeditor-dialog-transclusion-add-param',
			'visualeditor-dialog-transclusion-add-template',
			'visualeditor-dialog-transclusion-content',
			'visualeditor-dialog-transclusion-options',
			'visualeditor-dialog-transclusion-placeholder',
			'visualeditor-dialog-transclusion-remove-content',
			'visualeditor-dialog-transclusion-remove-param',
			'visualeditor-dialog-transclusion-remove-template',
			'visualeditor-dialog-transclusion-title',
			'visualeditor-dialog-transclusion-wikitext-label',
			'visualeditor-dialogbutton-media-tooltip',
			'visualeditor-dialogbutton-meta-tooltip',
			'visualeditor-dialogbutton-reference-tooltip',
			'visualeditor-dialogbutton-referencelist-tooltip',
			'visualeditor-dialogbutton-transclusion-tooltip',
			'visualeditor-diff-nochanges',
			'visualeditor-differror',
			'visualeditor-editconflict',
			'visualeditor-editnotices-tool',
			'visualeditor-editsummary',
			'visualeditor-feedback-tool',
			'visualeditor-formatdropdown-format-mw-heading1',
			'visualeditor-formatdropdown-format-mw-heading2',
			'visualeditor-formatdropdown-format-mw-heading3',
			'visualeditor-formatdropdown-format-mw-heading4',
			'visualeditor-formatdropdown-format-mw-heading5',
			'visualeditor-formatdropdown-format-mw-heading6',
			'visualeditor-formatdropdown-format-paragraph',
			'visualeditor-formatdropdown-format-preformatted',
			'visualeditor-formatdropdown-title',
			'visualeditor-help-link',
			'visualeditor-help-label',
			'visualeditor-help-title',
			'visualeditor-historybutton-redo-tooltip',
			'visualeditor-historybutton-undo-tooltip',
			'visualeditor-indentationbutton-indent-tooltip',
			'visualeditor-indentationbutton-outdent-tooltip',
			'visualeditor-inspector-close-tooltip',
			'visualeditor-inspector-remove-tooltip',
			'visualeditor-linkinspector-suggest-external-link',
			'visualeditor-linkinspector-suggest-matching-page',
			'visualeditor-linkinspector-suggest-new-page',
			'visualeditor-linkinspector-title',
			'visualeditor-languageinspector-block-tooltip',
			'visualeditor-languageinspector-block-tooltip-rtldirection',
			'visualeditor-listbutton-bullet-tooltip',
			'visualeditor-listbutton-number-tooltip',
			'visualeditor-media-input-placeholder',
			'visualeditor-meta-tool',
			'visualeditor-outline-control-move-down',
			'visualeditor-outline-control-move-up',
			'visualeditor-outline-control-move-up',
			'visualeditor-parameter-input-placeholder',
			'visualeditor-parameter-search-no-unused',
			'visualeditor-parameter-search-unknown',
			'visualeditor-reference-input-placeholder',
			'visualeditor-referencelist-isempty',
			'visualeditor-referencelist-missingref',
			'visualeditor-savedialog-error-badtoken',
			'visualeditor-savedialog-label-create',
			'visualeditor-savedialog-label-error',
			'visualeditor-savedialog-label-report',
			'visualeditor-savedialog-label-resolve-conflict',
			'visualeditor-savedialog-label-restore',
			'visualeditor-savedialog-label-review',
			'visualeditor-savedialog-label-review-good',
			'visualeditor-savedialog-label-save',
			'visualeditor-savedialog-label-warning',
			'visualeditor-savedialog-title-conflict',
			'visualeditor-savedialog-title-nochanges',
			'visualeditor-savedialog-title-review',
			'visualeditor-savedialog-title-save',
			'visualeditor-savedialog-warning-dirty',
			'visualeditor-saveerror',
			'visualeditor-serializeerror',
			'visualeditor-toolbar-cancel',
			'visualeditor-toolbar-savedialog',
			'visualeditor-viewpage-savewarning',
			'visualeditor-wikitext-warning-title',
			'visualeditor-window-title',

			// Only used if FancyCaptcha is installed and triggered on save
			'captcha-label',
			'fancycaptcha-edit',
			'colon-separator',
		),
	),

	'ext.visualEditor.experimental' => $wgVisualEditorResourceTemplate + array(
		'scripts' => array(
			've-mw/dm/nodes/ve.dm.MWMathNode.js',
			've-mw/ce/nodes/ve.ce.MWMathNode.js',
			've-mw/ui/inspectors/ve.ui.MWMathInspector.js',
			've-mw/ui/tools/buttons/ve.ui.MWMathButtonTool.js',
			've/dm/annotations/ve.dm.LanguageAnnotation.js',
			've/ce/annotations/ve.ce.LanguageAnnotation.js',
			've/ui/inspectors/ve.ui.LanguageInspector.js',
			've/ui/tools/buttons/ve.ui.LanguageButtonTool.js',
			've/ui/widgets/ve.ui.LanguageInputWidget.js',
			've/ui/tools/buttons/ve.ui.CodeButtonTool.js',
		),
		'dependencies' => array(
			'ext.visualEditor.core',
			'jquery.uls',
		),
		'messages' => array(
			// VE messages needed by code that is only in experimental mode
			'visualeditor-mwmathinspector-title',
			'visualeditor-annotationbutton-language-tooltip',
		),
	),

	'ext.visualEditor.icons-raster' => $wgVisualEditorResourceTemplate + array(
		'styles' => array(
			've/ui/styles/ve.ui.Icons-raster.css',
			've-mw/ui/styles/ve.ui.Icons-raster.css',
		),
	),
	'ext.visualEditor.icons-vector' => $wgVisualEditorResourceTemplate + array(
		'styles' => array(
			've/ui/styles/ve.ui.Icons-vector.css',
			've-mw/ui/styles/ve.ui.Icons-vector.css',
		),
	),
);


/* Configuration */

// Array of ResourceLoader module names (strings) that should be loaded when VisualEditor is
// loaded. Other extensions that extend VisualEditor should add to this array.
$wgVisualEditorPluginModules = array();

// URL to the Parsoid instance
// MUST NOT end in a slash due to Parsoid bug
$wgVisualEditorParsoidURL = 'http://localhost:8000';

// Interwiki prefix to pass to the Parsoid instance
// Parsoid will be called as $url/$prefix/$pagename
$wgVisualEditorParsoidPrefix = 'localhost';

// Timeout for HTTP requests to Parsoid in seconds
$wgVisualEditorParsoidTimeout = 100;

// Namespaces to enable VisualEditor in
$wgVisualEditorNamespaces = $wgContentNamespaces;

// Whether to use change tagging for VisualEditor edits
$wgVisualEditorUseChangeTagging = true;

// Whether to log analytic events using EventLogging
$wgVisualEditorEnableEventLogging = false;

// Whether to disable for logged-in users
// This allows you to enable the 'visualeditor-enable' preference by default
// but still disable VE for logged-out users (by setting this to false).
$wgVisualEditorDisableForAnons = false;

// Whether to enable incomplete experimental code
$wgVisualEditorEnableExperimentalCode = false;

// Whether to use the 'add' or 'replace' tabLayout
// * add: Adds #ca-ve-edit.
// * replace: Re-creates #ca-edit for VisualEditor and adds #ca-editsource.
$wgVisualEditorTabLayout = 'replace';
