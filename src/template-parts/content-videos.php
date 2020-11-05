<article class="row">
    <!-- Slides -->
    <?php
    //Args
    $params = [
        'post_type' => 'video',
        'post_status' => 'publish',
        'posts_per_page' => 8,
    ];





    // The Query
    $the_query = new WP_Query($params);

    // The Loop
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();



            printf(
                '<div class="videos__item col-md-3 %s" data-id"%s">
                        <figure>%s<span class="video__show" data-id="%s" data-toggle="modal" data-target="#videoModal">%s</span></figure>
                        <a href="%s">Gostei %s</a>
                        <h5>@%s</h5>
                        <h4>%s</h4>
                    </div>',
                $args['class'],
                get_the_ID(),
                apply_filters('the_content', get_the_content()),
                get_the_ID(),
                get_svg_sprite('youtube'),
                get_permalink(),
                get_svg_sprite('core'),
                get_field("insta_author"),
                get_the_title()
            );
        }
    } else {
        echo 'nenhum video cadastrado';
    }
    /* Restore original Post Data */
    wp_reset_postdata(); ?>
</article>