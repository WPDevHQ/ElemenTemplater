<?php
/**
 * Actionschild template functions.
 *
 * @package actionschild
 */

if ( ! function_exists( 'elementor_pagebuilder' ) ) {
/*
 * Setup default page template Actions
 */
function elementor_pagebuilder() {
	get_header();
    
	do_action( 'elementor_before_content_wrapper' );
	
        while ( have_posts() ) : the_post();
		    do_action( 'elementor_page_elements' ); // Give your elements priorities so that they hook in the right place.
		endwhile;
	
	do_action( 'elementor_after_content_wrapper' );

    get_footer();
    }
}

if ( ! function_exists( 'elementor_blankpb' ) ) {
/*
 * Setup default page template Actions
 */
function elementor_blankpb() {
	elementor_blankpb_header();
    
	do_action( 'elementor_before_content_wrapper' );
	
        while ( have_posts() ) : the_post();
		    do_action( 'elementor_page_elements' ); // Give your elements priorities so that they hook in the right place.
		endwhile;
	
	do_action( 'elementor_after_content_wrapper' );

    elementor_blankpb_footer();
    }
}

function elementor_blankpb_header() {

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Actions
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
do_action( 'elementor_content_body_before' );
}

function elementor_blankpb_footer() {
	do_action( 'elementor_content_body_after' );
	wp_footer(); 
?>
</body>
</html>
<?php }

if ( ! function_exists( 'elementor_page_content' ) ) {
	
	function elementor_page_content() {
		the_content();
	}
}
add_action( 'elementor_page_elements', 		  'elementor_page_content',	10 );