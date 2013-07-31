<?php
/**
 * This is the default template for the 
 * super-widget-cart empty-cart-notice element.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 * 
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/super-widget-cart/elements directory
 * located in your theme.
*/
?>

<?php do_action( 'it_exchange_super_widget_cart_before_empty_cart_notice_element' ); ?>
<div class="empty-cart">
	<?php do_action( 'it_exchange_super_widget_cart_begin_empty_cart_notice_element' ); ?>
	<p><?php _e( 'Your cart is empty', 'it-l10n-ithemes-exchange' ); ?></p>
	<?php do_action( 'it_exchange_super_widget_cart_end_empty_cart_notice_element' ); ?>
</div>
<?php do_action( 'it_exchange_super_widget_cart_after_empty_cart_notice_element' ); ?>