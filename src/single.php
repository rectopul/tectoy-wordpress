<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auaha
 */

get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
    <div class="container-fluid">
        <!-- Content //-->
        <div class="row single-content-background">
            <div class="container">
                <div class="row">
                    <!-- Tags // -->
                    <div class="col-md-6 single-tagList">
                        <h5>O-que-fizemos</h5>

                        <p class="single-tagList paragraph">
                            <?php echo get_the_tag_list(); ?>
                        </p>
                    </div>

                    <!-- Content // -->
                    <div class="col-md-6 py-6 pl-4">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Images //-->
        <div class="row">
            <div class="container my-5">
                <div class="row">
                    <!-- Image 1 // -->
                    <div class="col-md-6 text-right single-thumbnail-paper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-paper.jpg" alt="paper auaha">
                    </div>

                    <!-- Image 2 // -->
                    <div class="col-md-6 single-thumbnail-2 p-4">

                        <?php $image = get_field('preview_do_site');


                        if ($image) {
                            echo wp_get_attachment_image($image, 'project_preview');
                        } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Régua //-->
        <div class="row single-ruler py-4 mb-2">
            <div class="container">
                <div class="row">
                    <!-- Conversão taxa_de_conversao // -->
                    <div class="col-md-4 text-center">
                        <h2>+ <?php echo get_field('taxa_de_conversao'); ?></h2>
                        <p>de conversão</p>
                    </div>

                    <!-- Carregamento   carregamento // -->
                    <div class="col-md-4 text-center">
                        <h2>- <?php echo get_field('carregamento'); ?>'</h2>
                        <p>segundo de carregamento</p>
                    </div>

                    <!-- Ticket ticket_medio  // -->
                    <div class="col-md-4 text-center">
                        <h2>+ R$ <?php echo get_field('ticket_medio'); ?></h2>
                        <p>de ticket médio</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Imagens //-->
        <div class="row">
            <div class="container my-5">
                <div class="row">
                    <!-- Image 2 // -->
                    <div class="col-md-6 single-thumbnail-2 p-4">

                        <?php $image = get_field('preview_do_site');


                        if ($image) {
                            echo wp_get_attachment_image($image, 'project_preview');
                        } ?>
                    </div>

                    <!-- Image 1 // -->
                    <div class="col-md-6 single-thumbnail-paper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-image.jpg" alt="paper auaha">
                    </div>
                </div>
            </div>
        </div>

        <!-- Depoimento //-->
        <div class="row single-depoimento">
            <div class="col-12 text-center">
                <p class="text-center"><?php echo get_field('depoimento'); ?></p>
                <h3 class="text-center"><?php echo get_field('depoiment_author'); ?></h3>
                <h5 class="text-center"><?php echo get_field('author_cargo'); ?></h5>
            </div>
        </div>

        <div class="row single-more">
            <div class="col-12 text-center my-5">
                <a href="#">mais projetos <?php echo get_svg_sprite('arrow'); ?></a>
            </div>
        </div>

    </div>
<?php endif; ?>
<?php get_template_part('template-parts/content', 'saudation'); ?>

<?php get_footer(); ?>