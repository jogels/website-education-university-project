<?php
/**
 * @package Campus Education
 * @subpackage campus-education
 * Setup the WordPress core custom header feature.
 *
 * @uses campus_education_header_style()
*/

function campus_education_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'campus_education_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'campus_education_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'campus_education_custom_header_setup' );

if ( ! function_exists( 'campus_education_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see campus_education_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'campus_education_header_style' );
function campus_education_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .page-template-custom-front-page .top-bar, .top-bar{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'campus-education-basic-style', $custom_css );
	endif;
}
endif; //campus_education_header_style