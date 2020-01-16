<?php

class SiteOrigin_Premium_WooCommerce_Checkout_Order_Review extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'so-wc-checkout-order-review',
			__( 'Checkout order review', 'siteorigin-premium' ),
			array( 'description' => __( 'Display the order review and place order button.', 'siteorigin-premium' ) ),
			array()
		);
	}

	public function widget( $args, $instance ) {
		do_action( 'woocommerce_checkout_before_order_review_heading' );
		?>
		<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

		<div id="order_review" class="woocommerce-checkout-review-order">
			<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>
		<?php
		do_action( 'woocommerce_checkout_after_order_review' );
	}
}

register_widget( 'SiteOrigin_Premium_WooCommerce_Checkout_Order_Review' );

