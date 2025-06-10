<?php

/**
 * Hier komt straks extra functionaliteit
 */

/**
 * Laad extra css
 */
function m8prog_enqueue_styles()
{
  wp_enqueue_style(
    'm8prog-style',
    get_stylesheet_uri()
  );
}
add_action('wp_enqueue_scripts', 'm8prog_enqueue_styles');

/**
 * Zorg dat ik ook thumbnails op mijn pagina kan laten zien.
 */
add_theme_support('post-thumbnails');


function register_my_menus() {
	register_nav_menus(
		[
			'header' => __( 'Header Menu', 'ma-theme' )
		]
	);
}

add_action( 'init', 'register_my_menus' );


/**
 * Function to add extra classes to the menu list element
 * @usage:
 *      Add 'add_li_class'  => 'nav-item',
 *      as an extra option to wp_nav_menu()
 *
 * @param $classes
 * @param $item
 * @param $args
 *
 * @return mixed
 */
function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * Function to add extra classes to the menu anchor element
 * @usage:
 * Add 'add_li_class'  => 'nav-item',
 * as an extra option to wp_nav_menu()
 *
 * @param $attributes
 * @param $item
 * @param $args
 *
 * @return mixed
 * /
 */
function add_additional_class_on_a($attributes, $item, $args) {
    if ( empty( $attributes['class'] ) ) {
		$attributes['class'] = '';
	}
	
	if(isset($args->add_a_class)) {
		$attributes['class'] .= ' ' . $args->add_a_class;
	}
	return $attributes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


/**
 * Initialize the widget area
 * 
 * @return void
 */
function add_theme_widgets() {
	register_sidebar( 
        [
            'name'          => __( 'Footer Widget Area links', 'ma-theme' ),
            'id'            => 'footer_1',
            'description'   => __( 'A widget area located in the footer.', 'ma-theme' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s col-6 col-md">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        ] 
    );
	register_sidebar( 
        [
            'name'          => __( 'Footer Widget Area midden', 'ma-theme' ),
            'id'            => 'footer_2',
            'description'   => __( 'A widget area located in the footer.', 'ma-theme' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s col-6 col-md">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        ] 
    );
	register_sidebar( 
        [
            'name'          => __( 'Footer Widget Area rechts', 'ma-theme' ),
            'id'            => 'footer_3',
            'description'   => __( 'A widget area located in the footer.', 'ma-theme' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s col-6 col-md">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        ] 
    );
}

add_action( 'widgets_init', 'add_theme_widgets' );