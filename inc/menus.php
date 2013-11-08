<?php

/*
 * Register nav menus
 */
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'dawn' ),
		'footer-links' => __( 'Footer Links', 'dawn' )
	)
);


/*
 * Define nav menus
 */
function dawn_main_nav() {
	wp_nav_menu( array(
			'container' => false,
			'container_class' => 'menu',
			'menu' => __( 'The Main Menu', 'dawn' ),
			'menu_class' => 'nav top-nav clearfix',
			'theme_location' => 'main-nav',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'depth' => 0,
			'fallback_cb' => 'dawn_main_nav_fallback'
		) );
}


/*
 * This is the fallback menu
 */
function dawn_main_nav_fallback() {
	wp_page_menu( array(
			'show_home' => false,
			'sort_column' => 'menu_order',
			'menu_class' => 'nav top-nav',
			'include'     => '',
			'exclude'     => '',
			'echo'        => true,
			'link_before' => '',
			'link_after' => ''
		) );
}
