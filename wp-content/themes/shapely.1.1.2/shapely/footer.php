<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<div class="row">
			<div class="site-info col-sm-6 col-xs-6">
				<div style="margin: 70px 0 20px 0;">
                    <a href="https://www.data-dock.fr/" target="_blank">
					    <img src="/wp-content/img/footer/footer_datadock.png" alt="Nous sommes DataDocké !" />
                    </a>
				</div>
			</div>
            <div class="col-sm-6 col-xs-6">
                <div>
                    <a href="https://www.facebook.com/campusNumeriqueInTheAlps/" aria-label="Notre page Facebook" target="_blank">
                        <i class="fa fa-facebook footer-icon" title="Facebook"></i>
                    </a>
                </div>
                <div>
                    <a href="https://twitter.com/CampusAlps" aria-label="Notre compte Twitter" target="_blank">
                        <i class="fa fa-twitter footer-icon" title="Twitter"></i>
                    </a>
                </div>
                <div>
                    <a href="https://www.linkedin.com/school/campus-numerique-in-the-alps/" aria-label="Notre compte LinkedIn" target="_blank">
                        <i class="fa fa-linkedin footer-icon" title="Linkedin"></i>
                    </a>
                </div>
            </div>
		</div>

        <hr class="footer-hr">
        <div style="display: flex; justify-content: flex-start; margin-bottom: 10px;">
            <div class="footer-nav-new">
                <a href="/">ACCUEIL</a>
            </div>
            <div class="footer-nav-new">
                <a href="/mentions-legales/">MENTIONS LÉGALES</a>
            </div>
            <div class="footer-nav-new">
                <a href="mailto:contact@le-campus-numerique.fr">CONTACT</a>
            </div>
            <div class="footer-nav-new">
                <a href="https://www.service-public.fr/particuliers/vosdroits/R40438" target="_blank">
                    TITRE RNCP <i class="fa fa-external-link" aria-hidden="true"></i>
                </a>
            </div>
        </div>
	</div>

</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="/wp-content/themes/shapely.1.1.2/shapely/mesh3Dhero/js/particles.js"></script>
<script src="/wp-content/themes/shapely.1.1.2/shapely/mesh3Dhero/js/app.js"></script>
<script>
    var ml = { timelines: {}};
    var ml4 = {};
    ml4.opacityIn = [0,1];
    ml4.scaleIn = [0.2, 1];
    ml4.scaleOut = 1.2;
    ml4.durationIn = 800;
    ml4.durationOut = 600;
    ml4.delay = 500;

    ml.timelines["ml4"] = anime.timeline({loop: true})
        .add({
            targets: '.ml4 .letters-1',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-1',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-2',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-2',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-3',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-3',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-4',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-4',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4',
            opacity: 0,
            duration: 500,
            delay: 500
        });
</script>

</body>
</html>