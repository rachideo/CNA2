<?php

class SiteOrigin_Premium_WooCommerce_Template_Single_Add_To_Cart extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'so-wc-template-single-add-to-cart',
			__( 'Product "Add to cart" button', 'siteorigin-premium' ),
			array( 'description' => __( 'Display the product Add to cart button.', 'siteorigin-premium' ) ),
			array()
		);
	}

	public function widget( $args, $instance ) {
		if ( function_exists( 'woocommerce_template_single_add_to_cart' ) ) {
			woocommerce_template_single_add_to_cart();
		}
	}

}

register_widget( 'SiteOrigin_Premium_WooCommerce_Template_Single_Add_To_Cart' );
