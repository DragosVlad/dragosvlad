<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'owl-slider', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'owl-slider-theme', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    // wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script('vendors', get_stylesheet_directory_uri() . '/js/vendors.min.js', array('jquery'), '1', true);

    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'owl-settings-scripts', get_stylesheet_directory_uri() . '/js/owl-settings.js', array(), $the_theme->get( 'Version' ), true );

    if( is_page( 'about-me') ){
        wp_enqueue_script( 'about-script', get_stylesheet_directory_uri() . '/js/about-page.js', array(), '1.0.0', true );
    }

    if( is_page( 'work') ){
        wp_enqueue_script( 'work-script', get_stylesheet_directory_uri() . '/js/work-page.js', array(), '1.0.0', true );
    }

    $wnm_custom = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
    wp_localize_script( 'child-understrap-scripts', 'directory_uri', $wnm_custom );


    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
