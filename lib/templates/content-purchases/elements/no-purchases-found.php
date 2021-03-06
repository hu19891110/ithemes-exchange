<?php
/**
 * The default template part for the no purchases found
 * in the content-purchases.php template part.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/content-purchases/elements/ directory
 * located in your theme.
*/
?>

<?php do_action( 'it_exchange_content_purchases_before_no_purchases_found_element' ); ?>
<p class="it-exchange-no-purchases-found it-exchange-notice"><?php _e( 'No purchases found.', 'it-l10n-ithemes-exchange' ); ?></p>
<?php do_action( 'it_exchange_content_purchases_after_no_purchases_found_element' ); ?>