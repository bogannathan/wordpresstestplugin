<?php
/**
 * Plugin Name: Nathan Bogan Highlighter
 * Description: This plugin highlights or unhighlights a clicked element, depending on it's current state.
 * Version: 1.0.0
 * Author: Nathan Bogan
 * License: GPL2
 */
add_action('wp_enqueue_scripts', 'nathan_bogan_highlighter');

function nathan_bogan_highlighter() {
    wp_register_style('myhighlighter', plugins_url('custom-style.css',__FILE__ ));
    wp_enqueue_style('myhighlighter');
    wp_register_script( 'testspace', plugins_url('test.js',__FILE__ ), array('jquery'), null, true);
    wp_enqueue_script('testspace');
}
