<?php
/**
 * Template Name: Work Page
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

					<div class="work-content">
						
						<div class="work-background-image thetrimtab"></div>

						<section class="project project-thetrimtab">
							<!-- <div class="project-overlay"></div> -->
							<div class="project-text">
								<h1 class="project-title"><a href="http://localhost:3000/dragosvlad.com/the-trim-tab/">The Trim Tab</a></h1>
								<p class="project-details">WordPress Website</p>
								<a class="btn btn-main" href="http://localhost:3000/dragosvlad.com/the-trim-tab/"><i class="fa fa-hand-o-right"></i> View Case Study</a>
							</div>
						</section>
						<section class="project project-hollandzone">
							<!-- <div class="project-overlay"></div> -->
							<div class="project-text">
								<h1 class="project-title"><a href="#">Holland Zone</a></h1>
								<p class="project-details">WordPress Website</p>
								<a class="btn btn-main" href="#"><i class="fa fa-hand-o-right"></i> View Case Study</a>
							</div>
						</section>
						<section class="project project-wedding">
							<!-- <div class="project-overlay"></div> -->
							<div class="project-text">
								<h1 class="project-title"><a href="#">Dragos & Carmina</a></h1>
								<p class="project-details">WordPress Website</p>
								<a class="btn btn-main" href="#"><i class="fa fa-hand-o-right"></i> View Case Study</a>
							</div>
						</section>
	
						<div class="section-gradient-white"></div>

						<section class="work-cta">
							<div class="contact-cta">
								<h3 class="cta-title">Interested in working together?</h3>
								<a href="#" class="btn btn-cta"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Hire me</a>
							</div>
						</section>

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
