<?php

/*
 * Register main menu for Wordpress use
 */
function register_menus() {
	register_nav_menus(array(
		'Main Menu' => 'The Main Navigation Menu'
	));
}
add_action('init', 'register_menus');

?>