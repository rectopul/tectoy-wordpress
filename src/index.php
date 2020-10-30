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

<div class="container-fluid bg-rose py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php home_title(); ?></h2>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <?php home_question(); ?>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <a href="" class="btn btn-purple" data-toggle="modal" data-target="#parentalModal">Não</a>
                <a href="<?php page_to_yes(); ?>" class="btn btn-rose ml-3">Sim</a>
            </div>

        </div>

    </div>
</div>

<?php get_footer(); ?>