<?php


// *** ================================================= ***
// *** ALL Function Custom Meta Box Start ***
// *** ================================================= ***


if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}


// #===================================================
// ********** Function Custom Meta Box Start **********
// #===================================================

function custom_metabox() {


	// #==========================================================
	// ********** Unique Features Custom Meta Box Start **********
	// #==========================================================
		
	$Unique_Features_metabox = new_cmb2_box( array(
		'id'            => 'Unique_Features_metabox',
		'title'         => esc_html__( 'Unique Features Metabox', 'cmb2' ),
		'object_types'  => array( 'Unique_Features'), // Post type
		'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		
	) );

	$Unique_Features_metabox->add_field( array(
		'name' => esc_html__( 'Demo Field', 'appri' ),
		'desc' => esc_html__( 'Input Your Demo Label.', 'appri' ),
		'id'   => 'demo_type',
		'type' => 'text',
	) );
	$Unique_Features_metabox->add_field( array(
		'name' => esc_html__( 'Details Field', 'appri' ),
		'desc' => esc_html__( 'Input Your Details Label.', 'appri' ),
		'id'   => 'Details_type',
		'type' => 'text',
	) );

	$Unique_Features_metabox->add_field( array(
		'name' => esc_html__( 'Animation Field', 'appri' ),
		'desc' => esc_html__( 'Input Your Animation Class Name.', 'appri' ),
		'id'   => 'Animation_type',
		'type' => 'text',
	) );

	$Unique_Features_metabox->add_field( array(
		'name' => esc_html__( 'Test Image', 'appri' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'appri' ),
		'id'   => 'image_type',
		'type' => 'file',
	) );

	// #==========================================================
	// ********** Unique Features Custom Meta Box End **********
	// #==========================================================

	// #==========================================================
	// ********** Blog Post Custom Meta Box Start **********
	// #==========================================================

	$blog_post_metabox = new_cmb2_box( array(
		'id'            => 'blog_post_metabox',
		'title'         => esc_html__( 'Blog Metabox', 'cmb2' ),
		'object_types'  => array( 'blog_post'), // Post type
		'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		
	) );



	// #==========================================================
	// ********** Blog Post Custom Meta Box End **********
	// #==========================================================



}

add_action( 'cmb2_admin_init', 'custom_metabox' );


// *** ================================================= ***
// *** ALL Function Custom Meta Box End ***
// *** ================================================= ***