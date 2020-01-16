<?php

defined( 'ABSPATH' ) || exit;

// If the user has created and enabled a My Account Page Builder layout we load and render it here.

$so_wc_templates = get_option( 'so-wc-templates' );
$template_data = $so_wc_templates[ 'myaccount' ];

if ( ! empty( $template_data['post_id'] ) ) {
	// Don't call `woocommerce_output_all_notices` here, as it should already be hooked into the
	// `woocommerce_account_content` action called in the `wc-account-content` widget.
	echo SiteOrigin_Panels_Renderer::single()->render( $template_data['post_id'] );
}
