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
  <div class="row footer-menu">
    <div class="col-lg-9 col-sm-12 col-xs-12 text-center">
      <ul class="d-flex d-flex justify-content-between flex-wrap">
        <li><a href="#">Atendimento</a></li>
        <li><a href="#">Dúvidas Frequentes</a></li>
        <li><a href="#">Política de Privadade</a></li>
        <li><a href="#">Pagamentos</a></li>
        <li><a href="#">Trocas e Devoluções</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
    <nav class="col-lg-3 col-sm-12 col-xs-12 text-center socials">
      <a href="#" class="facebook"></a>
      <a href="#" class="instagram"></a>
      <a href="#" class="linkedin"></a>
      <a href="#" class="twitter"></a>
      <a href="#" class="youtube"></a>
      <a href="#" class="rss"></a>
    </nav>
  </div>
  <div class="row copyright">
    <div class="col-lg-2 col-sm-4 col-xs-12"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-rodape.png" /></a></div>

    <div class=" col-lg-8 col-sm-6 col-xs-12 text-center">
      <p>Tec Toy S.A CNPJ: 22.770.366/0008-59, Rua Fernando de Albuquerque, 155 - 6o. Andar CEP: 01309-030 - São Paulo - SP Telefone: (11) 3018-8080 <br />
        A logomarca Tectoy é marca registrada da Tec Toy S.A. Todos os direitos reservados.<br />
        CNPJ: 22.770.366/0008-59</p>
    </div>


  </div>
</footer>

</section><!-- /content -->
<script id="__bs_script__">
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.12'><\/script>".replace("HOST", location.hostname));
  //]]>
</script>


<?php wp_footer(); ?>
</body>

</html>