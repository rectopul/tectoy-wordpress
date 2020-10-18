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

<section class="categories container my-md-5" data-slider="true">
    <!-- Titlulo -->
    <header>
        <h2>Produtos Nupill</h2>
        <h4>Vá direto para onde você quer chegar.</h4>
    </header>

    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php get_template_part('template-parts/content', 'categories'); ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section>

<!-- Sobre a empresa -->
<div class="container content-about py-5">
    <div class="row">
        <div class="col-md-5 content-about__text">
            <h2>História da Empresa</h2>
            <h4>Da fundação à evolução no mercado.</h4>
            <article class="mt-md-5"><?php get_header_message(); ?></article>
        </div>

        <div class="col-md content-about__image pl-md-5">
            <figure>
                <?php about_image(); ?>
            </figure>
        </div>
    </div>

</div>

<!-- Sede da empresa -->
<div class="thirst container py-5">
    <div class="row">

        <div class="col-md thirst__image pr-md-5">
            <figure>
                <?php company_location_image(); ?>
            </figure>
        </div>

        <div class="col-md-5 thirst__text ">
            <h4>Nossa Sede</h4>
            <article class="mt-md-5"><?php company_location(); ?></article>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/content', 'description'); ?>
<?php get_template_part('template-parts/content', 'cases'); ?>
<?php get_template_part('template-parts/content', 'partners'); ?>
<?php get_template_part('template-parts/content', 'saudation'); ?>


<?php get_footer(); ?>