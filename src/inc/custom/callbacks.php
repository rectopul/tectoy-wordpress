<?php

function ruler_item_1()
{
    $imageID = get_theme_mod('ruler_item_1_image');
    $image = wp_get_attachment_image($imageID, 'full');

    echo '<div class="d-flex justify-content-center flex-wrap text-center">' .
        '<div class="image">' . $image . '</div>' .
        '<p>' . get_theme_mod('ruler_item_1_text') . '</p>' .
        '</div>';
}

function ruler_item_2()
{
    $imageID = get_theme_mod('ruler_item_2_image');
    $image = wp_get_attachment_image($imageID, 'full');

    echo '<div class="d-flex justify-content-center flex-wrap text-center">' .
        '<div class="image">' . $image . '</div>' .
        '<p>' . get_theme_mod('ruler_item_2_text') . '</p>' .
        '</div>';
}

function ruler_item_3()
{
    $imageID = get_theme_mod('ruler_item_3_image');
    $image = wp_get_attachment_image($imageID, 'full');

    echo '<div class="d-flex justify-content-center flex-wrap text-center">' .
        '<div class="image">' . $image . '</div>' .
        '<p>' . get_theme_mod('ruler_item_3_text') . '</p>' .
        '</div>';
}

function ruler_item_4()
{
    $imageID = get_theme_mod('ruler_item_4_image');
    $image = wp_get_attachment_image($imageID, 'full');

    echo '<div class="d-flex justify-content-center flex-wrap text-center">' .
        '<div class="image">' . $image . '</div>' .
        '<p>' . get_theme_mod('ruler_item_4_text') . '</p>' .
        '</div>';
}

function about_company()
{

    echo nl2br(get_theme_mod('about_company'));
}

function companyLink()
{
    echo get_theme_mod('about_company_link');
}

function company_image()
{
    //about_company_image
    $imageID = get_theme_mod('about_company_image');
    $image = wp_get_attachment_image($imageID, 'image_medium');

    echo $image;
}

function min_banner_1()
{
    //about_company_image
    $imageID = get_theme_mod('min_banner_1');
    $image = wp_get_attachment_image($imageID, 'mini_banner');

    echo $image;
}

function min_banner_2()
{
    //about_company_image
    $imageID = get_theme_mod('min_banner_2');
    $image = wp_get_attachment_image($imageID, 'mini_banner');

    echo $image;
}

function video_1()
{
    $url = get_theme_mod('video_1');
    parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);

    $image = 'https://img.youtube.com/vi/' . $my_array_of_vars['v'] . '/hqdefault.jpg';

    printf(
        '<div class="thumb"><i></i><img src="%s"></div><iframe width="420" height="240" src="https://www.youtube.com/embed/%s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        $image,
        $my_array_of_vars['v']
    );
}

function video_2()
{
    $url = get_theme_mod('video_2');
    parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);

    $image = 'https://img.youtube.com/vi/' . $my_array_of_vars['v'] . '/hqdefault.jpg';

    printf(
        '<div class="thumb"><i></i><img src="%s"></div><iframe width="420" height="240" src="https://www.youtube.com/embed/%s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        $image,
        $my_array_of_vars['v']
    );
}

function video_3()
{
    $url = get_theme_mod('video_3');
    parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);

    $image = 'https://img.youtube.com/vi/' . $my_array_of_vars['v'] . '/hqdefault.jpg';

    printf(
        '<div class="thumb"><i></i><img src="%s"></div><iframe width="420" height="240" src="https://www.youtube.com/embed/%s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        $image,
        $my_array_of_vars['v']
    );
}
