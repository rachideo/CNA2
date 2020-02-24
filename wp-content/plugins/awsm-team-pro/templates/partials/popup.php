<?php
/**
 * Modal Popup Template Part.
 *
 * @package awsm-team-pro
 */

?>
<div id="<?php echo esc_attr( $this->add_id( array( 'modal-style', $id, $team->post->ID ) ) ); ?>" class="awsm-modal-item awsm-scale-anm <?php echo esc_attr( $member_terms ); ?> ">
	<div id="<?php echo esc_attr( $this->add_id( array( 'awsm-member-info', $id, $team->post->ID ) ) ); ?>" class="awsm-modal-content">
		<div class="awsm-modal-content-main">
			<div class="awsm-image-main">
				<?php echo $this->get_team_thumbnail( $team->post->ID ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>
			<div class="awsm-modal-details">
				<div class="awsm-modal-content-inner">
					<?php
					$this->checkprint( '<h3>%s</h3>', esc_html( $teamdata['awsm-team-designation'] ) );
					esc_html( the_title( '<h2>', '</h2>' ) );
					the_content();
					require $this->get_template_path( 'contact.php', 'partials' );
					require $this->get_template_path( 'social.php', 'partials' );
					?>
				</div>
			</div>
		</div>
	</div>
</div>
