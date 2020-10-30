<?php

/**
 * Template Name: Vídeos
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container-fluid bg-rose py-5">

    <div class="container">
        <div class="row">
            <!-- Title -->
            <div class="col-md-6">
                <?php the_title('<h2>', '</h2>'); ?>
            </div>
        </div>

        <!-- loop -->

        <div class="row mt-5 video__list">
            <!-- loop -->
            <?php while (have_posts()) : the_post(); ?>

                <li class="col-md-3 my-5">
                    <figure class="post__image">
                        <?php the_content(); ?>
                    </figure>
                    <button class="like-video btn btn-small btn-rose my-2">Gostei</button>
                    <h3><?php the_excerpt(); ?></h3>
                    <h4><?php the_title(); ?></h4>
                </li>

            <?php endwhile; ?>

            <!-- /loop -->
        </div>
    </div>
</div>

<?php get_footer(); ?>