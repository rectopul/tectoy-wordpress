<?php

/**
 * Template Name: Página principal
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<div class="container-fluid bg-rose py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex-column-center">
                <h6 class="mb-3"><?php the_excerpt(); ?></h6>
                <h2 class="page-home__title"><?php the_title(); ?></h2>

                <article class="my-3"><?php the_content(); ?></article>

                <footer class="mt-5">
                    <a href="" class="btn btn-rose" data-toggle="modal" data-target="#loginModal">Votar agora</a>
                </footer>
            </div>

            <div class="col-md-5 text-left text-md-right mt-5 mt-md-0">
                <?php the_post_thumbnail('page-thumbnail', ['class' => 'thumbnail-page']); ?>
            </div>
        </div>
    </div>

</div>


<?php get_footer(); ?>