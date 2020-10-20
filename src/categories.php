<?php

/**
 * Template Name: Categorias de produto
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-auto template-categories__title">
            <h2><?php the_title(); ?></h2>
            <h4>Nosso catálogo completo.</h4>
        </div>

        <div class="col-md template-categories__description">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<!--  Loop de categorias -->
<div class="container my-5">
    <div class="row">
        <!-- Loop -->
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'product_category',
            'hide_empty' => false,
        ));

        foreach ($terms as $term) {
            # code...
            $image = get_field('image', $term);

            printf(
                '<div class="categories__item col-6 col-md-3 my-3"><a href="%s"><span>%s</span><figure>%s</figure></a></div>',
                get_term_link($term),
                $term->name,
                wp_get_attachment_image($image['ID'], 'full')
            );
        }
        ?>
    </div>
</div>


<?php get_footer(); ?>