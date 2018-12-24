<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// get_header('home');
get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<div class="main-wrapper">

					<section class="home-section home-hero">

						<div class="home-hero__intro">
							
							<div class="home-hero__text">

								<div class="home-hero__text-inner">
								
									<div class="home-hero__title">
										<span class="span1">Hi,</span>
										<span class="span2">I am</span>
										<span class="name"><span>DRAGOŞ Vlad</span></span>
									</div>

									<div class="home-hero__bio">
										<h2 class="secondary-title"><span>Web</span> <small>Developer</small></h2>
									</div>

								</div>

								<div class="scroll-notice hide">
									<p>Scroll Down for more</p>
									<i class="fa fa-chevron-down"></i>
								</div>

							</div> <!-- home-hero__text -->
						
						</div> <!-- .home-hero__intro -->

						<div class="home-hero__description">
							<p class="hero-description">I am a freelance Web Developer located in Romania. I love building engaging websites with cool animations and effects that will leave a great impact on your site's visitors.</p>
							<h3>My job is to turn your ideas into reality!</h3>
							<a href="#" id="heroCta" class="btn btn-accent"><i class="fa fa-hand-o-right"></i>LET’S CREATE SOMETHING GREAT!</a>

							<p class="hero-description__work">... or you can check out my work below</p>
							<!-- <a class="btn btn-main">Check out my work</a> -->
							<!-- <a class="btn btn-accent">Hire me!</a> -->

							<!-- <p>I am a freelance Web Designer and WordPress Developer located in Romania. I specialise in building websites with great interfaces and engaging designs. I have a passion for web animations, cool effects and I love creating dynamic user experiences that will leave an impact on your site's visitors.</p> -->
						</div>

					</section> <!-- .home-hero -->

					<div class="section-gradient"></div>

					<section class="home-section home-work">

						<h1 class="title title--work text-center"><span>Work</span><span>Work</span><span>Work</span></h1>

						<div class="inner-wrapper">

							<div class="project__container project__container1">

								<div class="work__project work__project1">

									<div class="project__thumb">
										<img src="<?php echo get_stylesheet_directory_uri() . '/img/thetrimtab-logo.png'; ?>">
									</div>

									<div class="project__text">

										<h2 class="secondary-title">The Trim Tab</h2>

										<p class="project__description">WordPress Website for publishing posts about radio-controlled gadgets with custom design created from a basic theme</p>

										<div class="project__link"><a href="http://localhost:3000/dragosvlad.com/the-trim-tab/">Go To Case Study</a></div>

									</div>

									<div class="mouse-text1">View<br>Project</div>

								</div>

							</div> <!-- .project__container -->

							<div class="project__container project__container2">

								<div class="work__project work__project2 work__project--inverse">

									<div class="project__text">

										<h2 class="secondary-title">Holland Zone</h2>

										<p class="project__description">A website about different events, festivals and concerts taking place in Netherlands.</p>

										<div class="project__link"><a href="http://localhost:3000/dragosvlad.com/holland-zone/">Go To Case Study</a></div>

									</div>

									<div class="project__thumb">
										<img src="<?php echo get_stylesheet_directory_uri() . '/img/hollandzone-logo.png'; ?>">
									</div>

									<div class="mouse-text2">View<br>Project</div>

								</div>

							</div> <!-- .project__container -->

						</div> <!-- .inner-wrapper -->

					</section> <!-- .home-work -->


					<!-- <section class="home-section home-blog">

						<div class="inner-wrapper">
							
							<h1 class="title text-center">Blog</h1>

							<div class="blog__layout"></div>

						</div> 

					</section> -->

					<!-- <section class="home-section home-contact home-testimonials">

						<div class="inner-wrapper">
						
							<h1 class="title text-center">What people say</h1>

							<div class="testimonials owl-carousel owl-theme">

								<div class="testimonial owl-item active">
				      				<blockquote class="blockquote text-center">
				      					<q>Dragos did a great job designing my web site and bulding it. Great communication and fast responses. Will hire again!</q>
				      					<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				      				</blockquote>
								</div>

								<div class="testimonial owl-item">
				      				<blockquote class="blockquote text-center">
				      					<q>In some projects the experience is good, in some is bad and just a few ones over deliver. He definitely fall in this last category. Will work with him again for sure!</q>
				      					<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				      				</blockquote>
								</div>

								<div class="testimonial owl-item">
				      				<blockquote class="blockquote text-center">
				      					<q>An amazing job customizing a WordPress template and adding animations and responsive design. Great communication and work ethic.</q>
				      					<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				      				</blockquote>
								</div>
							</div>

							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">

								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>

								<div class="carousel-inner">

									<div class="carousel-item active">
										<div class="testimonial">
							      			<blockquote class="blockquote text-center">
							      				<q>Dragos did a great job designing my web site and bulding it. Great communication and fast responses. Will hire again!</q>
							      				<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							      			</blockquote>
										</div>
									</div>

									<div class="carousel-item">
										<div class="testimonial">
											<blockquote class="blockquote text-center">
												<q>In some projects the experience is good, in some is bad and just a few ones over deliver. He definitely fall in this last category. Will work with him again for sure!</q>
												<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
											</blockquote>
										</div>
									</div>

									<div class="carousel-item">
										<div class="testimonial">
											<blockquote class="blockquote text-center">
												<q>An amazing job customizing a WordPress template and adding animations and responsive design. Great communication and work ethic.</q>
												<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
											</blockquote>
										</div>
									</div>
								</div>

								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>

								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>

							</div>
	
						</div>

					</section> -->

					
					<section class="home-section home-contact">

						<h1 class="title title--contact text-center"><span>Contact</span><span>Contact</span></h1>

						<div class="inner-wrapper">
						
							<h2 class="secondary-title">Have a big idea or just want to talk?</h2>

							<div class="row">
								<div class="col-md-6">
									<h3 class="subtitle">Drop me a line at:</h3>
									<a href="mailto:dragos.vlad95@gmail.com" class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i>dragos.vlad95@gmail.com</a>

									<h3 class="subtitle">You can also find me on:</h3>
									<ul class="contact-social">
										<li><a href="https://www.linkedin.com/in/dragoș-vlad-crăciunoiu-5862ab139" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="https://www.facebook.com/Goosh1" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://twitter.com/Go_osh1" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="col-md-6">
									<h3 class="subtitle">Let's Talk</h3>

									<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>
								</div>
							</div>

						</div> <!-- .inner-wrapper -->

					</section> <!-- .home-contact -->

				</div> <!-- .wrapper -->
					

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->
<?php get_footer(); ?>
