<?php 


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'References',
		'menu_title'	=> 'References',
		'menu_slug' 	=> 'cutme-references',
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'cutme-footer',
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Contact line',
		'menu_title'	=> 'Contact line',
		'menu_slug' 	=> 'cutme-contactline',
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Social media',
		'menu_title'	=> 'Social media',
		'menu_slug' 	=> 'cutme-socialmedia',
	));

}