<?php 
	add_action( 'wp_enqueue_scripts', 'baskervillechild_enqueue_styles' );
	function baskervillechild_enqueue_styles() 
	{
		wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', '1.0.0'); 
	}

	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function init_widget_areas()
	{
		register_sidebar(array(
			'name'          => 'Pre-Header',
			'id'            => 'preheader',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		));
	}
	add_action('widgets_init', 'init_widget_areas');
 ?>