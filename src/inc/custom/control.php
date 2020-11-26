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

    //about_company_image
    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'about_company_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'about_company',
            'label' => __('Imagem', 'domain')
        ]
    );

    $wp_customize->add_control($media_control);


    //min_banner_1
    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'min_banner_1', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'min_banner_1',
            'label' => __('Imagem', 'domain')
        ]
    );

    $wp_customize->add_control($media_control);

    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'min_banner_2', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'min_banner_2',
            'label' => __('Imagem', 'domain')
        ]
    );

    $wp_customize->add_control($media_control);

    //video_1
    $wp_customize->add_control('video_1', array(
        'type' => 'text',
        'section' => 'videos', // // Add a default or your own section
        'label' => __('Link Video - 1'),
    ));
    $wp_customize->add_control('video_2', array(
        'type' => 'text',
        'section' => 'videos', // // Add a default or your own section
        'label' => __('Link Video - 2'),
    ));
    $wp_customize->add_control('video_3', array(
        'type' => 'text',
        'section' => 'videos', // // Add a default or your own section
        'label' => __('Link Video - 3'),
    ));
}

add_action('customize_register', 'all_custom_controls');
