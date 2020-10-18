<?php

/**
 * Template part for displaying Cases
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auaha
 */

?>

<div class="container-fluid py-5 cases">
    <article class="container py-5">

        <header class="row mb-5">
            <div class="col-auto">
                <h2>Projetos</h2>
            </div>

            <div class="col text-right"><a href="#">Mais projetos <?php svg_sprite('arrow'); ?></a></div>
        </header>

        <!-- Titulo // -->

        <article class="row">
            <!-- Slides -->
            <?php
            //Args
            $args = [
                'post_type' => 'project',
                'post_status' => 'publish',
                'posts_per_page' => 6,
            ];

            // The Query
            $the_query = new WP_Query($args);

            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();

                    $image = get_field('imagem_project');


                    $size = 'project_thumb';

                    if ($image) {
                        echo wp_get_attachment_image($image->ID, $size);
                    }

                    echo '<div class="col-md-6 case_item mb-5">';

                    //Common
                    echo '<div class="case_item_content">';

                    echo '<figure>';

                    printf(
                        '<div class="case_image"><span>%s <a href="%s">Descubra %s</a></span> %s </div>',
                        get_the_content(),
                        get_field("link"),
                        get_svg_sprite('arrow'),
                        wp_get_attachment_image($image, $size)
                    );

                    the_post_thumbnail('project_thumb');

                    echo '</figure>';

                    echo '<footer class="row">';

                    printf('<div class="col-12 col-md-6"><small>%s</small>', get_the_tag_list('', ', ', ''));

                    printf(
                        '
                        <h3>%s</h3></div><div class="col-12 col-md-6 text-md-right"> <a href="%s">%s</a></div>',
                        get_the_title(),
                        get_permalink(),
                        get_svg_sprite('arrow')
                    );

                    echo '</footer>';

                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'nenhum case cadastrado';
            }
            /* Restore original Post Data */
            wp_reset_postdata(); ?>
        </article>
    </article>
</div>