<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */
get_header(); ?>
<?php $layout_class = shapely_get_layout_class();?>
	<div class="row">
		<div id="primary" class="col-md-12 mb-xs-24"><?php
			if ( have_posts() ) :

				$layout_type = get_theme_mod( 'blog_layout_view', 'grid' );

				get_template_part( 'template-parts/layouts/blog', $layout_type );

				shapely_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</div><!-- #primary -->
	</div>
<?php
get_footer();
