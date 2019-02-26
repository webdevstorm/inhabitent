<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_login_logo() {
	$logo_url = get_template_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg';

	echo '<style>
	.login h1 a {
		background-image: url('. $logo_url .');
		background-repeat: no-repeat;
		background-size: 300px 53px;
		padding-left:230px;
	}
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');


function admin_logo_url($url){
return 'http://localhost:3000/wp-login.php?loggedout=true';
}
add_filter('login_header_url', 'admin_login_url');



function inhabitent_products( $query ) 
{

  
    if ( is_post_type_archive( 'product' ) || is_tax('product_type') ) {

		$query->set( 'posts_per_page', 16 );
		$query->set( 'order', 'ASC' );
		$query->set( 'orderby', 'title' );
		return;	
	}
}
add_action( 'pre_get_posts', 'inhabitent_products', 3 );