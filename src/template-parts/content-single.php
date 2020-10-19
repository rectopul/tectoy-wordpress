<!-- middle -->
<section class="middle">

    <!-- bloco news -->
    <div class="news-internal">
        <div class="row">

            <div class="col-lg-4 col-sm-4 col-xs-12 image">
                <?php the_post_thumbnail(get_the_id(), 'single_thumbnail'); ?>
                <p class="font">Foto: Banco de Imagens.</p>
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-12 text">
                <h1><?php the_title(); ?></h1>
                <h3><?php the_excerpt(); ?></h3>
                <div class="description">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
        <!-- /bloco news -->


</section>
<!-- /middle -->