<?php

class SiteOrigin_Premium_WooCommerce_Template_Single_Meta extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'so-wc-template-single-meta',
			__( 'Product meta', 'siteorigin-premium' ),
			array( 'description' => __( 'Display the product category and SKU.', 'siteorigin-premium' ) ),
			array()
		);
	}

	public function widget( $args, $instance ) {
		if ( function_exists( 'woocommerce_template_single_meta' ) ) {
			woocommerce_template_single_meta();
		}
	}

}

register_widget( 'SiteOrigin_Premium_WooCommerce_Template_Single_Meta' );
