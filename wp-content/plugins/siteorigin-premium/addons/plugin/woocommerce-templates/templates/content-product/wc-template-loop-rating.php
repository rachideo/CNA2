<?php

class SiteOrigin_Premium_WooCommerce_Template_Loop_Rating extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'so-wc-template-loop-rating',
			__( 'Product loop rating', 'siteorigin-premium' ),
			array( 'description' => __( 'Display the product rating.', 'siteorigin-premium' ) ),
			array()
		);
	}

	public function widget( $args, $instance ) {
		if ( function_exists( 'woocommerce_template_loop_rating' ) ) {
			woocommerce_template_loop_rating();
		}
	}

}

register_widget( 'SiteOrigin_Premium_WooCommerce_Template_Loop_Rating' );
