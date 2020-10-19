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

<footer>
    <div class="row d-flex flex-wrap">
        <div class="col-lg-2 col-sm-4 col-xs-12"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-rodape.png" /></a></div>

        <div class="social col-lg-2 col-sm-4 col-xs-12">
            <h3>Fique por dentro</h3>
            <nav>
                <a href="" class="facebook">Nupill Cosméticos</a>
                <a href="" class="instagram">@nupill_oficial</a>
                <a href="" class="youtube">Nupill Oficial</a>
            </nav>
        </div>

        <div class="download col-lg-3 col-sm-4 col-xs-12">
            <h3>Downloads</h3>
            <p><a href=""><span>Clique aqui</span> para baixar nossos materiais institucionais (logos, lâminas, fotos de produtos, banners, etc).</a></p>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <h3>SAC - Fale conosco</h3>
            <p><a href="tel:+551144868977" target="_blank"><span>Fixo</span> (11) 4486-8977</a></p>
            <p><a href="https://api.whatsapp.com/send?phone=5500999999999&text=Olá,%20escreva%20aqui" target="_blank"><span>Whatsapp</span> (00) 00000-0000</a></p>
            <p><a href="mailto:faleconosco@nupill.com.br" target="_blank"><span>E-mail</span> faleconosco@nupill.com.br</a></p>
        </div>
        <div class="copyright col-lg-2 col-sm-6 col-xs-12">
            <p>Copyright © 2020 <br />
                Nupill Cosméticos.</p>
        </div>
    </div>
</footer>
</div>
</section>
<?php wp_footer(); ?>
</body>

</html>