<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shapely
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section>
                <div class="container page404">
                    <div class="text404 row">
                        <h1>Oops ! Erreur 404 </h1>
                        <p>La page que vous recherchez n'existe pas.</p>
                    </div>
                    <a href="/">
                        <span><b>Retourner à la page d'Accueil</b></span>
                    </a>
                </div>


			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
