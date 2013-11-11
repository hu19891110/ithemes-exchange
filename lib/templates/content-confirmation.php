<?php
/**
 * Default template part for the purchase
 * confirmation page.
 *
 * @since 0.4.0
 * @version 1.0.1
 * @link http://ithemes.com/codex/page/Exchange_Template_Updates
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy over this
 * file's content to the exchange directory located
 * at your templates root.
*/
?>

<?php do_action( 'it_exchange_content_confirmation_before_wrap' ); ?>
<div id="it-exchange-confirmation" class="it-exchange-wrap">
<?php do_action( 'it_exchange_content_confirmation_begin_wrap' ); ?>
	<?php it_exchange_get_template_part( 'content-confirmation/loops/header' ); ?>
	<?php it_exchange_get_template_part( 'content-confirmation/loops/transactions' ); ?>
<?php do_action( 'it_exchange_content_confirmation_end_wrap' ); ?>
</div>
<?php do_action( 'it_exchange_content_confirmation_after_wrap' ); ?>