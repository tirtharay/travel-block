<?php

/**
 * Plugin Name:       Travel Itinerary Block
 * Plugin URI:        https://github.com/tirtharay/travel-Itinerary-block-guttenberg-acf
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tirtha Ray
 * Author URI:        http://tirtharay.com.br/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/tirtharay/travel-Itinerary-block-guttenberg-acf
 * Text Domain:       travel-Itinerary-block-guttenberg-acf
 * Domain Path:       /languages
 */


defined( 'ABSPATH' ) or die ( 'No authorized access!' );


// Register a custom block type
add_action('acf/init', 'tr_register_travel_block');
function tr_register_travel_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Travel Itinerary Block block.
        acf_register_block_type(array(
            'name'              => 'travelitineraryblock',
            'title'             => __('Travel Itinerary Block'),
            'description'       => __('Travel Itinerary Block to add information.'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'template-parts/travel-block.php',
            'category'          => 'media',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'travel', 'Itinerary' ),
            'enqueue_assets'    => function (){
                wp_enqueue_style( 'travelitineraryblock', plugin_dir_url( __FILE__ ) . '/assets/css/style.css','', '1.0.0', 'all' );

            }
        ));
    }
}