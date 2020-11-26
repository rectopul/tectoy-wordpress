<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<script>
		$(document).ready(function() {

			$('.video').click(function() {
				if ($(this).hasClass('play')) {
					return false;
				} else {
					$(this).addClass('play');
				}
			});
		});
	</script>

</head>

<body <?php body_class(); ?>>

	<script>
		// 2. This code loads the IFrame Player API code asynchronously.
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// 3. This function creates an <iframe> (and YouTube player)
		//    after the API code downloads.
		var player;

		function onYouTubeIframeAPIReady() {
			player = new YT.Player('player', {
				videoId: 'd3Vrv72ZYpU',
				events: {
					'onReady': function(e) {

						e.target.mute();

						e.target.setPlaybackQuality('hd1080');

					},
					'onStateChange': function(e) {

						if (e && e.data === 1) {

							var videoHolder = document.getElementById('home-banner-box');

							if (videoHolder && videoHolder.id) {

								videoHolder.classList.remove('loading');

							}

						} else if (e && e.data === 0) {

							e.target.playVideo()

						}

					}
				},
				playerVars: {
					autoplay: 1,
					autohide: 1,
					disablekb: 1,
					controls: 0,
					showinfo: 0,
					modestbranding: 1,
					loop: 1,
					fs: 0,
					autohide: 0,
					rel: 0,
					enablejsapi: 1
				}
			});
		}

		// 4. The API will call this function when the video player is ready.
		function onPlayerReady(event) {
			event.target.playVideo();
		}

		// 5. The API calls this function when the player's state changes.
		//    The function indicates that when playing a video (state=1),
		//    the player should play for six seconds and then stop.
		var done = false;

		function onPlayerStateChange(event) {
			if (event.data == YT.PlayerState.PLAYING && !done) {
				setTimeout(stopVideo, 6000);
				done = true;
			}
		}

		function stopVideo() {
			player.stopVideo();
		}
	</script>

	<?php
	wp_body_open();
	?>

	<section class="content">

		<!-- header -->
		<header>
			<div class="container">

				<nav class="row navbar navbar-light navbar-expand-lg justify-content-lg-between">
					<button class="navbar-toggler col-xs-2 " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<?php
					if (function_exists('the_custom_logo') && has_custom_logo()) {
						$custom_logo_id = get_theme_mod('custom_logo');

						$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

						printf(
							'<a href="%s" class="navbar-brand"><img src="%s" alt="%s"></a>',
							get_bloginfo('url'),
							$logo[0],
							get_bloginfo('name')
						);
					} else {
						printf(
							'<a class="navbar-brand" href="%s">%s</a>',
							get_bloginfo('url'),
							get_bloginfo('name')
						);
					}
					?>

					<?php
					if (has_nav_menu('primary')) {

						wp_nav_menu(array(
							'theme_location' => 'primary',
							'depth' => 2,
							'container' => 'div',
							'container_class' => 'collapse navbar-collapse col-lg-11 col-xs-12 justify-content-end',
							'container_id' => 'navbarSupportedContent',
							'menu_class' => 'navbar-nav',
							'add_li_class' => 'nav-item'
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
				</nav>
			</div>
		</header>
		<!-- /header -->