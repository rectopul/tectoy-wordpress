<?php
function get_header_message()
{
    echo nl2br(get_theme_mod('header_title'));
}

function company_location()
{
    echo nl2br(get_theme_mod('company_location'));
}

function about_image()
{

    echo wp_get_attachment_image(get_theme_mod('about_image'), 'view_large');
}


function company_location_image()
{

    echo wp_get_attachment_image(get_theme_mod('company_location_image'), 'view_large');
}
/**
 * Blocos
 * Blocos 1 linha
 */
function block_one_text_line_one()
{
    //block1-3__text
    echo nl2br(get_theme_mod('block1-3__text'));
}

function block_two_text_line_one()
{
    //block2-3__text
    echo nl2br(get_theme_mod('block2-3__text'));
}

function block_three_text_line_one()
{
    //block3-3__text
    echo nl2br(get_theme_mod('block3-3__text'));
}

/**
 * Compromisso da empresa
 * image: commitment_image
 * name: commitment_title
 */

function commitment_content()
{
    echo nl2br(get_theme_mod('commitment_title'));
}

function commitment_image()
{

    echo wp_get_attachment_image(get_theme_mod('commitment_image'), 'view_large');
}

/**
 * Blocos Compromisso
 */
function commitment_blocks_1()
{
    echo nl2br(get_theme_mod('commitment_blocks_1'));
}

function commitment_blocks_1_image()
{

    echo nl2br(get_theme_mod('commitment_blocks_1_image'));
}
function commitment_blocks_2()
{
    echo nl2br(get_theme_mod('commitment_blocks_2'));
}

function commitment_blocks_2_image()
{

    echo nl2br(get_theme_mod('commitment_blocks_2_image'));
}
function commitment_blocks_3()
{
    echo nl2br(get_theme_mod('commitment_blocks_3'));
}

function commitment_blocks_3_image()
{

    echo nl2br(get_theme_mod('commitment_blocks_3_image'));
}

/**
 * Informações da loja
 */
function shop_description()
{

    echo nl2br(get_theme_mod('shop'));
}
function shop_link()
{

    echo nl2br(get_theme_mod('shop_link'));
}
function shop_image()
{

    echo wp_get_attachment_image(get_theme_mod('shop_image'), 'view_large');
}

//contact_mail, contact_cell, contact_phone

function the_contact_mail()
{
    echo get_theme_mod('contact_mail');
}
function get_contact_mail()
{
    return get_theme_mod('contact_mail');
}

function the_contact_cell()
{
    echo get_theme_mod('contact_cell');
}
function get_the_contact_cell()
{
    return get_theme_mod('contact_cell');
}

function the_contact_phone()
{
    echo get_theme_mod('contact_phone');
}
function get_the_contact_phone()
{
    return get_theme_mod('contact_phone');
}

/**
 * Redes sociais
 * * settings: social_facebook, social_instagram, social_youtube
 */
function the_social_facebook()
{
    echo get_theme_mod('social_facebook');
}
function get_social_facebook()
{
    return get_theme_mod('social_facebook');
}

function the_social_instagram()
{
    echo get_theme_mod('social_instagram');
}
function get_social_instagram()
{
    return get_theme_mod('social_instagram');
}

function the_social_youtube()
{
    echo get_theme_mod('social_youtube');
}
function get_social_youtube()
{
    return get_theme_mod('social_youtube');
}

/**
 * Imagens
 */

function block_one_image_line_one()
{
    //block3-3__text
    echo wp_get_attachment_image(get_theme_mod('block1-3__image'), 'full');
}
function block_two_image_line_one()
{
    //block3-3__text
    echo wp_get_attachment_image(get_theme_mod('block2-3__image'), 'full');
}
function block_three_image_line_one()
{
    //block3-3__text
    echo wp_get_attachment_image(get_theme_mod('block3-3__image'), 'full');
}

/**
 * Blocos segunda linha
 * 
 */

function get_jobs_1()
{
    echo nl2br(get_theme_mod('jobs_1'));
}

function get_jobs_2()
{
    echo nl2br(get_theme_mod('jobs_2'));
}



function partners($atts = array())
{
    $setting_id = 'featured_image_gallery';


    $ids_array = get_theme_mod($setting_id);



    if (is_array($ids_array) && !empty($ids_array)) {
        //$atts['ids'] = implode(',', $ids_array);

        foreach ($ids_array as $media) {
            printf('<div class="swiper-slide"><figure>%s</figure></div>', wp_get_attachment_image($media, 'thumbnail'));
        }
        //echo gallery_shortcode($atts);
    }
}
