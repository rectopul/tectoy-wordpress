<article class="fullBanner">

    <div class="swiper-container fullBanner__swiper">
        <div class="swiper-wrapper">
            <?php
            //Args
            $args = [
                'post_type' => 'banner',
                'post_status' => 'publish',
                'posts_per_page' => 6,
            ];

            // The Query
            $the_query = new WP_Query($args);

            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();

                    printf(
                        '<div class="fullBanner__item swiper-slide"><span>%s</span><figure>%s</figure></div>',
                        get_the_content(),
                        get_the_post_thumbnail()
                    );
                }
            } else {
                echo 'nenhum case cadastrado';
            }
            /* Restore original Post Data */
            wp_reset_postdata(); ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- Slides -->

</article>