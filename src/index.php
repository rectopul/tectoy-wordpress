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
			<li class="col-lg-3 col-sm-3 col-xs-6"> <?php ruler_item_1(); ?> </li>
			<li class="col-lg-3 col-sm-3 col-xs-6"> <?php ruler_item_2(); ?> </li>
			<li class="col-lg-3 col-sm-3 col-xs-6"> <?php ruler_item_3(); ?> </li>
			<li class="col-lg-3 col-sm-3 col-xs-6"> <?php ruler_item_4(); ?> </li>
		</ul>
	</div>
	<!-- /bloco Produtos -->


	<!-- bloco Institucional - Sobre Nós -->
	<div class="institucional">
		<div class="row sobre d-flex justify-content-between">
			<div class="col-lg-6 col-sm-6 pr-md-0 d-lg-flex flex-lg-column justify-content-lg-center col-xs-12 text">
				<h2>Sobre a Tectoy</h2>
				<p><?php about_company(); ?></p>
				<a href="<?php companyLink(); ?>" class="button-orange">SAIBA MAIS</a>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12 image text-right">
				<?php company_image(); ?>
			</div>
		</div>

		<ul class="row valores">
			<h1 class="col-lg-12 col-sm-12 col-xs-12 text-center">VALORES</h1>
			<?php get_template_part('template-parts/content', 'posts'); ?>
		</ul>
	</div>
	<!-- /bloco Institucional - Sobre Nós -->


	<!-- bloco Conheça Também -->
	<div class="conheca">
		<ul class="row">
			<h1 class="col-lg-12 col-sm-12 col-xs-12 text-center">CONHEÇA TAMBÉM</h1>
			<li class="col-lg-6 col-sm-6 col-xs-12">
				<a href="">
					<div class="image"><?php min_banner_1(); ?></div>
					<h2>TECTOY SUNMI</h2>
				</a>
			</li>
			<li class="col-lg-6 col-sm-6 col-xs-12">
				<a href="">
					<div class="image"><?php min_banner_2(); ?></div>
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
					<?php video_1(); ?>
				</div>
				<p>Uma nova Frase</p>
			</li>
			<li class="col-lg-4 col-sm-4 col-xs-12">
				<div class="video">
					<?php video_2(); ?>
				</div>
				<p>Lançamento do Celular da Tectoy</p>
			</li>
			<li class="col-lg-4 col-sm-4 col-xs-12">
				<div class="video">
					<?php video_3(); ?>
				</div>
				<p>The Sound is On</p>
			</li>
		</ul>
	</div>

	<!-- /bloco Vídeos -->

</section>
<!-- /middle -->

<?php get_footer(); ?>