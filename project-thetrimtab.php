<?php
/**
 * Template Name: The Trim Tab Page
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
							<h1 class="title website__title">The Trim Tab</h1>

							<div class="website__info">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="website__image">
												<img src="<?php echo get_stylesheet_directory_uri() . '/img/project1.png'; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="website__details">
												<h2 class="secondary-title">WordPress Website</h2>
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
							<p>The Trim Tab is a group of guys passioned about Radio Controlled gadgets and toys. They needed a website where they could share their adventures.</p>
							<p>The main objective of the website was to design an interesting home page and create three different types of posts: standard article, gallery of images and a video post.</p>
							<p>Starting from a basic WordPress theme that I modified a lot, I designed the website and managed to create the three different types of posts. I made them look very different, each having a unique design. </p>
							<a href="#" class="btn btn-main">Go to Live Website <i class="fa fa-external-link"></i></a>
						</div>
					</section>

					<section class="website__navigation">
						<div class="inner-wrapper">
							<div class="navigation__buttons">
								<div class="navigation__button prev disabled">
									<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous<br>Project</a>
								</div>
								<div class="navigation__button next">
									<a href="http://localhost:3000/dragosvlad.com/holland-zone/">Next<br>Project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
