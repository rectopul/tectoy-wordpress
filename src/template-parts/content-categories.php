<?php

// Taxonomy Loop

/** 
 *  Get the Custom Taxonomy
 *  For a list of other parameters to pass in see link below
 *  @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
 *  For a list of get_term return values see link below
 *  @link https://codex.wordpress.org/Function_Reference/get_term
 * 
 */
$terms = get_terms(array(
    'taxonomy'   => 'product_category', // Swap in your custom taxonomy name
    'hide_empty' => false,
));

// Loop through all terms with a foreach loop
foreach ($terms as $term) {
    // Use get_term_link to get terms permalink
    // USe $term->name to return term name
    $image = get_field('image', $term);

    printf(
        '<div class="categories__item swiper-slide"><a href="%s"><span>%s</span><figure>%s</figure></a></div>',
        get_term_link($term),
        $term->name,
        wp_get_attachment_image($image['ID'], 'full')
    );
}
