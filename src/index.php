<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auaha
 */

get_header(); ?>

<!-- middle -->
<section class="middle">

  <!-- bloco Banner -->
  <div class="banner">
    <div class="videoContainer">
      <div id="player"></div>
      <!--
      <iframe width="1920" height="860" src="https://www.youtube.com/embed/d3Vrv72ZYpU?autoplay=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-xs-12 frases">
        <p><img src="images/banner1.png" alt="TEC TOY" class="banner-logo" /></p>
        <p><img src="images/banner2.png" alt="UMA NOVA FASE" class="banner-frase" /></p>
      </div>
    </div>
  </div>
  <!-- /bloco Banner -->

  <!-- bloco Produtos -->
  <div class="produtos">
    <ul class="row">
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <div class="d-flex justify-content-center flex-wrap text-center">
          <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/empresa.png" alt="Empresa 100% Brasileira" /></div>
          <p>EMPRESA 100% BRASILEIRA</p>
        </div>
      </li>
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <div class="d-flex justify-content-center flex-wrap text-center">
          <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/sunmi.png" alt="TECTOY SUNMI" /></div>
          <p>TECTOY SUNMI</p>
        </div>
      </li>
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <div class="d-flex justify-content-center flex-wrap text-center">
          <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/assistencia.png" alt="Assistência Técnica" /></div>
          <p>ASSISTÊNCIA TÉCNICA</p>
        </div>
      </li>
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <div class="d-flex justify-content-center flex-wrap text-center">
          <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/produtos.png" alt="Nossos Produtos" /></div>
          <p>NOSSOS PRODUTOS</p>
        </div>
      </li>
    </ul>
  </div>
  <!-- /bloco Produtos -->


  <!-- bloco Institucional - Sobre Nós -->
  <div class="institucional">
    <div class="row sobre d-flex justify-content-between">
      <div class="col-lg-6 col-sm-6 d-lg-flex flex-lg-column justify-content-lg-center col-xs-12 text">
        <h2>Sobre a Tectoy</h2>
        <p>Fundada em 1987, a Tectoy iniciou no Brasil uma nova era na fabricação de videogames e de brinquedos de alta tecnologia. Em pouco tempo ganhou o público e o mercado com a venda de milhões de jogos e videogames, sendo associada diretamente à tecnologia e entretenimento.</p>
        <a href="" class="button-orange">SAIBA MAIS</a>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 image text-right">
        <img src="<?php bloginfo('template_url'); ?>/images/sobre.png" alt="Sobre a Tectoy" />
      </div>
    </div>

    <ul class="row valores">
      <h1 class="col-lg-12 col-sm-12 col-xs-12 text-center">VALORES</h1>
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <img src="<?php bloginfo('template_url'); ?>/images/valores1.png" alt="Honestidade empresarial" />
        <p>Honestidade empresarial, cumprindo toda a legislação aplicável ao negócio.</p>
      </li>
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <img src="<?php bloginfo('template_url'); ?>/images/valores2.png" alt="Competência profissional" />
        <p>Competência profissional, aumentando a capacidade do nosso pessoal.</p>
      </li>
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <img src="<?php bloginfo('template_url'); ?>/images/valores3.png" alt="Participação dos colaboradores" />
        <p>Participação dos colaboradores, envolvimento de nosso pessoal na execução de suas atividades.</p>
      </li>
      <li class="col-lg-3 col-sm-3 col-xs-6">
        <img src="<?php bloginfo('template_url'); ?>/images/valores4.png" alt="Parceria e comprometimento" />
        <p>Parceria e comprometimento, adotando uma relação de clareza com nossos fornecedores e clientes.</p>
      </li>
    </ul>
  </div>
  <!-- /bloco Institucional - Sobre Nós -->


  <!-- bloco Conheça Também -->
  <div class="conheca">
    <ul class="row">
      <h1 class="col-lg-12 col-sm-12 col-xs-12 text-center">CONHEÇA TAMBÉM</h1>
      <li class="col-lg-6 col-sm-6 col-xs-12">
        <a href="">
          <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/conheca1.png" alt="TECTOY SUNMI" /></div>
          <h2>TECTOY SUNMI</h2>
        </a>
      </li>
      <li class="col-lg-6 col-sm-6 col-xs-12">
        <a href="">
          <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/conheca2.png" alt="Lojas Físicas" /></div>
          <h2>Lojas Físicas</h2>
        </a>
      </li>
    </ul>
  </div>
  <!-- /bloco Conheça Também  -->


  <!-- bloco Vídeos -->
  <div class="videos">
    <ul class="row text-center">
      <h1 class="col-lg-12 col-sm-12 col-xs-12 text-center">Vídeos</h1>
      <li class="col-lg-4 col-sm-4 col-xs-12">
        <div class="video">
          <div class="thumb">
            <img src="<?php bloginfo('template_url'); ?>/images/video1.png" />
          </div>
          <iframe width="420" height="240" src="https://www.youtube.com/embed/d3Vrv72ZYpU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>Uma nova Frase</p>
      </li>
      <li class="col-lg-4 col-sm-4 col-xs-12">
        <div class="video">
          <div class="thumb">
            <img src="<?php bloginfo('template_url'); ?>/images/video2.png" />
          </div>
          <iframe width="420" height="240" src="https://www.youtube.com/embed/d3Vrv72ZYpU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>Lançamento do Celular da Tectoy</p>
      </li>
      <li class="col-lg-4 col-sm-4 col-xs-12">
        <div class="video play">
          <div class="thumb">
            <img src="<?php bloginfo('template_url'); ?>/images/video3.png" />
          </div>
          <iframe width="420" height="240" src="https://www.youtube.com/embed/d3Vrv72ZYpU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>The Sound is On</p>
      </li>
    </ul>
  </div>

  <!-- /bloco Vídeos -->

</section>
<!-- /middle -->

<?php get_footer(); ?>