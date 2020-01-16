<?php

class SiteOrigin_Premium_WooCommerce_Template_Loop_Add_To_Cart extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'so-wc-template-loop-add-to-cart',
			__( 'Product loop "Add to cart"', 'siteorigin-premium' ),
			array( 'description' => __( 'Display the product add to cart button.', 'siteorigin-premium' ) ),
			array()
		);
	}

	public function widget( $args, $instance ) {
		if ( function_exists( 'woocommerce_template_loop_add_to_cart' ) ) {
			woocommerce_template_loop_add_to_cart();
		}
	}

}

register_widget( 'SiteOrigin_Premium_WooCommerce_Template_Loop_Add_To_Cart' );
