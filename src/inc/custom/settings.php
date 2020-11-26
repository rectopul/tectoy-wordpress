<?php

function all_customize_settings($wp_customize)
{

    $wp_customize->add_setting('ruler_item_1_image', array(
        'default'           => '',
        'section'           => 'ruler_banner_1',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('ruler_item_1_image')->transport = 'postMessage';

    $wp_customize->add_setting('ruler_item_1_text', array(
        'default'           => '',
        'section'           => 'ruler_banner_1',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('ruler_item_1_text')->transport = 'postMessage';



    $wp_customize->add_setting('ruler_item_2_image', array(
        'default'           => '',
        'section'           => 'ruler_banner_2',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_setting('ruler_item_2_text', array(
        'default'           => '',
        'section'           => 'ruler_banner_2',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('ruler_item_2_image')->transport = 'postMessage';
    $wp_customize->get_setting('ruler_item_2_text')->transport = 'postMessage';



    $wp_customize->add_setting('ruler_item_3_image', array(
        'default'           => '',
        'section'           => 'ruler_banner_3',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_setting('ruler_item_3_text', array(
        'default'           => '',
        'section'           => 'ruler_banner_3',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('ruler_item_3_image')->transport = 'postMessage';
    $wp_customize->get_setting('ruler_item_3_text')->transport = 'postMessage';



    $wp_customize->add_setting('ruler_item_4_image', array(
        'default'           => '',
        'section'           => 'ruler_banner_4',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_setting('ruler_item_4_text', array(
        'default'           => '',
        'section'           => 'ruler_banner_4',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('ruler_item_4_image')->transport = 'postMessage';
    $wp_customize->get_setting('ruler_item_4_text')->transport = 'postMessage';


    /**
     * Sobre a empresa
     */

    $wp_customize->add_setting('about_company', array(
        'default'           => '',
        'section'           => 'about_company',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('about_company')->transport = 'postMessage';

    $wp_customize->add_setting('about_company_link', array(
        'default'           => '',
        'section'           => 'about_company',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('about_company_link')->transport = 'postMessage';

    $wp_customize->add_setting('about_company_image', array(
        'default'           => '',
        'section'           => 'about_company',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('about_company_image')->transport = 'postMessage';

    //min_banner_1

    $wp_customize->add_setting('min_banner_1', array(
        'default'           => '',
        'section'           => 'min_banner_1',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('min_banner_1')->transport = 'postMessage';

    $wp_customize->add_setting('min_banner_2', array(
        'default'           => '',
        'section'           => 'min_banner_2',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('min_banner_2')->transport = 'postMessage';


    $wp_customize->add_setting('video_1', array(
        'default'           => '',
        'section'           => 'videos',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('video_1')->transport = 'postMessage';

    $wp_customize->add_setting('video_2', array(
        'default'           => '',
        'section'           => 'videos',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('video_2')->transport = 'postMessage';

    $wp_customize->add_setting('video_3', array(
        'default'           => '',
        'section'           => 'videos',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->get_setting('video_3')->transport = 'postMessage';
}

add_action('customize_register', 'all_customize_settings');
