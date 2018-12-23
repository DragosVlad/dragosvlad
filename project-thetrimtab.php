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
								<div class="website__image">
									<img src="<?php echo get_stylesheet_directory_uri() . '/img/project1.png'; ?>">
									<a href="#">Go to Live Website</a>
								</div>
								<div class="website__details">
									<h2 class="secondary-title">WordPress Website</h2>
									<ul class="website__details-list">
										<li class="website__details-item">WordPress</li>
										<li class="website__details-item">Theme Customisation</li>
										<li class="website__details-item">Javascript Animations</li>
										<li class="website__details-item">HTML</li>
										<li class="website__details-item">CSS</li>
									</ul>
								</div>
							</div>

							<!-- <div class="section-gradient-white gradient-hero"></div> -->
						</div> <!-- .inner-wrapper -->

					</section>

					<section class="website__description">
						<div class="inner-wrapper">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit natus neque ipsa, tempora quisquam fugiat maxime repellendus molestiae at id nostrum consectetur hic culpa consequuntur, est veniam eum praesentium! Mollitia eaque facere sint sit harum cupiditate quos, nam qui totam a natus omnis. Dolores maiores architecto, rerum error consectetur commodi. Iste reprehenderit suscipit numquam aliquam debitis, eaque, deserunt quibusdam sequi! Rerum provident delectus ipsum nisi aliquam porro explicabo quos numquam harum molestiae eius tempore tempora illo reprehenderit amet, quibusdam esse illum repellendus, veritatis deserunt voluptatum! Neque similique repellat eos mollitia voluptates ad, molestias optio quam, nulla ipsam placeat adipisci voluptatum.</p>
						</div>
					</section>

					<section class="website__navigation"></section>

					<div class="hire-me-cta"></div>

				

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
