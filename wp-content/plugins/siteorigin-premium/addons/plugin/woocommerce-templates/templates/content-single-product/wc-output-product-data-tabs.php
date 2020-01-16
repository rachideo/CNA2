<?php

class SiteOrigin_Premium_WooCommerce_Output_Product_Data_Tabs extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'so-wc-output-product-data-tabs',
			__( 'Product data tabs', 'siteorigin-premium' ),
			array( 'description' => __( 'Tabs displaying the product description, additional information and reviews.', 'siteorigin-premium' ) ),
			array()
		);
	}

	public function widget( $args, $instance ) {
		if ( function_exists( 'woocommerce_output_product_data_tabs' ) ) {
			woocommerce_output_product_data_tabs();
		}
	}

}

register_widget( 'SiteOrigin_Premium_WooCommerce_Output_Product_Data_Tabs' );
