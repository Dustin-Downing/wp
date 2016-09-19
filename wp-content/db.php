<?php
// this file drops in to the wp-settings.php script
// sets up domain variable for local environment
add_filter ( 'pre_option_home', 'test_localhosts' );
add_filter ( 'pre_option_siteurl', 'test_localhosts' );
function test_localhosts( ) {
  if (is_localhost())
  {
     return "http://localhost:8888";
  }
  else return false; // act as normal; will pull main site info from db
}

function is_localhost() {
    $whitelist = array( '127.0.0.1', '::1' );
    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
        return true;
}

?>
