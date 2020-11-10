<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<footer class="container-fluid template-footer py-5">
    <div class="container">
        <div class="col-12">© 2020 Volker International. All rights reserved. </div>
    </div>
</footer>

</div>
</section>

<!-- Modal cadastro e login -->
<?php if (is_page_template('page-home.php')) : ?>
    <!-- Modal modal register -->
    <div class="modal fade modal-register" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-4 py-5">
                <div class="modal-header">
                    <header class="modal-login__title">
                        <h2>Cadastre-se</h2>
                        <h3>para votar.</h3>
                    </header>
                </div>

                <div class="modal-body">
                    <!-- Login -->
                    <div class="row">
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary btn-login" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Já é cadastrado? Faça Login</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <form class="modal-register__form">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="mail" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Whatsapp">
                                </div>
                                <button type="submit" class="btn btn-primary">OK! Pronto.</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Parental -->
    <div class="modal fade parental" id="parentalModal" tabindex="-1" aria-labelledby="parentalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Você tem <br>
                        mais de 18 anos?</h2>
                </div>

                <div class="modal-body">
                    <div class="row my-3">
                        <div class="col-12">
                            <button class="btn btn-rose-clean" data-dismiss="modal">Sim</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-purple">Não</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade modal-login" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-4 py-5">
                <div class="modal-header">
                    <header class="modal-login__title">
                        <h2>Faça Login</h2>
                        <h3>para votar.</h3>
                    </header>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-12">
                            <?php
                            if (class_exists('FB_Login')) {
                                printf(
                                    '<a href="%s" title="%s" class="btn-facebook-login">%s %s</a>',
                                    FB_Login::get_login_url(),
                                    FB_Login::get_login_url(),
                                    get_svg_sprite('facebook'),
                                    'Entrar com Facebook'
                                );
                            } ?>
                            <form class="modal-login__form">
                                <div class="form-group">
                                    <input type="mail" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Whatsapp">
                                </div>
                                <button type="submit" class="btn btn-primary">OK! Pronto.</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (is_page_template('page-videos.php') or is_post_type_archive('video')) : ?>
    <div class="modal fade modal-video" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-md-auto">
                        <button type="submit" class="btn btn-rose btn-vote">Gostei <?php svg_sprite('core'); ?></button>
                    </div>

                    <div class="col-md video__modal--title">
                        <h2 class="video__modal--insta"></h2>
                        <h2 class="video__modal--name"></h2>
                    </div>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-12 video__iframe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>




<script id="__bs_script__">
    //<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.12'><\/script>".replace("HOST", location.hostname));
    //]]>
</script>
<?php wp_footer(); ?>
</body>

</html>