<?php
/**
 * This file contains the contents of the Settings page
 * @since 0.3.6
 * @package IT_Exchange
*/
?>
<div class="wrap">
	<?php
	screen_icon( 'it-exchange' );
	$this->print_general_settings_tabs();
	do_action( 'it_exchange_general_settings_page_top' );

	$form->start_form( $form_options, 'exchange-general-settings' );
	?>
		<?php do_action( 'it_exchange_general_settings_form_top', $form ); ?>
		<table class="form-table">
			<?php do_action( 'it_exchange_general_settings_table_top', $form ); ?>
			<tr valign="top">
				<th scope="row"><strong><?php _e( 'Company Details', 'it-l10n-ithemes-exchange' ); ?></strong></th>
				<td></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="company-name"><?php _e( 'Company Name', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php $form->add_text_box( 'company-name', array( 'class' => 'normal-text' ) ); ?>
					<br /><span class="description"><?php _e( 'The name used in customer receipts.', 'it-l10n-ithemes-exchange' ); ?></span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="company-tax-id"><?php _e( 'Company Tax ID', 'it-l10n-ithemes-exchange' ) ?> <span class="tip" title="<?php _e( 'In the U.S., this is your Federal Tax ID Number', 'it-l10n-ithemes-exchange' ); ?>">i</span></label></th>
				<td>
					<?php $form->add_text_box( 'company-tax-id', array( 'class' => 'normal-text' ) ); ?>
                    <p class="description"><a href="http://www.irs.gov/Businesses/Small-Businesses-&amp;-Self-Employed/Employer-ID-Numbers-(EINs)-" target="_blank"><?php _e( 'Click here for more info about obtaining a Tax ID in the US', 'it-l10n-ithemes-exchange' ); ?></a></p>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="company-email"><?php _e( 'Company Email', 'it-l10n-ithemes-exchange' ) ?> <span class="tip" title="<?php _e( 'Where do you want customer inquiries to go?', 'it-l10n-ithemes-exchange' ); ?>">i</span></label></th>
				<td>
					<?php $form->add_text_box( 'company-email', array( 'class' => 'normal-text' ) ); ?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="company-phone"><?php _e( 'Company Phone', 'it-l10n-ithemes-exchange' ) ?> <span class="tip" title="<?php _e( 'This is your main customer service line.', 'it-l10n-ithemes-exchange' ); ?>">i</span></label></th>
				<td>
					<?php $form->add_text_box( 'company-phone', array( 'class' => 'normal-text' ) ); ?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="company-address"><?php _e( 'Company Address', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php $form->add_text_area( 'company-address', array( 'rows' => 5, 'cols' => 30 ) ); ?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="company-base-country"><?php _e( 'Base Country', 'it-l10n-ithemes-exchange' ) ?> <span class="tip" title="<?php esc_attr_e( __( 'This is the country where your business is located', 'it-l10n-ithemes-exchange' ) ); ?>">i</span></label></th>
				<td>
					<?php $form->add_drop_down( 'company-base-country', it_exchange_get_data_set( 'countries' ) ); ?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="company-base-state"><?php _e( 'Base State / Province', 'it-l10n-ithemes-exchange' ) ?> <span class="tip" title="<?php esc_attr_e( __( 'This is the state / province where your business is located', 'it-l10n-ithemes-exchange' ) ); ?>">i</span></label></th>
				<td class="company-base-state-field-td">
					<?php 
					$country = $form->get_option( 'company-base-country' );
					$states  = it_exchange_get_data_set( 'states', array( 'country' => $country ) );
					if ( ! empty( $states ) ) {
						$form->add_drop_down( 'company-base-state', $states );
					} else {
						$form->add_text_box( 'company-base-state', array( 'class' => 'small-text', 'max-length' => 3 ) );
						?><p class="description"><?php printf( __( 'Please use the 2-3 character %sISO abbreviation%s for country subdivisions', 'it-l10n-ithemes-exchange' ), '<a href="http://en.wikipedia.org/wiki/ISO_3166-2" target="_blank">', '</a>' ); ?></p><?php
					}
					?>
				</td>
			</tr>
			<?php do_action( 'it_exchange_general_settings_before_settings_currency', $form ); ?>
			<tr valign="top">
				<th scope="row"><strong><?php _e( 'Currency Settings', 'it-l10n-ithemes-exchange' ); ?></strong></th>
				<td></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="default-currency"><?php _e( 'Default Currency', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php $form->add_drop_down( 'default-currency', $this->get_default_currency_options() ); ?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="currency-symbol-position"><?php _e( 'Symbol Position', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php 
					$symbol_positions = array( 'before' => __( 'Before: $10.00', 'it-l10n-ithemes-exchange' ), 'after' => __( 'After: 10.00$', 'it-l10n-ithemes-exchange' ) );
					$form->add_drop_down( 'currency-symbol-position', $symbol_positions ); ?>
					<br /><span class="description"><?php _e( 'Where should the currency symbol be placed in relation to the price?', 'it-l10n-ithemes-exchange' ); ?></span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="currency-thousands-separator"><?php _e( 'Thousands Separator', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php $form->add_text_box( 'currency-thousands-separator', array( 'class' => 'small-text', 'maxlength' => '1' ) ); ?>
					<br /><span class="description"><?php _e( 'What character would you like to use to separate thousands when displaying prices?', 'it-l10n-ithemes-exchange' ); ?></span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="currency-decimals-separator"><?php _e( 'Decimals Separator', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php $form->add_text_box( 'currency-decimals-separator', array( 'class' => 'small-text', 'maxlength' => '1' ) ); ?>
					<br /><span class="description"><?php _e( 'What character would you like to use to separate decimals when displaying prices?', 'it-l10n-ithemes-exchange' ); ?></span>
				</td>
			</tr>
            <?php do_action( 'it_exchange_general_settings_before_settings_registration', $form ); ?>
			<tr valign="top">
				<th scope="row"><strong><?php _e( 'Customer Registration Settings', 'it-l10n-ithemes-exchange' ); ?></strong></th>
				<td></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="site-registration"><?php _e( 'Customer Registration', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php $form->add_radio( 'site-registration', array( 'value' => 'it' ) ); ?>
                	<label for="site-registration-it"><?php _e( 'Use Exchange Registration Only', 'it-l10n-ithemes-exchange' ) ?></label>
                    <br />
					<?php $form->add_radio( 'site-registration', array( 'value' => 'wp' ) ); ?>
                	<label for="site-registration-wp"><?php _e( 'Use WordPress Registration Setting', 'it-l10n-ithemes-exchange' ) ?></label><span class="tip" title="<?php esc_attr_e( __( 'In order to use this setting, you will first need to check the "Anyone can register" checkbox from the WordPress General Settings page to allow site membership.', 'it-l10n-ithemes-exchange' ) ); ?>">i</span>
				</td>
			</tr>
            <?php do_action( 'it_exchange_general_settings_before_settings_styles', $form ); ?>
			<tr valign="top">
				<th scope="row"><strong><?php _e( 'Stylesheet Settings', 'it-l10n-ithemes-exchange' ); ?></strong></th>
				<td></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="custom-styles"><?php _e( 'Custom Styles', 'it-l10n-ithemes-exchange' ) ?></label></th>
				<td>
					<?php _e( 'If they exist, the following files will be loaded in order after core Exchange stylesheets:', 'it-l10n-ithemes-exchange' ); ?><br />
					<span class="description">
						<?php
						$parent = get_template_directory() . '/exchange/style.css';
						$child  = get_stylesheet_directory() . '/exchange/style.css';
						$custom_style_locations[$parent] = '&#151;&nbsp;&nbsp;' . $parent;
						$custom_style_locations[$child]  = '&#151;&nbsp;&nbsp;' . $child;
						echo implode( $custom_style_locations, '<br />' );
						?>
					</span>
				</td>
			<?php do_action( 'it_exchange_general_settings_table_bottom', $form ); ?>
		</table>
		<p class="submit"><input type="submit" value="<?php _e( 'Save Changes', 'it-l10n-ithemes-exchange' ); ?>" class="button button-primary" /></p>
		<?php do_action( 'it_exchange_general_settings_form_bottom', $form ); ?>
	<?php $form->end_form(); ?>
	<?php do_action( 'it_exchange_general_settings_page_bottom' ); ?>
</div>
