<?php

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auaha
 */

?>

<article class="container">
	<div class="row">
		<div class="col-md-6 pr-5 descriptionJob">
			<h3>Unimos criatividade com tecnologia, <br>
				para reposicionar sua empresa no digital.</h3>

			<p>
				A realidade digital é o que faz a sua empresa no presente.
				Juntos podemos mudar alcançar objetivos.
			</p>

			<ul class="jobsList">
				<li>
					<h2>e-commerce</h2>
					<?php get_jobs_1(); ?>
				</li>

				<li>
					<h2>estratégia digital</h2>
					<?php get_jobs_2(); ?>
				</li>

				<li>
					<a href="#" class="rmb-link rmb-link-primary mr-3">cases</a>
					<a class="rmb-btn rmb-btn-primary" href="#">vamos conversar</a>
				</li>
			</ul>
		</div>

		<div class="col-md-6 px-0 pl-md-5 containerTeam">
			<?php get_template_part('template-parts/content', 'team'); ?>
		</div>
	</div>
</article>