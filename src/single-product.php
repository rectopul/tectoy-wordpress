<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auaha
 */

get_header(); ?>


<!-- resumo do produto -->
<div class="container single-product">
    <div class="row">
        <!-- image -->
        <div class="col-md-6">
            <figure>
                <?php the_post_thumbnail(get_the_id(), 'product_large'); ?>
            </figure>
        </div>

        <!-- name and description -->
        <div class="col-md-6">
            <h2 class="single-product__name"><?php the_title(); ?></h2>

            <?php
            $terms = get_the_terms(get_the_id(), 'product_category');

            foreach ($terms as $term) {
                printf(
                    '<h4 class="single-product__subtitle">%s%s</h4>',
                    $term->name,
                    count($terms) > 1 ? ', ' : ''
                );
            }
            ?>

            <article class="my-5 single-product__description"><?php the_excerpt(); ?></article>

            <a href="#description" class="read-more">Continuar lendo <?php echo svg_sprite('arrow'); ?></a>

            <div class="row my-5">
                <div class="col-md-6">
                    <a href="#link" class="btn btn-primary">Comprar na loja online</a>
                </div>

                <!-- adThis -->
                <div class="col-md-6 text-md-right mt-5 mt-md-0">
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7be7338d034bce"></script>

                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_vhot"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- atributos do produto -->
<div class="container single-product__attributes my-5">
    <div class="row">
        <?php

        // Check value exists.
        if (have_rows('attributes')) :

            // Loop through rows.
            while (have_rows('attributes')) : the_row();


                $title = get_sub_field('titulo');
                $description = get_sub_field('descricao');
                $icon = get_sub_field('icone');

                printf(
                    '<div class="col-md-4 single-product__attributes--item">
                        <figure><img src="%s" alt="%s"></figure>
                        <article>
                            <h4>%s</h4>
                            <p>%s</p>
                        </article>
                    </div>',
                    $icon['sizes']['thumbnail'],
                    $icon['alt'],
                    $title,
                    $description
                );

            // End loop.
            endwhile;

        // No value.
        else :
        // Do something...
        endif;
        ?>
    </div>
</div>

<!-- Descrição -->
<div class="container single-product__content" id="description">
    <div class="row">
        <div class="col-md-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>