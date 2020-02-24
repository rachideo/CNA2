<?php
/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * @package awsm-team-pro
 */

?>
<div class="awsm-team-render">
	<?php echo $settings->awsm_team_id; ?>
	<?php $module->render_team( $settings ); ?>
</div>
