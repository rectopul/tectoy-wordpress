<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auaha
 */

get_header(); ?>

<div class="container">

    <?php if (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

    <?php endif; ?>
</div>


<?php get_footer(); ?>