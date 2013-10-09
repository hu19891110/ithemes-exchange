<?php
/**
 * Functions for integration with Builder.
 *
 * @package IT_Exchange
*/

/**
 * This unsets the views added by Exchange's custom
 * post types.
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
 * @var $views
*/
function it_exchange_remove_default_exchange_builder_views( $views ) {
	foreach ( $views as $view => $data ) {
		if ( preg_match( '/it_exchange_/' , $view, $match ) ) {
			unset( $views[$view] );
		}
	}

	return $views;
}
add_filter( 'builder_get_available_views', 'it_exchange_remove_default_exchange_builder_views', 100 );

/**
 * Builder theme callback to determine if this a product view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_product_builder_view() {
    return it_exchange_is_page( 'product' );
}

/**
 * Builder theme callback to determine if this a storeview
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_store_builder_view() {
    return it_exchange_is_page( 'store' );
}

/**
 * Builder theme callback to determine if this a transaction view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_transaction_builder_view() {
    return it_exchange_is_page( 'transaction' );
}

/**
 * Builder theme callback to determine if this a registration view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_registration_builder_view() {
    return it_exchange_is_page( 'registration' );
}

/**
 * Builder theme callback to determine if this a account view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_account_builder_view() {
    return it_exchange_is_page( 'account' );
}

/**
 * Builder theme callback to determine if this a profile view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_profile_builder_view() {
    return it_exchange_is_page( 'profile' );
}

/**
 * Builder theme callback to determine if this a downloads view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_downloads_builder_view() {
    return it_exchange_is_page( 'downloads' );
}

/**
 * Builder theme callback to determine if this a purchases view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_purchases_builder_view() {
    return it_exchange_is_page( 'purchases' );
}

/**
 * Builder theme callback to determine if this a login view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_login_builder_view() {
    return it_exchange_is_page( 'login' );
}

/**
 * Builder theme callback to determine if this a logout view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_logout_builder_view() {
    return it_exchange_is_page( 'logout' );
}

/**
 * Builder theme callback to determine if this a confirmation view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_confirmation_builder_view() {
    return it_exchange_is_page( 'confirmation' );
}

/**
 * Builder theme callback to determine if this a cart view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_cart_builder_view() {
    return it_exchange_is_page( 'cart' );
}

/**
 * Builder theme callback to determine if this a checkout view
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
*/
function it_exchange_is_checkout_builder_view() {
    return it_exchange_is_page( 'checkout' );
}

/**
 * Add the views to Builder's list of available views.
 *
 * @package IT_Exchange
 * @since 1.4.0
 * @author Justin Kopepasah
 * @var $views
*/
function it_exchange_add_new_builder_views( $views ) {
	$exchange_views = array(
		'it_exchange_is_product_builder_view' => array(
			'name'        => _x( 'Exchange - Product', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'Any Exchange product.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_store_builder_view' => array(
			'name'        => _x( 'Exchange - Store', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '10',
			'description' => __( 'The Exchange store page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_transaction_builder_view' => array(
			'name'        => _x( 'Exchange - Transaction', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange transactions page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_registration_builder_view' => array(
			'name'        => _x( 'Exchange - Registration', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange registration page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_account_builder_view' => array(
			'name'        => _x( 'Exchange - Account', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '10',
			'description' => __( 'Any Exchange customer\'s account pages (e.g. profile, purchases, login, et cetera).', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_profile_builder_view' => array(
			'name'        => _x( 'Exchange - Profile', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange customer\'s profile or account page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_downloads_builder_view' => array(
			'name'        => _x( 'Exchange - Downloads', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange customer\'s downloads page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_purchases_builder_view' => array(
			'name'        => _x( 'Exchange - Purchases', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange customer\'s purchases page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_login_builder_view' => array(
			'name'        => _x( 'Exchange - Login', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange login page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_logout_builder_view' => array(
			'name'        => _x( 'Exchange - Logout', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange logout page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_confirmation_builder_view' => array(
			'name'        => _x( 'Exchange - Confirmation', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange purchase confirmation page.', 'it-l10n-ithemes-exchange' ),
		),
	);

	$multi_item_views = array(
		'it_exchange_is_cart_builder_view' => array(
			'name'        => _x( 'Exchange - Cart', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange cart page.', 'it-l10n-ithemes-exchange' ),
		),
		'it_exchange_is_checkout_builder_view' => array(
			'name'        => _x( 'Exchange - Checkout', 'view', 'it-l10n-ithemes-exchange' ),
			'priority'    => '20',
			'description' => __( 'The Exchange checkout page.', 'it-l10n-ithemes-exchange' ),
		),
	);

	$views = array_merge( $views, $exchange_views );

	if ( it_exchange_is_multi_item_cart_allowed() )
		$views = array_merge( $multi_item_views, $views );

    return $views;
}
add_filter( 'builder_get_available_views', 'it_exchange_add_new_builder_views', 100 );
