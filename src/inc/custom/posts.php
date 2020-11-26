<?php
function custom_types()
{

    /**
     * Post Type Videos
     * custom post specific from this theme
     */
    $presentation = array(
        'labels' => array(
            'name' => __('Apresentações'),
            'singular_name' => __('Apresentação')
        ),
        'has_archive' => true,
        'public' => true,
        'rewrite' => array('slug' => 'presentation'),
        'menu_icon' => 'dashicons-format-aside',
        'show_in_rest' => true,
        'taxonomies' => array('post_tag'),
        'supports' => array('title', 'editor', 'author', 'excerpt', 'thumbnail')
    );

    register_post_type('presentation', $presentation);
}

add_action('init', 'custom_types');
