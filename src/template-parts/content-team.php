<!-- Slider main container -->
<div class="row">
    <div class="col-6 pl-5 pl-md-3">
        <h6>Equipe</h6>
    </div>
    <div class="col-6 pr-5 pr-md-3">seja um guerreiro</div>
</div>

<div class="swiper-container swiperTeam">
    <!-- Additional required wrapper -->
    <!-- Slides -->
    <?php
    //Args
    $args = [
        'post_type' => 'equipe',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ];

    // The Query
    $the_query = new WP_Query($args);

    // The Loop
    if ($the_query->have_posts()) {
        echo '<div class="swiper-wrapper">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            echo '<div class="swiper-slide">';
            the_post_thumbnail('team_thumb');
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo 'nenhum membro da equipe';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>

<div class="row">
    <div class="swiper-arrow">
        <!-- If we need navigation buttons -->
        <div class="team-button-prev">
            <?php svg_sprite('arrow'); ?>
        </div>

        <div class="team-button-next">
            <?php svg_sprite('arrow'); ?>
        </div>
    </div>
</div>