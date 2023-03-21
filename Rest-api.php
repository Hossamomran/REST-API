<?php 

add_action( 'rest_api_init', function () {
  register_rest_route( 'custom-api/v3', '/results', array(
    'methods' => 'GET',
    'callback' => 'get_results_data',
  ) );
} );

function get_results_data() {
  global $wpdb;
  $results_table = "{$wpdb->prefix}results";
  $results_data = $wpdb->get_results("SELECT * FROM $results_table");
  return $results_data;
}

//Api link --->www.domainname.com/wp-json/custom-api/v3/downloads