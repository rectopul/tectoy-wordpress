<?php

function all_customize_sections($wp_customize)
{
    $wp_customize->add_section('ruler_banner_1', array(
        'title'       => __('Banner Régua - Item 1', 'auaha'),
        'capability'  => 'edit_theme_options',
        'description' => __('Edite as informações do Banner Régua'),
        'priority'    => 2,
        'panel'       => 'panel_home'
    ));

    $wp_customize->add_section('ruler_banner_2', array(
        'title'    => __('Banner Régua - Item 2', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite as informações do Banner Régua'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));

    $wp_customize->add_section('ruler_banner_3', array(
        'title'    => __('Banner Régua - Item 3', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite as informações do Banner Régua'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));

    $wp_customize->add_section('ruler_banner_4', array(
        'title'    => __('Banner Régua - Item 4', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite as informações do Banner Régua'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));


    $wp_customize->add_section('about_company', array(
        'title'    => __('Sobre a Empresa', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite as informações sobre a empresa'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));

    $wp_customize->add_section('min_banner_1', array(
        'title'    => __('Mini Banner - 1', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite os Mini Banners'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));

    $wp_customize->add_section('min_banner_2', array(
        'title'    => __('Mini Banner - 2', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite os Mini Banners'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));

    $wp_customize->add_section('videos', array(
        'title'    => __('Videos do rodapé', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite os videos do rodapé'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));
}
add_action('customize_register', 'all_customize_sections');
