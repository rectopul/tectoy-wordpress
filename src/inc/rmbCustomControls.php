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
        'title'          => 'Customizações',
        'description'    => 'Editar textos e informações customizáveis do layout',
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

    $wp_customize->add_section('block1', array(
        'title'    => __('Blocos 1', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Blocos editáveis para incrementar o layout', 'auaha'),
        'priority' => 3,
        'panel'            => 'panel_jobs'
    ));

    /**
     * Section from Jobs estratégia digital
     * settings: jobs_2
     */

    $wp_customize->add_section('commitment', array(
        'title'    => __('Compromisso', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Fale um pouco sobre o compromisso da empresa'),
        'priority' => 4,
        'panel'            => 'panel_home'
    ));


    /**
     * Section from blocks compromisso
     * commitment_blocks
     */

    $wp_customize->add_section('commitment_blocks', array(
        'title'    => __('Blocos Compromisso', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite os blocos de compromisso'),
        'priority' => 5,
        'panel'            => 'panel_home'
    ));

    /**
     * Section from shop
     * shop
     */

    $wp_customize->add_section('shop', array(
        'title'    => __('Loja', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite informações sobre a loja'),
        'priority' => 6,
        'panel'            => 'panel_home'
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
     * Blocos para incrementar o layout
     * block1-3__text
     */

    $wp_customize->add_setting('block1-3__text', array(
        'default'           => '',
        'section'           => 'block1',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('block1-3__text')->transport = 'postMessage';

    /**
     * image from increment layout
     */

    $wp_customize->add_setting('block1-3__image', array(
        'default'           => '',
        'section'           => 'block1',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('block1-3__image')->transport = 'postMessage';
    /**
     * Blocos para incrementar o layout
     * block2-3__text
     */

    $wp_customize->add_setting('block2-3__text', array(
        'default'           => '',
        'section'           => 'block1',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('block2__text')->transport = 'postMessage';

    /**
     * image from complement company
     */

    $wp_customize->add_setting('block2-3__image', array(
        'default'           => '',
        'section'           => 'block1',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('block2-3__image')->transport = 'postMessage';
    /**
     * Blocos para incrementar o layout
     * block2-3__text
     */

    $wp_customize->add_setting('block3-3__text', array(
        'default'           => '',
        'section'           => 'block1',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('block3__text')->transport = 'postMessage';

    /**
     * image from inclement company
     */

    $wp_customize->add_setting('block3-3__image', array(
        'default'           => '',
        'section'           => 'block1',
        'sanitize_callback' => 'wp_kses_post',
    ));


    $wp_customize->get_setting('block3-3__image')->transport = 'postMessage';


    /**
     * Titulo compromisso
     * section: commitment
     * name: commitment_title
     */

    $wp_customize->add_setting('commitment_title', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment'
    ));

    $wp_customize->get_setting('commitment_title')->transport = 'postMessage';

    /**
     * Imagem compromisso da empresa
     * section: commitment
     * name: commitment_image
     */

    $wp_customize->add_setting('commitment_image', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment'
    ));

    $wp_customize->get_setting('commitment_image')->transport = 'postMessage';

    /**
     * Blocos de compromisso
     * section: commitment_blocks
     * name: commitment_blocks_1
     */

    $wp_customize->add_setting('commitment_blocks_1', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment_blocks'
    ));
    $wp_customize->get_setting('commitment_blocks_1')->transport = 'postMessage';
    $wp_customize->add_setting('commitment_blocks_1_image', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment_blocks'
    ));
    $wp_customize->get_setting('commitment_blocks_1_image')->transport = 'postMessage';

    /**
     * Blocos de compromisso
     * section: commitment_blocks
     * name: commitment_blocks_1
     */

    $wp_customize->add_setting('commitment_blocks_2', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment_blocks'
    ));
    $wp_customize->get_setting('commitment_blocks_2')->transport = 'postMessage';
    $wp_customize->add_setting('commitment_blocks_2_image', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment_blocks'
    ));
    $wp_customize->get_setting('commitment_blocks_2_image')->transport = 'postMessage';
    /**
     * Blocos de compromisso
     * section: commitment_blocks
     * name: commitment_blocks_3
     */

    $wp_customize->add_setting('commitment_blocks_3', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment_blocks'
    ));
    $wp_customize->get_setting('commitment_blocks_3')->transport = 'postMessage';
    $wp_customize->add_setting('commitment_blocks_3_image', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'commitment_blocks'
    ));
    $wp_customize->get_setting('commitment_blocks_3_image')->transport = 'postMessage';

    //jobs_2
    $wp_customize->add_setting('jobs_2', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'jobs_2'
    ));

    $wp_customize->get_setting('Jobs')->transport = 'postMessage';

    /**
     * Shop description
     * section: shop
     * name: shop_description
     */
    $wp_customize->add_setting('shop', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'shop'
    ));

    $wp_customize->get_setting('shop')->transport = 'postMessage';
    /**
     * Shop link
     * section: shop
     * name: shop_link
     */
    $wp_customize->add_setting('shop_link', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'shop'
    ));

    $wp_customize->get_setting('shop_link')->transport = 'postMessage';
    /**
     * Shop image
     * section: shop
     * name: shop_image
     */
    $wp_customize->add_setting('shop_image', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'section'           => 'shop'
    ));

    $wp_customize->get_setting('shop_image')->transport = 'postMessage';

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
     * block1-3__text
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
     * Blocos para incrementar o layout
     * tipo texto tinymce
     */

    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'block1-3__text', array(
        'label' => __('Conteúdo do primeiro bloco'),
        'type' => 'textarea',
        'description' => __('Conteúdo exibido no primeiro bloco da primeira linha'),
        'section'    => 'block1',
        'settings'   => 'block1-3__text',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Blocos para incrementar o layout
     * block1-3__image
     */
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'block1-3__image', #setting/option_id
        [
            'mime_type' => 'image',
            'settings' => 'block1-3__image',
            'section' => 'block1',
            'label' => __('Imagem do primeiro bloco', 'domain'),
            'description' => __('Imagem será mostrada no topo do bloco (Recomendamos uma imagem pequena)', 'domain')
        ]
    ));

    /**
     * Bloco 2-3
     */
    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'block2-3__text', array(
        'label' => __('Conteúdo do segundo bloco'),
        'type' => 'textarea',
        'description' => __('Conteúdo exibido no segundo bloco da primeira linha'),
        'section'    => 'block1',
        'settings'   => 'block2-3__text',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Blocos para incrementar o layout
     * block2-3__image
     */
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'block2-3__image', #setting/option_id
        [
            'mime_type' => 'image',
            'settings' => 'block2-3__image',
            'section' => 'block1',
            'label' => __('Imagem do segundo bloco', 'domain'),
            'description' => __('Imagem será mostrada no topo do bloco (Recomendamos uma imagem pequena)', 'domain')
        ]
    ));
    /**
     * Bloco 3-3
     */
    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'block3-3__text', array(
        'label' => __('Conteúdo do terceiro bloco'),
        'type' => 'textarea',
        'description' => __('Conteúdo exibido no terceiro bloco da primeira linha'),
        'section'    => 'block1',
        'settings'   => 'block3-3__text',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Blocos para incrementar o layout
     * block3-3__image
     */
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'block3-3__image', #setting/option_id
        [
            'mime_type' => 'image',
            'settings' => 'block3-3__image',
            'section' => 'block1',
            'label' => __('Imagem do terceiro bloco', 'domain'),
            'description' => __('Imagem será mostrada no topo do bloco (Recomendamos uma imagem pequena)', 'domain')
        ]
    ));

    /**
     * Compromisso da empresa
     * section: commitment
     * name: commitment_title
     */
    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'commitment_title', array(
        'label' => __('Conteúdo do bloco Compromisso'),
        'type' => 'textarea',
        'description' => __('Informe um conteúdo ao bloco compromisso.'),
        'section'    => 'commitment',
        'settings'   => 'commitment_title',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Compromisso da empresa
     * section: commitment
     * name: commitment_image
     */
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'commitment_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'commitment',
            'label' => __('Imagem do do bloco compromisso', 'domain'),
            'description' => __('Selecione a imágem do bloco compromisso', 'domain')
        ]
    ));

    //--------------- BLOCOS DE COMPROMISSO

    /**
     * Blocos compromisso da empresa
     * section: commitment_blocks
     * name: commitment_blocks_1_image
     */
    $wp_customize->add_control('commitment_blocks_1_image', array(
        'type' => 'text',
        'section' => 'commitment_blocks', // // Add a default or your own section
        'label' => __('Titulo primeiro bloco de compromisso'),
        'description' => __('Informe um titulo ao primeiro bloco compromisso.'),
    ));

    /**
     * Blocos compromisso da empresa
     * section: commitment_blocks
     * name: commitment_blocks_1
     */
    $wp_customize->add_control('commitment_blocks_1', array(
        'type' => 'textarea',
        'section' => 'commitment_blocks', // // Add a default or your own section
        'label' => __('Descrição primeiro bloco de compromisso'),
        'description' => __('Informe uma descrição ao primeiro bloco compromisso.'),
    ));

    /**
     * Blocos compromisso da empresa
     * section: commitment_blocks
     * name: commitment_blocks_2_image
     */
    $wp_customize->add_control('commitment_blocks_2_image', array(
        'type' => 'text',
        'section' => 'commitment_blocks', // // Add a default or your own section
        'label' => __('Titulo segundo bloco de compromisso'),
        'description' => __('Informe um titulo ao segundo bloco compromisso.'),
    ));

    /**
     * Blocos compromisso da empresa
     * section: commitment_blocks
     * name: commitment_blocks_2
     */
    $wp_customize->add_control('commitment_blocks_2', array(
        'type' => 'textarea',
        'section' => 'commitment_blocks', // // Add a default or your own section
        'label' => __('Descrição segundo bloco de compromisso'),
        'description' => __('Informe uma descrição ao segundo bloco compromisso.'),
    ));

    /**
     * Blocos compromisso da empresa
     * section: commitment_blocks
     * name: commitment_blocks_3_image
     */
    $wp_customize->add_control('commitment_blocks_3_image', array(
        'type' => 'text',
        'section' => 'commitment_blocks', // // Add a default or your own section
        'label' => __('Titulo terceiro bloco de compromisso'),
        'description' => __('Informe um titulo ao terceiro bloco compromisso.'),
    ));

    /**
     * Blocos compromisso da empresa
     * section: commitment_blocks
     * name: commitment_blocks_3
     */
    $wp_customize->add_control('commitment_blocks_3', array(
        'type' => 'textarea',
        'section' => 'commitment_blocks', // // Add a default or your own section
        'label' => __('Descrição terceiro bloco de compromisso'),
        'description' => __('Informe uma descrição ao terceiro bloco compromisso.'),
    ));

    /**
     * Shop
     * settings: shop_image
     * section: shop
     */

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'shop_image', #setting/option_id
        [
            'mime_type' => 'image',
            'section' => 'shop',
            'label' => __('Imagem da loja', 'domain'),
            'description' => __('Selecione a imágem da loja', 'domain')
        ]
    ));

    /**
     * Shop link
     * setting: shop_link
     * section: shop
     */
    $wp_customize->add_control('shop_link', array(
        'type' => 'text',
        'section' => 'shop', // // Add a default or your own section
        'label' => __('Link para a loja'),
        'description' => __('Informe o link para sua loja.'),
    ));

    /**
     * Shop description
     * setting: shop
     * section: shop
     */
    $wp_customize->add_control('shop', array(
        'type' => 'textarea',
        'section' => 'shop', // // Add a default or your own section
        'label' => __('Descrição da loja'),
        'description' => __('Informe uma descrição para sua loja.'),
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
     * Compromisso da empresa
     * name: commitment_title
     */
    $wp_customize->selective_refresh->add_partial(
        'commitment_title',
        [
            'selector' => '.commitment_content',
            'render_callback' => 'commitment_content',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
    /**
     * Compromisso da empresa
     * name: commitment_image
     */
    $wp_customize->selective_refresh->add_partial(
        'commitment_image',
        [
            'selector' => '.commitment__image',
            'render_callback' => 'commitment_image',
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
