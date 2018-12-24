<?php
/**
 * Template Name: Wedding Website Page
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
							<h1 class="title website__title">Dragos & Carmina</h1>

							<div class="website__info">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="website__image">
												<img src="<?php echo get_stylesheet_directory_uri() . '/img/wedding.png'; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="website__details">
												<h2 class="secondary-title">WordPress Personal Wedding Website</h2>
												<ul class="website__details-list">
													<li class="website__details-item">WordPress</li>
													<li class="website__details-item">Theme Customisation</li>
													<li class="website__details-item">Javascript Animations</li>
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
							<p>This is the actual website I created for my wedding. Yes, that's me and my wife.</p>
							<p>I created it in WordPress and made a custom page for the home page. The main purpose of the website was to announce the wedding date and location. Also, people had the posibility to send their RSVP directly from the website.</p>
							<p>I added interesting Javascript animations and scrolling effects, forms that send the information to my email and Google Maps integration to show where the events will be. People seemed to like the website and the idea behind it.</p>
							<a href="#" class="btn btn-main">Go to Live Website <i class="fa fa-external-link"></i></a>
						</div>
					</section>

					<section class="website__navigation">
						<div class="inner-wrapper">
							<div class="navigation__buttons">
								<div class="navigation__button prev">
									<a href="http://localhost:3000/dragosvlad.com/holland-zone/"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous<br>Project</a>
								</div>
								<div class="navigation__button next disabled">
									<a href="#">Next<br>Project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
