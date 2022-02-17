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
add_action('acf/init', 'tr_register_travel_block', 9);
add_action('acf/init', 'tr_register_travel_block_settings', 10);



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

function tr_register_travel_block_settings(){
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_6203eed9a9ee0',
            'title' => 'Travel itinerary Block',
            'fields' => array(
                array(
                    'key' => 'field_6203eef515662',
                    'label' => 'Day/Time',
                    'name' => 'daytime',
                    'type' => 'text',
                    'instructions' => 'Insert e.g. Day 1',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Day 1',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_6203ef2115663',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_6203ef3715664',
                    'label' => 'Activity Title',
                    'name' => 'activity_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_620be58d9be14',
                    'label' => 'Services',
                    'name' => 'services',
                    'type' => 'group',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_620e71373e30d',
                            'label' => 'Breakfast',
                            'name' => 'breakfast',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => '',
                            'default_value' => 0,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_620e71453e30f',
                            'label' => 'Lunch',
                            'name' => 'lunch',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => '',
                            'default_value' => 0,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_620e71443e30e',
                            'label' => 'Dinner',
                            'name' => 'dinner',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => '',
                            'default_value' => 0,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_6203ef5c15665',
                    'label' => 'AM Description',
                    'name' => 'am_description',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_6203efab15666',
                    'label' => 'PM Description',
                    'name' => 'pm_description',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_6203efb915667',
                    'label' => 'Overnight',
                    'name' => 'overnight',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/travelitineraryblock',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));
        
        endif;
}
		