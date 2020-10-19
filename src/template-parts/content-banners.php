<div class="swiper-wrapper">
    <?php
    //Args
    $args = [
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'meta_query' => array(
            array(
                'key' => 'pseudosticky',
                'value' => "on",
                'compare' => '='
            )
            //more meta conditions can be added here as arrays
        ),
    ];

    // The Query
    $the_query = new WP_Query($args);

    // The Loop
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();

            printf(
                '<div class="categories-banner__item swiper-slide">
                    <span>
                        <figure>%s</figure>

                        <article>
                        <h1>Lançamento</h1>
                        <h2>%s</h2>
                        <a class="btn-banner" href="%s">Ver produto</a>
                        </article>
                    </span>
                </div>',
                get_the_post_thumbnail(get_the_id(), 'product_small'),
                get_the_title(),
                get_permalink()

            );
        }
    } else {
        echo 'nenhum produto destacado';
    }
    /* Restore original Post Data */
    wp_reset_postdata(); ?>
</div>
<!-- Add Pagination -->
<div class="swiper-pagination"></div>

<!-- Add Arrows -->
<div class="swiper-button-next arrow_theme">
    <?php echo svg_sprite('arrow'); ?>
</div>

<div class="swiper-button-prev arrow_theme">
    <?php echo svg_sprite('arrow'); ?>
</div>