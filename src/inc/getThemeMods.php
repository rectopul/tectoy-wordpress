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
