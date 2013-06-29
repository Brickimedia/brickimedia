<?php
/**
 * @file
 * @ingroup Templates
 */
if ( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

/**
 * HTML template for Special:Phalanx
 * @ingroup Templates
 */
class PhalanxTemplate extends QuickTemplate {
	function execute() {
		$supportedLanguages = PhalanxHelper::getSupportedLanguages();
?>
<div id="phalanx-mainframe">
	<div class="phalanx-tabs" id="phalanx-nav-area">
		<ul>
			<li class="phalanx-accent selected" id="phalanx-main-tab"><a href="#main"><?php echo wfMessage( 'phalanx-tab-main' )->text() ?></a></li>
			<li class="phalanx-accent" id="phalanx-test-tab"><a href="#test"><?php echo wfMessage( 'phalanx-tab-secondary' )->text() ?></a></li>
		</ul>
	</div>

	<div id="phalanx-content-area">
		<div id="phalanx-main-tab-content">
			<div id="phalanx-filter-area">
				<fieldset id="phalanx-input-filter">
					<legend><?php echo wfMessage( 'phalanx-legend-input' )->text() ?></legend>
					<form id="phalanx-block" method="post" action="<?php echo $this->data['action'] ?>">
						<?php if ( !empty( $this->data['data']['id'] ) ) { ?>
						<input type="hidden" name="id" value="<?php echo $this->data['data']['id'] ?>" />
						<?php } ?>
						<!-- Filter -->
						<div id="phalanx-block-texts">
							<div id="phalanx-feedback-msg" class="clearfix"></div>
							<div class="clearfix">
								<label for="wpPhalanxFilter" class="left"><?php echo wfMessage( 'phalanx-label-filter' )->text() ?></label>
								<input type="text" id="wpPhalanxFilter" name="wpPhalanxFilter" class="blue" size="40" value="<?php echo $this->data['data']['text'] ?>" />
							</div>
							<div class="clearfix">
								<div class="left-spacer">&nbsp;</div>
								<?php echo Xml::check( 'wpPhalanxFormatRegex', !empty( $this->data['data']['regex'] ), array( 'id' => 'wpPhalanxFormatRegex' ) ) ?>
								<label for="wpPhalanxFormatRegex"><?php echo wfMessage( 'phalanx-format-regex' )->text() ?></label>

								<?php echo Xml::check( 'wpPhalanxFormatCase', !empty( $this->data['data']['case'] ), array( 'id' => 'wpPhalanxFormatCase' ) ) ?>
								<label for="wpPhalanxFormatCase"><?php echo wfMessage( 'phalanx-format-case' )->text() ?></label>

								<?php echo Xml::check( 'wpPhalanxFormatExact', !empty( $this->data['data']['exact'] ), array( 'id' => 'wpPhalanxFormatExact' ) ) ?>
								<label for="wpPhalanxFormatExact"><?php echo wfMessage( 'phalanx-format-exact' )->text() ?></label>
							</div>
							<div class="clearfix">
								<label for="wpPhalanxExpire" class="left"><?php echo wfMessage( 'phalanx-label-expiry' )->text() ?></label>
								<select name="wpPhalanxExpire" id="wpPhalanxExpire" class="blue">
									<?php foreach ( $this->data['expiries'] as $k => $v ) { ?><option<?php echo ( $k == $this->data['default_expire'] ) ? ' selected="selected"' : '' ?> value="<?php echo $k ?>"><?php echo $v ?></option>
								<?php } ?></select>
								<span id="phalanx-expire-old"></span>
							</div>
						</div>
						<!-- Type -->
						<div class="clearfix">
							<div class="left-spacer"><?php echo wfMessage( 'phalanx-label-type' )->text() ?></div>
							<div id="phalanx-block-types" class="phalanx-block-types">
								<div>
									<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['type'][1] ), array( 'id' => 'wpPhalanxTypeContent', 'value' => 1 ) ) ?>
									<label for="wpPhalanxTypeContent"><?php echo wfMessage( 'phalanx-type-content' )->text() ?></label>

									<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['type'][2] ), array( 'id' => 'wpPhalanxTypeSummary', 'value' => 2 ) ) ?>
									<label for="wpPhalanxTypeSummary"><?php echo wfMessage( 'phalanx-type-summary' )->text() ?></label>
								</div>
								<div>
									<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['type'][4] ), array( 'id' => 'wpPhalanxTypeTitle', 'value' => 4 ) ) ?>
									<label for="wpPhalanxTypeTitle"><?php echo wfMessage( 'phalanx-type-title' )->text() ?></label>
								</div>
								<div>
									<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['type'][8] ), array( 'id' => 'wpPhalanxTypeUser', 'value' => 8 ) ) ?>
									<label for="wpPhalanxTypeUser"><?php echo wfMessage( 'phalanx-type-user' )->text() ?></label>

									<!--<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['type'][64] ), array( 'id' => 'wpPhalanxTypeCreation', 'value' => 64 ) ) ?>
									<label for="wpPhalanxTypeCreation"><?php echo wfMessage( 'phalanx-type-wiki-creation' )->text() ?></label>-->
								</div>
								<!--<div>
									<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['type'][16] ), array( 'id' => 'wpPhalanxTypeQuestion', 'value' => 16 ) ) ?>
									<label for="wpPhalanxTypeQuestion"><?php echo wfMessage( 'phalanx-type-answers-question-title' )->text() ?></label>

									<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['type'][32] ), array( 'id' => 'wpPhalanxTypeFilterWords', 'value' => 32 ) ) ?>
									<label for="wpPhalanxTypeFilterWords"><?php echo wfMessage( 'phalanx-type-answers-recent-questions' )->text() ?></label>
								</div>-->
								<?php if ( $this->data['showEmail'] ) { ?>
								<div>
									<?php echo Xml::check( 'wpPhalanxType[]', !empty( $this->data['data']['typeFilter'][256] ), array( 'id' => 'wpPhalanxTypeEmail', 'value' => 256 ) ) ?>
									<label for="wpPhalanxTypeEmail"><?php echo wfMessage( 'phalanx-type-user-email' )->text() ?></label>
								</div>
								<?php } ?>
							</div>
							<div id="phalanx-help">
								<div id="phalanx-help-1" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-content' )->text() ?></div>
								<div id="phalanx-help-2" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-summary' )->text() ?></div>
								<div id="phalanx-help-4" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-title' )->text() ?></div>
								<div id="phalanx-help-8" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-user' )->text() ?></div>
								<!--<div id="phalanx-help-64" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-wiki-creation' )->text() ?></div>
								<div id="phalanx-help-16" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-answers-question-title' )->text() ?></div>
								<div id="phalanx-help-32" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-answers-recent-questions' )->text() ?></div>-->
								<div id="phalanx-help-256" class="phalanx-accent"><?php echo wfMessage( 'phalanx-help-type-user-email' )->text() ?></div>
							</div>
						</div>
						<!-- Reason -->
						<div id="phalanx-block-optionals" class="clearfix">
							<div class="clearfix">
								<label for="wpPhalanxReason" class="left"><?php echo wfMessage( 'phalanx-label-reason' )->text() ?></label>
								<input type="text" id="wpPhalanxReason" name="wpPhalanxReason" class="blue" size="40" value="<?php echo $this->data['data']['reason'] ?>" />
							</div>
							<div class="clearfix">
								<label for="wpPhalanxLanguages" class="left"><?php echo wfMessage( 'phalanx-label-lang' )->text() ?></label>
								<select name="wpPhalanxLanguages" id="wpPhalanxLanguages" class="blue">
									<?php foreach ( $supportedLanguages as $k => $v ) { ?><option<?php echo ( $k == $this->data['data']['lang'] ) ? ' selected="selected"' : '' ?> value="<?php echo $k ?>"><?php echo $v ?></option>
								<?php } ?></select>
							</div>
							<div class="clearfix">
								<input type="submit" id="wpPhalanxSubmit" name="wpPhalanxSubmit" value="<?php echo wfMessage( 'phalanx-add-block' )->text() ?>" />
								<input type="reset" value="<?php echo wfMessage( 'phalanx-reset-form' )->text() ?>" />
							</div>
						</div>

					</form>
				</fieldset>
			</div>

			<div id="phalanx-check-area">
				<fieldset>
				<legend><?php echo wfMessage( 'phalanx-legend-listing' )->text() ?></legend>
				<form id="phalanx-filters" method="get" action="<?php echo $this->data['action'] ?>">
					<div id="phalanx-check-options">
						<label for="wpPhalanxCheckBlocker"><?php echo wfMessage( 'phalanx-view-blocker' )->text() ?></label>
						<input type="text" id="wpPhalanxCheckBlocker" name="wpPhalanxCheckBlocker" class="blue" size="30" value="<?php echo $this->data['data']['checkBlocker'] ?>" />
						<input type="submit" value="<?php echo wfMessage( 'phalanx-view-blocks' )->text() ?>" />

						<label for="wpPhalanxCheckId"><?php echo wfMessage( 'phalanx-view-id' )->text() ?></label>
						<input type="text" id="wpPhalanxCheckId" name="id" class="blue" size="5" value="<?php echo $this->data['data']['checkId'] ?>" />

						<input type="submit" value="<?php echo wfMessage( 'phalanx-view-id-submit' )->text() ?>" />
						<div id="phalanx-block-types-filter" class="phalanx-block-types">
							<div>
								<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][1] ), array( 'id' => 'wpPhalanxTypeContentFilter', 'value' => 1 ) ) ?>
								<label for="wpPhalanxTypeContentFilter"><?php echo wfMessage( 'phalanx-type-content' )->text() ?></label>

								<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][2] ), array( 'id' => 'wpPhalanxTypeSummaryFilter', 'value' => 2 ) ) ?>
								<label for="wpPhalanxTypeSummaryFilter"><?php echo wfMessage( 'phalanx-type-summary' )->text() ?></label>
							</div>
							<div>
								<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][4] ), array( 'id' => 'wpPhalanxTypeTitleFilter', 'value' => 4 ) ) ?>
								<label for="wpPhalanxTypeTitleFilter"><?php echo wfMessage( 'phalanx-type-title' )->text() ?></label>
							</div>
							<div>
								<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][8] ), array( 'id' => 'wpPhalanxTypeUserFilter', 'value' => 8 ) ) ?>
								<label for="wpPhalanxTypeUserFilter"><?php echo wfMessage( 'phalanx-type-user' )->text() ?></label>
								<!--<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][64] ), array( 'id' => 'wpPhalanxTypeCreationFilter', 'value' => 64 ) ) ?>
								<label for="wpPhalanxTypeCreationFilter"><?php echo wfMessage( 'phalanx-type-wiki-creation' )->text() ?></label>-->
							</div>
							<!--<div>
								<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][16] ), array( 'id' => 'wpPhalanxTypeQuestionFilter', 'value' => 16 ) ) ?>
								<label for="wpPhalanxTypeQuestionFilter"><?php echo wfMessage( 'phalanx-type-answers-question-title' )->text() ?></label>

								<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][32] ), array( 'id' => 'wpPhalanxTypeFilterWordsFilter', 'value' => 32 ) ) ?>
								<label for="wpPhalanxTypeFilterWordsFilter"><?php echo wfMessage( 'phalanx-type-answers-recent-questions' )->text() ?></label>
							</div>-->
							<div>
								<?php echo Xml::check( 'wpPhalanxTypeFilter[]', !empty( $this->data['data']['typeFilter'][256] ), array( 'id' => 'wpPhalanxTypeEmailFilter', 'value' => 256 ) ) ?>
								<label for="wpPhalanxTypeEmailFilter"><?php echo wfMessage( 'phalanx-type-user-email' )->text() ?></label>
							</div>
						</div>
					</div>
					<div id="phalanx-check-results">
						<?php echo $this->data['listing'] ?>
					</div>
				</form>
				</fieldset>
			</div>
		</div>

		<div id="phalanx-test-tab-content">
			<fieldset>
				<form id="phalanx-block-test" action="#test">
					<label for="phalanx-block-text"><?php echo wfMessage( 'phalanx-test-description' )->text() ?></label>
					<input type="text" id="phalanx-block-text" value="<?php echo $this->data['data']['test'] ?>" /><br />
					<input type="submit" value="<?php echo wfMessage( 'phalanx-test-submit' )->text() ?>" />
				</form>
			</fieldset>
			<fieldset>
				<legend><?php echo wfMessage( 'phalanx-test-results-legend' )->text() ?></legend>
				<div id="phalanx-block-test-result"></div>
			</fieldset>
		</div>
	</div>
</div>
<?php
	}
}
