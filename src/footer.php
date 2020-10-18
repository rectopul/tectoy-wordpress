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

<footer class="footer container-fluid">
    <div class="row">
        <div class="col-md-6 chat"></div>

        <div class="col-md-6 contact">
            <h2>+55 14 3434-1290</h2>
            <small>
                <a href="mailto:contato@auaha.com.br">contato@auaha.com.br</a> <br>
                R. Presidente Vargas, 308 Centro - Marília/SP
            </small>
            <div class="blog">
                <h2>blog</h2>

                <?php
                if (has_nav_menu('footer')) {

                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'depth' => 2,
                    ));
                } elseif (!has_nav_menu('expanded')) {

                    wp_list_pages(
                        array(
                            'match_menu_classes' => true,
                            'show_sub_menu_icons' => true,
                            'title_li' => false,
                        )
                    );
                }
                ?>
            </div>

            <div class="copyright">© 2020 Auaha - Bem vindo a nova era digital</div>
        </div>

    </div>
</footer>
</div>
</section>
<?php wp_footer(); ?>
</body>

</html>