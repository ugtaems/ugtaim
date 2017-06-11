<?php
/*
Plugin Name: واحد ریال و تومان ووکامرس
Author: ووکامرس فارسی
Plugin URI: 
Description: این افزونه واحد‌های پولی رایج ایران (ریال و تومان) را به ووکامرس فارسی اضافه میکند.
Version: 1
Author URI: http://wooper.ir/
*/

/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    
    add_filter( 'woocommerce_currencies', 'add_my_currency' );
	 
	function add_my_currency( $currencies ) {
	     $currencies['IRR'] = __( 'ریال ایران', 'woocommerce' );
	     $currencies['IRT'] = __( 'تومان ایران', 'woocommerce' );
	     return $currencies;
	}
	 
	add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
	 
	function add_my_currency_symbol( $currency_symbol, $currency ) {
	     switch( $currency ) {
	          case 'IRR': $currency_symbol = 'ریال'; break;
	          case 'IRT': $currency_symbol = 'تومان'; break;
	     }
	     return $currency_symbol;
	}

}