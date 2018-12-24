<?php
/**
 * Template Name: Holland Zone Page
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

					<section class="website">

						<div class="inner-wrapper">
							<h1 class="title website__title">Holland Zone</h1>

							<div class="website__info">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="website__image">
												<img src="<?php echo get_stylesheet_directory_uri() . '/img/hollandzone.jpg'; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="website__details">
												<h2 class="secondary-title">HTML Website</h2>
												<ul class="website__details-list">
													<li class="website__details-item">Front-End Design</li>
													<li class="website__details-item">Javascript</li>
													<li class="website__details-item">HTML</li>
													<li class="website__details-item">CSS</li>
												</ul>
												<a href="#" class="btn btn-main">Go to Live Website <i class="fa fa-external-link"></i></a>
											</div>
										</div>
									</div>
								</div>
								
								
							</div>

							<!-- <div class="section-gradient-white gradient-hero"></div> -->
						</div> <!-- .inner-wrapper -->

					</section>

					<section class="website__description">
						<div class="inner-wrapper">
							<p>The client needed a website designed for posting blog articles about different events, festivals and concerts taking place in Netherlands.</p>
							<p>I received some low fidelity wireframes and my role was to come up with a design based on them, in HTML and CSS. He had a CMS he used for the back-end, and I was responsible for the front-end.</p>
							<p>I added some Javascript functionality like gallery carousels, tab navigation and other minor tweaks.</p>
							<a href="#" class="btn btn-main">Go to Live Website <i class="fa fa-external-link"></i></a>
						</div>
					</section>

					<section class="website__navigation">
						<div class="inner-wrapper">
							<div class="navigation__buttons">
								<div class="navigation__button prev">
									<a href="http://localhost:3000/dragosvlad.com/the-trim-tab/"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous<br>Project</a>
								</div>
								<div class="navigation__button next">
									<a href="http://localhost:3000/dragosvlad.com/wedding-website/">Next<br>Project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</section>

					<!-- <div class="hire-me-cta"></div> -->
					<section class="work-cta project-page">
						<div class="contact-cta">
							<h3 class="cta-title">Interested in working together?</h3>
							<a href="http://localhost:3000/dragosvlad.com/contact/" class="btn btn-cta"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Hire me</a>
						</div>
					</section>

				

				</div> <!-- .main-wrapper -->



				<?php // while ( have_posts() ) : the_post(); ?>

					<?php // get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php // endwhile; ?>

			</main>

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<!-- cd work/dragosvlad.com/wp-content/themes/dragosvlad -->

<?php get_footer(); ?>
