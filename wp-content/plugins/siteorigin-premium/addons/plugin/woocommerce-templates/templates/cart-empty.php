<?php

defined( 'ABSPATH' ) || exit;

// Output any notices from WooCommerce.
if ( function_exists( 'woocommerce_output_all_notices' ) ) {
	woocommerce_output_all_notices();
}

// If the user has created and enabled a Empty Cart Page Builder layout we load and render it here.

$so_wc_templates = get_option( 'so-wc-templates' );
$template_data = $so_wc_templates[ 'cart-empty' ];

if ( ! empty( $template_data['post_id'] ) ) {
	echo SiteOrigin_Panels_Renderer::single()->render( $template_data['post_id'] );
}
