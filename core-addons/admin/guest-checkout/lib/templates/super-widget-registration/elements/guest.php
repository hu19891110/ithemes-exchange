<?php
/**
 * This is the default template part for the
 * guest element in the super-widget-registration template
 * part.
 *
 * @since 1.6.0
 * @version 1.6.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/super-widget-registration/elements/
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_super_widget_registration_before_guest_element' ); ?>
'boom'
<div class="guest-url">
    <?php echo it_exchange_guest_checkout_sw_link( __( 'Guest Checkout', 'it-l10n-ithemes-exchange' ) ); ?>
</div>
<?php do_action( 'it_exchange_super_widget_registrationafter_guest_element' ); ?>
