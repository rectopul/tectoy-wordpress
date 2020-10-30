<?php
function custom_types()
{

    /**
     * Post Type Videos
     * custom post specific from this theme
     */
    $videos = array(
        'labels' => array(
            'name' => __('Videos'),
            'singular_name' => __('Video')
        ),
        'has_archive' => true,
        'public' => true,
        'rewrite' => array('slug' => 'videos'),
        'menu_icon' => 'dashicons-youtube',
        'show_in_rest' => true,
        'taxonomies' => array('post_tag'),
        'supports' => array('title', 'editor', 'author', 'excerpt', 'thumbnail')
    );

    register_post_type('video', $videos);
}

add_action('init', 'custom_types');

/**
 * Taxonomias
 */
function reg_cat()
{


    /**
     * Tipos de Babás
     */
    $labels = array(
        'name' => _x('Categorias de Vídeos', 'taxonomy general name'),
        'singular_name' => _x('Categoria de Vídeo', 'taxonomy singular name'),
        'search_items' =>  __('Search Categorias de Vídeos'),
        'popular_items' => __('Popular Categorias de Vídeos'),
        'all_items' => __('Todas as Categorias de Vídeos'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar Categoria de Vídeo'),
        'update_item' => __('Atualizar Categoria de Vídeo'),
        'add_new_item' => __('Adicionar Nova Categoria de Vídeo'),
        'new_item_name' => __('Nova Categoria de Vídeo'),
        'separate_items_with_commas' => __('Separate Categorias de Vídeos with commas'),
        'add_or_remove_items' => __('Add or remove Categorias de Vídeos'),
        'choose_from_most_used' => __('Choose from the most used Categorias de Vídeos'),
        'menu_name' => __('Categoria de Vídeo'),
    );
    register_taxonomy('video_category', array('video'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'rewrite' => array('slug' => 'video_category'),
    ));
}

add_action('init', 'reg_cat');
