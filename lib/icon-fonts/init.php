<?php
/**
 * Custom Icons for iThemes Products
 * 
 * @package icon-fonts
 * @author Justin Kopepasah
 * @version 1.0.0
*/

if ( ! function_exists( 'it_icon_font_admin_enueue_scripts' ) ) {
	function it_icon_font_admin_enueue_scripts() {
		global $wp_version;
		if ( $wp_version >= 3.8 ) {
			wp_enqueue_style( 'ithemes-icon-font', plugin_dir_url( __FILE__ ) . '/icon-fonts.css' );
		}
	}
	add_action( 'admin_enqueue_scripts', 'it_icon_font_admin_enueue_scripts' );
}