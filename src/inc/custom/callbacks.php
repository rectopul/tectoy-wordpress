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
