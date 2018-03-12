<?php


if( ! function_exists( 'meetup_embed_init' ) ) {

    /*
    * Init Register Block Type
    *
    * This function inits a new function called register_block_type()
    * This function ties the JS block in the editor with a PHP version
    * whose data will be stored in the db and displayed on the frontend.
    * The style.css in the block will style the editor and front-end versions.
    */

    function meetup_embed_init() {

        register_block_type( 'dainemawer/meetup', array(
            'render_callback' => 'render_meetup_embed',
        ));

    }

    add_action( 'init', 'meetup_embed_init' );

}

if( ! function_exists( 'render_meetup_embed' ) ) {

    /*
    * Render Gutenberg Block in PHP
    *
    * Its up to us now to render the block in the exact same way as we have in block.js
    * We will need to provide the same markup and data handling as we did in JS
    *
    * @param array $attributes allows you to access any attributes setup in registerBlockType()  
    */

    function render_meetup_embed( $attributes ) {


            // Build up our markup
            $html  = '<div class="meetup-embed-wrapper">';
            $html .= '<div class="repo-description">';
            $html .= '<a href="'. esc_attr( esc_url( $data['html_url'] ) ) . '" title="' . esc_attr( $data['name'] ) . '" target="_blank" rel="noopener noferrer">' . esc_attr( $data['full_name'] ) . '</a><p>' . wp_trim_words( esc_attr( $data['description'] ), 10, '...' )  . '</p>';
            $html .= '</div>';
            $html .= '<a href="' . esc_attr( esc_url( $data['html_url'] ) ) . '" class="avatar_img" style="background-image: url(' . esc_attr( esc_url( $data['owner']['avatar_url'] ) ) . ')" target="_blank" rel="noopener noferrer"></a>';
            $html .= '</div>';
        

        // Return the markup, this function will store the data in post_content, and render it when we use the_content() in our templates
        return $html; 

    }

}

if( ! function_exists( 'meetup_block_editor_assets' ) ) {

    /*
    * Enqueues Block Javascript
    * block.build.js contains compiled ES6 Javascript that allows the block
    * to work in the Gutenberg editor
    * @since 0.1.0
    */

    function meetup_block_editor_assets() {
        wp_enqueue_script(
            'meetup-block-scripts',
            plugins_url( 'block.build.js', __FILE__ ),
            array( 'wp-blocks', 'wp-i18n', 'wp-element', 'underscore' ),
            filemtime( plugin_dir_path( __FILE__ ) . 'block.build.js' )
        );
    }

    add_action( 'enqueue_block_editor_assets', 'meetup_block_editor_assets' );

}

if( ! function_exists( 'meetup_block_block_assets' ) ) {

    /*
    * Enqueues Block Styles for Client-facing & Editor Screens
    * This file will be appended to the admin and the front-end so that all 
    * instances of blocks can share the same styles.
    * @since 0.1.0
    */

    function meetup_block_block_assets() {
        wp_enqueue_style(
            'meetup-block-styles',
            plugins_url( 'style.css', __FILE__ ),
            array( 'wp-blocks' ),
            filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
        );
    }

    add_action( 'enqueue_block_assets', 'meetup_block_block_assets' );

}


