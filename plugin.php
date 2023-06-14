<?php

/**
 * Plugin Name: Card Bottom Reveal for Elementor
 * Description: Reveal card contents on hover widget for elementor.
 * Version: 1.0.0
 * Author: Nafiz Anam
 * Author URI: https://nafizanam.com
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function register_card_bottom_reveal_widget()
{
    require_once plugin_dir_path(__FILE__) . 'widget.php';
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Card_Bottom_Reveal());
}
add_action('elementor/widgets/widgets_registered', 'register_card_bottom_reveal_widget');

