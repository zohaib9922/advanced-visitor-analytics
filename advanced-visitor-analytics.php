<?php
/**
 * Plugin Name: Advanced Visitor Analytics
 * Description: Tracks live visitors and user engagement metrics.
 * Version: 1.0.0
 * Author: Zohaib Hassan
 */

if (!defined('ABSPATH')) exit;

function ava_enqueue_scripts() {
    wp_enqueue_script('ava-tracker', plugin_dir_url(__FILE__) . 'assets/js/tracker.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ava_enqueue_scripts');