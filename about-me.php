<?php
/**
 * Template Name: About Me Page
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

					<!-- <h1 class="text-title">About<br>me</h1> -->
					
					<section class="about-section about-hero">

							<div class="about-intro">
								<h1 class="title">The web is dangerous to go alone. Take a friend with you!</h1>
							</div>


							<div class="about-photo">			
									<?php $imgSrc = get_stylesheet_directory_uri() . '/img/profile-picture-c.jpg'; ?>
								<div class="about-photo-inner">
									<img src="<?php echo $imgSrc; ?>">
								</div>
							</div>

							
					</section>

					<div class="section-gradient-white"></div>

					<section class="about-section about-bio">

						<div class="inner-wrapper">

							<div class="about-text">

								<p class="bio-paragraph">
									Hi there! Thanks for visiting my website.
								</p>

								<p class="bio-paragraph">My full name is Crăciunoiu Dragoș Vlad. I am a freelance web developer located in Romania.</p>

								<p class="bio-paragraph">I have a passion for technology and I love creating websites. My speciality is creating great-looking visuals from scratch and coming with solutions for your ideas. I believe the way your website looks is very important to create a good experience for your visitors and it can make your business stand out.</p>

								<p class="bio-paragraph">In addition to that, I can use WordPress to create not only good-looking web pages, but also other functions that are needed for your website, like a blog, e&#8209;commerce store, forum, booking systems and more.</p>



								<!-- <p class="bio-paragraph"></p> -->

							</div>

							<div class="contact-cta">
								<h3 class="cta-title">Interested in working together?</h3>
								<a href="http://localhost:3000/dragosvlad.com/contact/" class="btn btn-cta"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Hire me</a>
							</div>
							
							<!-- <div class="about-title-wrapper"> -->

								

							<!-- </div> -->

						</div>

					</section>

					
					<section class="about-section about-technical">

						<div class="inner-wrapper">

							<div class="about-text">

								<h2 class="secondary-title skills-title">My Skills</h2>

								<ul class="skills-list">
									<li class="skill">
										<h3 class="skill-name">HTML & CSS</h3>
										<p class="skill-description">Two languages that create the structure and appearance of the website.</p>
									</li>
									<li class="skill">
										<h3 class="skill-name">Javascript</h3>
										<p class="skill-description">Is a programming language used on the web. I use it to create advanced animations and interactions on a page. Libraries like jQuery and Green Sock are my favorite tools for that.</p>
									</li>
									<li class="skill">
										<h3 class="skill-name">jQuery</h3>
										<p class="skill-description">Is a Javascript library that provides helpful functions for faster development.</p>
									</li>
									<li class="skill">
										<h3 class="skill-name">PHP</h3>
										<p class="skill-description">While I don't consider myself a php devoper, I use it to customize WordPress themes in order to make it function the way is needed for each project. I have a very good understanding of the way themes work and I can dive into the code to customize the theme templates for more custom solutions.</p>
									</li>
									<li class="skill">
										<h3 class="skill-name">WordPress</h3>
										<p class="skill-description">WordPress is an open-source and free Web publishing application, content management system and blogging tool.</p>
									</li>
								</ul>

								<h2 class="secondary-title tools-title">Other Tools I Use In The Work Process</h2>

								<ul class="tools-list">
									<li class="tool">
										<h3 class="tool-name">Sass</h3>
										<p class="tool-description">Is a language used to write better CSS and it speeds the process of creating styles.</p>
									</li>
									<li class="tool">
										<h3 class="tool-name">Gulp</h3>
										<p class="tool-description">Is a task runner I use to compile sass code into valid CSS and minify files for a faster site loading speed.</p>
									</li>
									<li class="tool">
										<h3 class="tool-name">Git</h3>
										<p class="tool-description">Is a version control system that allows you to keep track of the changes made to the website and is a great tool for collaboration.</p>
									</li>
									<li class="tool">
										<h3 class="tool-name">Bootstrap</h3>
										<p class="tool-description">A framework that comes with pre-built components for the web and can speed up the creation process.</p>
									</li>
									<li class="tool">
										<h3 class="tool-name">Understrap</h3>
										<p class="tool-description">Is a WordPress theme based on Underscores that uses Bootstrap and Sass, along with Gulp. It's a basic theme that allows for advanced customization.</p>
									</li>
									<li class="tool">
										<h3 class="tool-name">Green Sock Animation Platform</h3>
										<p class="tool-description">A Javascript animation library that I use to create advanced animations that don't affect the website performance.</p>
									</li>
									<li class="tool">
										<h3 class="tool-name">Scroll Magic</h3>
										<p class="tool-description">A Javascript library that is used along with Green Sock for great scrolling animations similar to the ones on this website.</p>
									</li>
								</ul>

								<div class="work-cta">
									<h3 class="cta-title">See these skills in action</h3>
									<a href="http://localhost:3000/dragosvlad.com/work/" class="btn btn-cta"><i class="fa fa-hand-o-right" aria-hidden="true"></i> View My Work</a>
								</div>

							</div>
							
							<!-- <div class="about-title-wrapper"> -->

								<!-- <h1 class="about-title">About<br>me</h1> -->

							<!-- </div> -->

						</div>

					</section>

					<section class="about-section about-process">

						<div class="inner-wrapper">

							<div class="about-text">
								<h2 class="secondary-title process-title">What to expect from me</h2>
								<ul class="process-list">
									<li class="process">
										<h3 class="process-name"><i class="fa fa-comments" aria-hidden="true"></i> Communication</h3>
										<p class="process-description">
											We will talk about the project details. I want to understand what your needs are and how I can help you. Then we will come together with the best solution.
										</p>
									</li>
									<li class="process">
										<h3 class="process-name"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Planning</h3>
										<p class="process-description">
											 Creating the website basic structure, sitemap and content, establish what functionality is needed and how to acomplish it.
										</p>
									</li>
									<li class="process">
										<h3 class="process-name"><i class="fa fa-paint-brush" aria-hidden="true"></i> Design</h3>
										<p class="process-description">
											I will create the basic sketches and wireframes for the website&nbsp;design.
										</p>
									</li>
									<li class="process">
										<h3 class="process-name"><i class="fa fa-code" aria-hidden="true"></i> Code</h3>
										<p class="process-description">
											 In this phase we create the actual website based on the content, design and functionality chosen.
										</p>
									</li>
									<li class="process">
										<h3 class="process-name"><i class="fa fa-refresh" aria-hidden="true"></i> Revisions</h3>
										<p class="process-description">
											You will have the chance to see what's going on with the website at all times, you can give your input and suggestions and any changes you like.
										</p>
									</li>
									<li class="process">
										<h3 class="process-name"><i class="fa fa-question" aria-hidden="true"></i> Further support</h3>
										<p class="process-description">
											I like building long, lasting relationships with my clients. I will provide support for 6 more months after the project is done. Any bugs, technical problems or questions you have, I will be available to help you with.
										</p>
									</li>
								</ul>
							</div>

							<div class="contact-cta">
								<h3 class="cta-title">Interested in working together?</h3>
								<a href="http://localhost:3000/dragosvlad.com/contact/" class="btn btn-cta"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Hire me</a>
							</div>

						</div>
						
					</section>

					<h1 class="about-title about-title--bio">About<br>me</h1>
					<h1 class="about-title about-title--tech">Technical<br>stuff</h1>
					<h1 class="about-title about-title--process">My<br>Process</h1>


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
