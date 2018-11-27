<?php
/*
Plugin Name:  Mijn eigen plugin ticho plug
Plugin URI:   http://25030.hosts1.ma-cloud.nl/bewijzenmap/periode2.1/cms/opdracht3/wordpress/wp-content/plugins/eigen
Description:  Simpele eigen plugin voor CMS
Version:      0.1
Author:		  Ticho Plug
Author URI:   ttp://25030.hosts1.ma-cloud.nl/bewijzenmap/periode2.1/cms/opdracht3/wordpress/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/

if( !defined( 'ABSPATH' ) ) exit;


	 $args = array(
	    'labels'             => $labels,
	    'public'             => true,
	    'publicly_queryable' => true,
	    'show_ui'            => true,
	    'show_in_menu'       => true,
	    'query_var'          => true,
	    'rewrite'            => array( 'slug' => 'portfolio' ),
	    'capability_type'    => 'post',
	    'has_archive'        => true,
	    'hierarchical'       => false,
	    'menu_position'      => null,
	    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	    'menu_icon'			 => 'dashicons-screenoptions',
    );
function test_register_post_type() {
	

	
    $labels = array( 'name' => _x( 'Portfolio', 'Post type general name', 'Mijn eigen plugin ticho plug' ), 'singular_name' => _x( 'Portfolio Item', 'Post type singular name', 'test-portfolio' ),
        'menu_name' => _x( 'Portfolio Items', 'Admin Menu text', 'Mijn eigen plugin ticho plug' ),
        'name_admin_bar' => _x( 'Portfolio Items', 'Add New on Toolbar', 'Mijn eigen plugin ticho plug' ),
);



register_post_type( 'test_portfolio', $args );
 
}
add_action( 'init', 'test_register_post_type' );
