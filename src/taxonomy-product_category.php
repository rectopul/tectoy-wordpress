<?php

/**
 * The template for taxonomy products category
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

get_header();
$term = get_queried_object();

?>

<!-- Imagem of category -->
<div class="container taxonomy">
    <div class="row">
        <div class="col-md-6 pr-md-5 taxonomy__image">
            <figure>
                <?php

                // get the current taxonomy term

                // vars
                $image = get_field('image', $term);

                echo wp_get_attachment_image($image['ID'], 'categories');
                ?>
            </figure>
        </div>

        <div class="col-md-6 taxonomy__title">
            <h2><?php echo $term->name; ?></h2>

            <h4><?php echo get_field('subtitle', $term); ?></h4>

            <p><?php echo $term->description; ?></p>
        </div>
    </div>
</div>

<!-- Lista de produtos -->
<div class="container taxonomy__products">
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-6 col-md-3 my-5 taxonomy__item">
                <figure><?php the_post_thumbnail(); ?></figure>
                <?php the_title('<h3>', '</h3>'); ?>
                <a href="<?php the_permalink(); ?>">Saiba mais +</a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<!-- Load more -->
<div class="container text-center my-5">
    <button class="load-more"> Carregar mais produtos </button>
</div>

<?php get_footer(); ?>