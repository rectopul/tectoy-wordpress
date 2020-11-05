<?php

/**
 * Template Name: Vídeos
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container-fluid bg-rose">

    <div class="container">
        <div class="row">
            <!-- Title -->
            <div class="col-md-auto">
                <?php the_content(); ?>
            </div>


            <!-- filter -->
            <div class="col-md text-right">

            </div>
        </div>

        <!-- loop -->
        <?php get_template_part('template-parts/content', 'videos'); ?>
    </div>
</div>

<?php get_footer(); ?>