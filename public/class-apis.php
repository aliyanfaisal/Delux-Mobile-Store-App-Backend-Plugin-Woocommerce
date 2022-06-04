<?php



// --------- REST ROUTES HERE
add_action( 'rest_api_init', function () {
  register_rest_route( 'dma/v1', '/get/settings', array(
    'methods' => 'GET',
    'callback' => 'dma_settings_api',
  ) );
} );




function dma_settings_api($req){

	global $wpdb;

	$table=$wpdb->prefix."dma_settings";

	$topCats= $wpdb->get_results("Select * from ".$table." where meta_key='top_cats' ");

	$topBanner= "https://delux.greymatter.com.pk/wp-content/uploads/2022/04/album-1.jpg";
	$defultImage="";
	
	$splashScreen=[];
	$defaultCurrency="";
	
	$featuredCats="";
	$response_body=[
		"top_cats"=>$topCats,
		"top_banner"=>$topBanner
	];
	return new WP_REST_Response(
	   array(
		'status' => 200,
		'response' => "settings.....",
		'body_response' => $response_body
	      )
	    );
	}
