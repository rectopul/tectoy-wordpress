<?php
function all_custom_controls($wp_customize)
{
    /**
     * Banner Régua Item 1
     */
    $wp_customize->add_control('ruler_item_1_text', array(
        'type' => 'text',
        'section' => 'ruler_banner_1', // // Add a default or your own section
        'label' => __('Conteúdo'),
    ));

    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'ruler_item_1_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'ruler_banner_1',
            'label' => __('Imagem', 'domain')
        ]
    );

    $wp_customize->add_control($media_control);



    /**
     * Banner Régua Item 1
     */
    $wp_customize->add_control('ruler_item_2_text', array(
        'type' => 'text',
        'section' => 'ruler_banner_2', // // Add a default or your own section
        'label' => __('Conteúdo'),
    ));

    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'ruler_item_2_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'ruler_banner_2',
            'label' => __('Imagem', 'domain')
        ]
    );

    $wp_customize->add_control($media_control);



    /**
     * Banner Régua Item 1
     */
    $wp_customize->add_control('ruler_item_3_text', array(
        'type' => 'text',
        'section' => 'ruler_banner_3', // // Add a default or your own section
        'label' => __('Conteúdo'),
    ));

    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'ruler_item_3_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'ruler_banner_3',
            'label' => __('Imagem', 'domain')
        ]
    );

    $wp_customize->add_control($media_control);



    /**
     * Banner Régua Item 1
     */
    $wp_customize->add_control('ruler_item_4_text', array(
        'type' => 'text',
        'section' => 'ruler_banner_4', // // Add a default or your own section
        'label' => __('Conteúdo'),
    ));

    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'ruler_item_4_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'ruler_banner_4',
            'label' => __('Imagem', 'domain')
        ]
    );

    $wp_customize->add_control($media_control);

    $wp_customize->add_control('about_company', array(
        'type' => 'textarea',
        'section' => 'about_company', // // Add a default or your own section
        'label' => __('Texto Sobre a empresa'),
    ));

    $wp_customize->add_control('about_company_link', array(
        'type' => 'text',
        'section' => 'about_company', // // Add a default or your own section
        'label' => __('Link do botão'),
    ));
}

add_action('customize_register', 'all_custom_controls');
