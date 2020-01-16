<?php

class SiteOrigin_Premium_WooCommerce_Cart_Empty_Message extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'so-wc-cart-empty-message',
			__( 'Cart empty message', 'siteorigin-premium' ),
			array( 'description' => __( 'Display the cart empty message.', 'siteorigin-premium' ) ),
			array()
		);
	}

	public function widget( $args, $instance ) {
		if ( function_exists( 'wc_empty_cart_message' ) ) {
			wc_empty_cart_message();
		}
	}
}

register_widget( 'SiteOrigin_Premium_WooCommerce_Cart_Empty_Message' );
