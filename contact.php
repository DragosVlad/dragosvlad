<?php
/**
 * Template Name: Contact Page
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<div class="main-wrapper">

					<div class="contact-hero">
						<h1 class="title">Everything begins<br>with a "hello"</h1>
					</div>

					<!-- <div class="section-gradient-grey"></div> -->
				

					<div class="contact-content">
					

						<div class="inner-wrapper">						

							<h2 class="secondary-title">Get in touch with me and I will get back to you<br>as soon as I can</h2>

							<h2 class="secondary-title">Have a project in mind?</h2>

							<div class="row">
								<div class="col-md-6">
									<h3 class="subtitle">Drop me a line at:</h3>
									<a href="mailto:dragos.vlad95@gmail.com" class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i>dragos.vlad95@gmail.com</a>

									<h3 class="subtitle">You can also find me on:</h3>
									<ul class="contact-social">
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="col-md-6">
									<h3 class="subtitle">Let's Talk</h3>

									<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>
								</div>
							</div>

						</div>

					</div>

					

				</div> <!-- .main-wrapper -->
			</main>

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<!-- cd work/dragosvlad.com/wp-content/themes/dragosvlad -->

<?php get_footer(); ?>
