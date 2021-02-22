<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<meta name="description"
		content="Предоставляем услуги по аренде экскаваторов в Вологде. Машинисты профессионалы, сделают работу на самом высоком уровне. Выгодная цена. Звоните: +7 (921) 530-61-77">
	<meta name="keywords" content="экскаватор, экскаваторы, гусеничные экскаваторы, аренда, вологда">
	<meta name="yandex-verification" content="2e0d13f3b7d25f66" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--JQuery Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!--JivoChat Script -->
	<script src="//code-ya.jivosite.com/widget/VsB1kc3xIj" async></script>

	<!--Leaflet Script and Style - Map -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""></script>
	<!--Mask for phone's input Script -->
	<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (m, e, t, r, i, k, a) {
			m[i] = m[i] || function () {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k,
				a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(72667324, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true,
			webvisor: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/72667324" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<h1 class="site-title">
				<a id="logo" class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					Excavator<span class="logo-prefix">35</span>
				</a>
			</h1>
		</div><!-- .site-branding -->

		<? wp_nav_menu(array(
					'menu' 			=> 	'main', 
					'container' 	=> 	'nav',
					'container_id' 	=> 	'site-navigation',
					'container_class' => 'main-navigation',
					'items_wrap' 	=> 	'<ul>%3$s</ul>'
				)); ?>

		<a id="linkToggleMenu" href="javascript://0" class="icon">
			<svg class="main-navigation-icon">
				<use xlink:href="#menu"></use>
			</svg>
		</a>


		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php get_template_part( get_template_directory_uri(), '/assets/dist/svg/sprite-default.svg' ); ?>