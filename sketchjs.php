<?php
/*
Plugin Name: sketchjs
Plugin URI: http://dakota-code.com/
Description: This plugin installs sketch.js and required jQuery plugins to your installation.
Version: 1.0.1
Author: Craig Ralston
Author URI: http://dakota-code.com/
License: GPL2
*/

// Install sketch.js
function sketchjs() {
    wp_deregister_script( 'sketchjs' ); // deregister
    wp_enqueue_script( 'sketchjs', plugins_url( '/js/sketch.min.js', __FILE__), array( 'jquery' ), true );
}
// load
add_action( 'wp_enqueue_scripts', 'sketchjs' );