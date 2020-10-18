<?php

/**
 * Insert all Customizes Panels in one function
 */
function rmb_customize_panels($wp_customize)
{
    $wp_customize->add_panel('panel_home', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'title'          => 'Sobre a empresa',
        'description'    => 'Editar textos e informações sobre a empresa',
    ));

    /**
     * JOBS PANEL
     * Painel destinado a descrição e apresentação dos jobs da empresa
     */

    $wp_customize->add_panel('panel_jobs', array(
        'priority'       => 41,
        'capability'     => 'edit_theme_options',
        'title'          => 'Descrição dos jobs',
        'description'    => 'Editar textos e informações das dos jobs da empresa',
    ));
}
add_action('customize_register', 'rmb_customize_panels');

/**
 * Insert all Customizes Sections in one function
 */
function rmb_customize_sections($wp_customize)
{
    $wp_customize->add_section('header_title', array(
        'title'    => __('Informações', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Preencha os campos com informações úteis sobre a empresa'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));

    /**
     * Sede da empresa
     */

    $wp_customize->add_section('company_location', array(
        'title'    => __('Informações de localização', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Preencha os campos com informações úteis sobre a localização da empresa'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));

    /**
     * Section from Jobs E-commerce 
     * settings: jobs_1
     */

    $wp_customize->add_section('jobs_1', array(
        'title'    => __('Jobs - E-commerce', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => 'Descrição dos jobs de e-commerce apresentado na homepage',
        'priority' => 3,
        'panel'            => 'panel_jobs'
    ));

    /**
     * Section from Jobs estratégia digital
     * settings: jobs_2
     */

    $wp_customize->add_section('jobs_2', array(
        'title'    => __('Jobs - Estratégia digital', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => 'Descrição dos jobs de Estratégia digital apresentado na homepage',
        'priority' => 3,
        'panel'            => 'panel_jobs'
    ));

    /**
     * Image Gallery
     */

    $wp_customize->add_section('featured_image_gallery_section', array(
        'title'      => __('Galeria se parceiros'),
        'priority'   => 25,
    ));

    //$wp_customize->get_section('header_title')->active_callback = 'is_front_page';
}
add_action('customize_register', 'rmb_customize_sections');


/**
 * Insert all Customizes Settings in one function
 */
function rmb_customize_settings($wp_customize)
{
    $wp_customize->add_setting('header_title', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->get_setting('header_title')->transport = 'postMessage';

    /**
     * Image about partner
     */

    $wp_customize->add_setting('about_image', array(
        'default'           => '',
        'section'           => 'header_title',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->get_setting('about_image')->transport = 'postMessage';

    /**
     * Sede da empresa
     * company_location
     */

    $wp_customize->add_setting('company_location', array(
        'default'           => '',
        'section'           => 'company_location',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('company_location')->transport = 'postMessage';

    /**
     * image from location company
     */

    $wp_customize->add_setting('company_location_image', array(
        'default'           => '',
        'section'           => 'company_location',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('company_location_image')->transport = 'postMessage';


    /**
     * Jobs 1
     */

    $wp_customize->add_setting('jobs_1', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'jobs_1'
    ));

    //jobs_2
    $wp_customize->add_setting('jobs_2', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'jobs_2'
    ));

    $wp_customize->get_setting('Jobs')->transport = 'postMessage';

    /**
     * Gallery of partners
     */
    $wp_customize->add_setting('featured_image_gallery', array(
        'default' => array(),
        'sanitize_callback' => 'wp_parse_id_list',
    ));

    //$wp_customize->get_setting('featured_image_gallery')->transport = 'postMessage';
}
add_action('customize_register', 'rmb_customize_settings');

function rmb_custom_controls($wp_customize)
{

    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'header_title', array(
        'label' => __('História da Empresa'),
        'type' => 'textarea',
        'description' => __('Conte um pouco sobre a história da empresa'),
        'section'    => 'header_title',
        'settings'   => 'header_title',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Control type media
     * image for about partner
     */
    $media_control = new WP_Customize_Media_Control(
        $wp_customize,
        'about_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'header_title',
            'label' => __('Imagem sobre a empresa', 'domain'),
            'description' => __('Imagem apresentada ao lado do texto sobre a empresa', 'domain')
        ]
    );
    $wp_customize->add_control($media_control);

    /**
     * Sede da empresa
     * tipo texto tinymce
     */

    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'company_location', array(
        'label' => __('Sede da empresa'),
        'type' => 'textarea',
        'description' => __('Conte um pouco sobre a sede da empresa'),
        'section'    => 'company_location',
        'settings'   => 'company_location',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Control type media
     * image for about location company
     */
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'company_location_image', #setting/option_id
        [
            'mime_type' => 'image',
            'settings' => 'company_location_image',
            'section' => 'company_location',
            'label' => __('Imagem sobre a sede empresa', 'domain'),
            'description' => __('Imagem apresentada ao lado do texto sobre a sede empresa', 'domain')
        ]
    ));


    /**
     * Custom control from
     * Jobs 1
     */
    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'jobs_1', array(
        'label' => __('Jobs - E-commerce'),
        'type' => 'textarea',
        'description' => __('Texto apresentado na homepage-jobs'),
        'section'    => 'jobs_1',
        'settings'   => 'jobs_1',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Custom control from
     * jobs_2
     */

    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'jobs_2', array(
        'label' => __('estratégia digital', 'auaha'),
        'type' => 'textarea',
        'description' => __('Texto apresentado na homepage-jobs'),
        'section'    => 'jobs_2',
        'settings'   => 'jobs_2',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Custom control for Parceiros
     */
    if (!class_exists('CustomizeImageGalleryControl\Control')) {
        return;
    }

    $wp_customize->add_control(new CustomizeImageGalleryControl\Control(
        $wp_customize,
        'featured_image_gallery',
        array(
            'label'    => __('Image Gallery Field Label'),
            'section'  => 'featured_image_gallery_section',
            'settings' => 'featured_image_gallery',
            'type'     => 'image_gallery',
        )
    ));
}


add_action('customize_register', 'rmb_custom_controls');

function rmb_custom_partials($wp_customize)
{
    $wp_customize->selective_refresh->add_partial(
        'header_title',
        [
            'selector' => '.content-about article',
            'render_callback' => 'get_header_message',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial(
        'about_image',
        [
            'selector' => '.content-about figure',
            'render_callback' => 'about_image',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    /**
     * Content location company
     */
    $wp_customize->selective_refresh->add_partial(
        'company_location_image',
        [
            'selector' => '.thirst__image figure',
            'render_callback' => 'company_location_image',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
    $wp_customize->selective_refresh->add_partial(
        'company_location',
        [
            'selector' => '.thirst__text article',
            'render_callback' => 'company_location',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    /**
     * Partial from
     * JOBS-1
     * settings: jobs_1
     */

    $wp_customize->selective_refresh->add_partial(
        'jobs_1',
        [
            'selector' => '.jobsList li:first-child',
            'render_callback' => 'get_jobs_1',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    /**
     * Partial from
     * Estratégia digital
     * settings: jobs_2
     */

    $wp_customize->selective_refresh->add_partial(
        'jobs_2',
        [
            'selector' => '.jobsList li:nth-child(2)',
            'render_callback' => 'get_jobs_2',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

    $wp_customize->selective_refresh->add_partial('featured_image_gallery', [
        'selector' => '.partners .col-12',
        'render_callback' => 'partners',
        'container_inclusive' => false,
        'fallback_refresh' => false
    ]);


    //require callbacks
    require_once get_template_directory() . '/inc/getThemeMods.php';
}
add_action('customize_register', 'rmb_custom_partials');
