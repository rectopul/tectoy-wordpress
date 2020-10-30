<?php

/**
 * Insert all Customizes Panels in one function
 */
function rmb_customize_panels($wp_customize)
{
    $wp_customize->add_panel('panel_home', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'title'          => 'Conteúdo do site',
        'description'    => 'Editar textos e conteúdos do site',
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
    $wp_customize->add_section('home_title', array(
        'title'    => __('Home Page', 'auaha'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite os conteúdos da homepage'),
        'priority' => 2,
        'panel'            => 'panel_home'
    ));
}
add_action('customize_register', 'rmb_customize_sections');


/**
 * Insert all Customizes Settings in one function
 */
function rmb_customize_settings($wp_customize)
{
    /**
     * Home page title
     * section: home_title
     */
    $wp_customize->add_setting('home_title', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    /**
     * Home page title
     * section: home_title
     */
    $wp_customize->add_setting('home_question', array(
        'default'           => '',
        'section'           => 'home_title',
        'sanitize_callback' => 'wp_kses_post',
    ));

    /**
     * Page select to control parental
     * section: home_title
     */
    $wp_customize->add_setting('page_to_yes', array(
        'default'           => '',
        'section'           => 'home_title',
        'sanitize_callback' => 'wp_kses_post',
    ));
}
add_action('customize_register', 'rmb_customize_settings');

function rmb_custom_controls($wp_customize)
{

    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'home_title', array(
        'label' => __('Texto destaque home'),
        'type' => 'textarea',
        'description' => __('Informe um titulo em destaque na homepage'),
        'section'    => 'home_title',
        'settings'   => 'home_title',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Pergunta controle parental
     * settings: home_question
     */

    $wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control($wp_customize, 'home_question', array(
        'label' => __('Controle parental'),
        'type' => 'textarea',
        'description' => __('Informe uma mensagem para o controle parental'),
        'section'    => 'home_title',
        'input_attrs' => array(
            'toolbar1' => 'undo redo formatselect bold italic fontsizeselect forecolor bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )));

    /**
     * Select page of control parental
     * settings: page_to_yes
     */
    //add control
    $wp_customize->add_control('page_to_yes', array(
        'label' => 'Selecione a página',
        'description' => __('Informe para qual página o usuário será redirecionado ao confirmar o controle parental'),
        'type'  => 'dropdown-pages',
        'section' => 'home_title',
        'settings' => 'page_to_yes'
    ));

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
        'settings' => 'commitment_blocks_3',
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
     * Contato
     * section: contact
     * Informações de contato da empresa
     * settings: contact_mail, contact_cell, contact_phone
     */
    $wp_customize->add_control('contact_mail', array(
        'type' => 'text',
        'section' => 'contacto', // // Add a default or your own section
        'label' => __('E-mail de contato da empresa'),
        'description' => __('Informe um email para contato com a empresa.'),
    ));
    $wp_customize->add_control('contact_cell', array(
        'type' => 'text',
        'section' => 'contacto', // // Add a default or your own section
        'label' => __('Calular com whatsapp '),
        'description' => __('Informe um numero de celular com whatsapp.'),
    ));
    $wp_customize->add_control('contact_phone', array(
        'type' => 'text',
        'section' => 'contacto', // // Add a default or your own section
        'label' => __('Telefone'),
        'description' => __('Informe um Telefone para contato.'),
    ));

    /**
     * Redes sociais
     * panel: panel_home
     * Informações de contato da empresa
     * section: social_net
     * settings: social_facebook, social_instagram, social_youtube
     */
    $wp_customize->add_control('social_facebook', array(
        'type' => 'text',
        'section' => 'social_net', // // Add a default or your own section
        'label' => __('Facebook'),
        'description' => __('Informe o link do facebook da empresa'),
    ));
    $wp_customize->add_control('social_instagram', array(
        'type' => 'text',
        'section' => 'social_net', // // Add a default or your own section
        'label' => __('Instagram'),
        'description' => __('Informe o link do instagram da empresa'),
    ));
    $wp_customize->add_control('social_youtube', array(
        'type' => 'text',
        'section' => 'social_net', // // Add a default or your own section
        'label' => __('Youtube'),
        'description' => __('Informe o link do canal do youtube da empresa'),
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
