<!-- Slides -->
<?php
//Args
$params = [
    'post_type' => 'presentation',
    'post_status' => 'publish',
    'posts_per_page' => 4,
];





// The Query
$the_query = new WP_Query($params);

// The Loop
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();


        printf(
            '<li class="col-lg-3 col-sm-3 col-xs-6"> %s <p>%s</p> </li>',
            get_the_post_thumbnail(get_the_ID(), 'post_image'),
            get_the_content()
        );
    }
} else {
    echo 'nenhum case cadastrado';
}
/* Restore original Post Data */
wp_reset_postdata(); ?>