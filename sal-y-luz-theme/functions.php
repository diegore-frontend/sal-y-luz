<?php
	if (function_exists('register_sliderbar')) {
		register_sliderbar();
		register_nav_menus( array(
			'primary' => __( 'Menu 1' , 'Yankee Commpany'),
		));

		add_theme_support('post-thumbnails');
	}
