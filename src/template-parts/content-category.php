<!-- middle -->
<section class="middle">

    <?php
    $terms = get_terms();

    $queried_object = get_queried_object();

    $image = get_field('imagem', $queried_object);
    $subititle = get_field('subititle', $queried_object);
    ?>

    <!-- bloco featured news -->
    <div class="featured-news">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-sm-6 col-xs-12 image">
                <?php echo wp_get_attachment_image($image, 'full'); ?>
            </div>

            <div class="col-lg-5 col-sm-5 col-xs-12 text">
                <h1><?php single_cat_title(); ?></h1>
                <h3><?php echo $subititle; ?></h3>
                <p><?php echo category_description(); ?></p>
            </div>
        </div>
    </div>
    <!-- /bloco featured news -->


    <!-- bloco news list -->
    <div class="news-list">
        <ul class="row categoryList__posts">
            <!-- loop -->
            <?php while (have_posts()) : the_post(); ?>

                <li class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="post__image">
                            <?php the_post_thumbnail(get_the_id(), 'post_category'); ?>
                        </figure>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </li>

            <?php endwhile; ?>

            <!-- /loop -->
        </ul>


        <?php

        /**
         * Count
         */
        //$cat_count = get_category();

        if ($queried_object->count > 5) :

        ?>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-sm-6 col-xs-10">
                    <a href="#" data-id="<?php echo $queried_object->term_taxonomy_id; ?>" data-page="1" data-quantity="12" class="btn btn-blue load-more-posts">Carregar mais postagens</a>
                </div>
            </div>
        <?php endif; ?>


    </div>
    <!-- /bloco news list -->


    <!-- bloco newsletter -->
    <div class="newsletter">
        <form name="newsletter" action="" method="GET">
            <div class="row d-flex align-items-center justify-content-start justify-content-sm-center">
                <div class="col-lg-3 col-sm-12 col-xs-12">
                    <h3>Quer ficar ligada nas
                        novidades da Nupill?</h3>
                    <p>Receba novidades, ofertas
                        e notícias no seu e-mail!</p>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <input type="submit" class="form-control btn btn-blue" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>
    <!-- /bloco newsletter -->


</section>
<!-- /middle -->