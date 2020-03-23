<?php
/**
 * Slide-Ins Preset Template.
 *
 * Override this by copying it to currenttheme/awsm-team-pro/slide-ins.php
 *
 * @package awsm-team-pro
 */

?>
<div id="<?php echo esc_attr( $this->add_id( array( 'awsm-team', $id ) ) ); ?>" class="awsm-grid-wrapper">
	<?php echo $this->show_team_filter( $team, $id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

	<div class="awsm-modal">
	<?php if ( $team->have_posts() ) : ?>
		<div class="awsm-grid-modal awsm-grid <?php echo esc_attr( $this->item_style( $options ) ); ?>">
		<?php
		while ( $team->have_posts() ) :
			$team->the_post();
				$teamdata     = $this->get_options( 'awsm_team_member', $team->post->ID );
				$member_terms = 'awsm-all';
				$terms        = get_the_terms( $team->post->ID, 'awsm_team_filters' );
			if ( ! empty( $terms ) ) {
				foreach ( $terms as $member_term ) {
					$member_terms .= ' awsm-' . str_replace( ' ', '-', $member_term->term_id );
				}
			}
			?>
				<div id="<?php echo esc_attr( $this->add_id( array( 'awsm-member', $id, $team->post->ID ) ) ); ?>" class="awsm-grid-card awsm-team-item awsm-scale-anm  <?php echo esc_attr( $member_terms ); ?>">
					<a href="#info" class="awsm-modal-trigger" data-trigger="#<?php echo esc_attr( $this->add_id( array( 'slide-ins', $id, $team->post->ID ) ) ); ?>">
						<figure>
								<?php echo $this->get_team_thumbnail( $team->post->ID ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								<figcaption>
									<div class="awsm-personal-info">
										<?php $this->checkprint( '<span>%s</span>', wp_kses( $teamdata['awsm-team-designation'], 'post' ) ); ?>
										<h3><?php the_title(); ?></h3>
									</div>
								</figcaption>
						</figure>
					</a>
				</div>
			<?php
			endwhile;
		wp_reset_postdata();
		?>
		</div>
		<div class="awsm-modal-items <?php echo esc_attr( $this->item_style( $options ) ); ?>">
			<div class="awsm-modal-items-main">
					<div class="awsm-modal-header clearfix">
						<a href="#close" class="awsm-modal-close"></a>
						<span class="awsm-modal-nav">
						<a href="#prev" class="awsm-nav-item awsm-nav-left"><i class="awsm-icon-arrow-left"></i></a>
						<a href="#next" class="awsm-nav-item awsm-nav-right"><i class="awsm-icon-arrow-right"></i></a>
						</span>
					</div>
					<?php
					while ( $team->have_posts() ) :
						$team->the_post();
						$teamdata = $this->get_options( 'awsm_team_member', $team->post->ID );

						$member_terms = 'awsm-all';
						$terms        = get_the_terms( $team->post->ID, 'awsm_team_filters' );
						if ( ! empty( $terms ) ) {
							foreach ( $terms as $member_term ) {
								$member_terms .= ' awsm-' . str_replace( ' ', '-', $member_term->term_id );
							}
						}
						include $this->get_template_path( 'popup-slide.php', 'partials' );
					endwhile;
					?>

			</div>
		</div>
	<?php endif; ?>
	</div>
</div>
