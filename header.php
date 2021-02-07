<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<?php wp_head(); ?>

	<script>
		$(document).ready(function () {
			$("#site-navigation").on("click", "a", function (event) {
				event.preventDefault();
				var id = $(this).attr('href'),
					top = $(id).offset().top - 100;
				$('body,html').animate({
					scrollTop: top
				}, 1500);
			});
		});

		function toTop() {
			// When the user clicks on the button, scroll to the top of the document

			document.body.scrollTop = 0; // For Safari
			document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}

		/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
		function responsiveNavigation() {
			var nav = document.getElementById("site-navigation");
			if (nav.className === "main-navigation") {
				nav.className += " responsive";
			} else {
				nav.className = "main-navigation";
			}
		}

		function changeTopNav() {
			var nav = document.getElementById("site-navigation");
			var header = document.getElementById("masthead");

			if (header.style.height === "40px") {
				if (nav.className === "main-navigation responsive") {
					nav.style.top = "40px";
				}
			} else {
				if (nav.className === "main-navigation responsive") {
					nav.style.top = "72px";
				}
			}
		}

		/*$(document).ready(function () {
			$('a[href*=#]').bind('click', function (e) {
				e.preventDefault(); // prevent hard jump, the default behavior

				var target = $(this).attr("href"); // Set the target as variable

				// perform animated scrolling by getting top-position of target-element and set it as scroll target
				$('html, body').stop().animate({
					scrollTop: $(target).offset().top
				}, 600, function () {
					location.hash = target; //attach the hash (#jumptarget) to the pageurl
				});

				return false;
			});
		});*/

		$(window).scroll(function () {
			var scrollDistance = $(window).scrollTop() - 100;

			// Show/hide menu on scroll
			//if (scrollDistance >= 850) {
			//		$('nav').fadeIn("fast");
			//} else {
			//		$('nav').fadeOut("fast");
			//}

			// Assign active class to nav links while scolling
			$('.page-section').each(function (i) {
				if ($(this).position().top <= scrollDistance) {
					$('.main-navigation ul li.current-menu-item').removeClass('current-menu-item');
					$('.main-navigation ul li').eq(i).addClass('current-menu-item');
				}
			});
		}).scroll();
	</script>
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

		<a href="javascript:void(0);" class="icon" onclick="responsiveNavigation(); changeTopNav()">
			<svg class="main-navigation-icon">
				<use xlink:href="#menu"></use>
			</svg>
		</a>


		<!-- #site-navigation -->
	</header><!-- #masthead -->


	<?php get_template_part( get_template_directory_uri(), '/assets/dist/svg/sprite-default.svg' ); ?>