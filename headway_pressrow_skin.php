<?php
/*
Plugin Name: Headway Skin: Pressrow
Plugin URI: http://ajmorris.org/headway-skin/pressrow
Description: Pressrow port to Headway
Author: AJ Morris
Version: 1.0
Author URI: http://ajmorris.org
*/

function register_pressrow_skin(){
  
  global $pressrow_skin;
  
  $options = array(
    'header-style' => 'fixed',
    'footer-style' => 'fixed',
    
    'show-navigation-subpages' => false,
    'sub-nav-width' => 250,
    
    'show-tagline' => true,
    'show-navigation' => true,
    'show-breadcrumbs' => false,
    
    'navigation-position' => 'left',
    'header-order' => array('header', 'navigation', 'breadcrumbs'),
    'disable-header-image' => false,
    'disable-body-background-image' => false,
    
    'wrapper-margin' => '15px auto',
    'wrapper-width' => 960
  );
  
  // Register the skin.
  if(class_exists('HeadwaySkin')) $pressrow_skin = new HeadwaySkin('pressrow', 'Pressrow Skin', __FILE__, $options);
  
}

add_action('init', 'register_pressrow_skin');


?>