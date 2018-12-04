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
Text Domain:  ticho-plug-plugin
Domain Path:  /languages
*/

if( !defined( 'ABSPATH' ) ) exit;


	
function test_register_post_type() {
	

	
    $labels = array( 'name' => _x( 'Portfolio', 'Post type general name', 'ticho-plug-plugin' ), 'singular_name' => _x( 'Portfolio Item', 'Post type singular name', 'ticho-plug-plugin' ),
        'menu_name' => _x( 'Portfolio Items', 'Admin Menu text', 'ticho-plug-plugin' ),
        'name_admin_bar' => _x( 'Portfolio Items', 'Add New on Toolbar', 'ticho-plug-plugin' ),
);

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


register_post_type( 'test_portfolio', $args );
 
}
add_action( 'init', 'test_register_post_type' );

function portfolio_taxonomy() {
	$labels = array(
'name' => _x( 'Item Types', 'taxonomy general name', 'ticho-plug-plugin' ),
'singular_name' => _x( 'Item Type', 'taxonomy singular name', 'ticho-plug-plugin' ),
);
 
$args = array(
'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'item-type' ),
);
  register_taxonomy( 'portfolio-type', 'ticho-plug-plugin', $args );
}
add_action( 'init', 'portfolio_taxonomy' );

