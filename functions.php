<?php 

function scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'scripts_with_jquery' );

if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Sidebar1', 'TechnoRevolution' ),
		'id' => 'sidebar-1',
		'before_widget' => "",
		'after_widget' => "",
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar( array(
		'name' => __( 'Sidebar2', 'TechnoRevolution' ),
		'id' => 'sidebar-2',
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function more_posts() {
	global $wp_query;
	return $wp_query->current_post + 1 < $wp_query->post_count;
}
?>
