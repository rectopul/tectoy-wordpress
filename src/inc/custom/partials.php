<?php
function all_partials($wp_customize)
{

    $wp_customize->selective_refresh->add_partial(
        'ruler_item_1_text',
        [
            'selector' => '.produtos > ul > li:first-child',
            'render_callback' => 'ruler_item_1',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial(
        'ruler_item_2_text',
        [
            'selector' => '.produtos > ul > li:nth-child(2)',
            'render_callback' => 'ruler_item_2',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial(
        'ruler_item_3_text',
        [
            'selector' => '.produtos > ul > li:nth-child(3)',
            'render_callback' => 'ruler_item_3',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial(
        'ruler_item_4_text',
        [
            'selector' => '.produtos > ul > li:nth-child(4)',
            'render_callback' => 'ruler_item_4',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial(
        'about_company',
        [
            'selector' => '.institucional .text > p',
            'render_callback' => 'about_company',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial(
        'min_banner_1',
        [
            'selector' => '.conheca > ul > li:nth-child(2) .image',
            'render_callback' => 'min_banner_1',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial(
        'min_banner_2',
        [
            'selector' => '.conheca > ul > li:nth-child(3) .image',
            'render_callback' => 'min_banner_2',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    require_once get_template_directory() . '/inc/custom/callbacks.php';
}

add_action('customize_register', 'all_partials');
