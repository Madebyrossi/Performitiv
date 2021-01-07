<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="/wp-content/themes/custom/assets/images/favicon-transparent2.ico" type="image/x-icon">
	<link rel="icon" href="/wp-content/themes/custom/assets/images/favicon-transparent2.ico" type="image/x-icon">

	<?php wp_head(); ?>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-68384303-2', 'auto');
	ga('send', 'pageview');

	</script>
</head>


<body>
	<div id="wrapper">
		<header class="page">
			<div class="content row-fluid logo-bar clearfix">
				<section class="col-md-6">
					<div class="desktop-logo">
						<a href="http://madebyrossi.com/client/performitiv">
							<img src="/client/performitiv/wp-content/themes/custom/assets/images/logo-newer.jpg" class="page-logo" />
						</a>
					</div>
					<div class="mobile-logo">
						<a href="http://madebyrossi.com/client/performitiv">
							<img src="/client/performitiv/wp-content/themes/custom/assets/images/logo-newer.jpg" />
						</a>
					</div>
				</section>
				<section class="col-md-6 pull-right align-right social-icons">
					<?php dynamic_sidebar('headersocial'); ?>
				</section>
			</div>

			<div class="menu-links new-font">
				<div class="content row-fluid">
					<section class="col-sm-12">
						<ul id="menu" class="nav">
							<?php
								wp_nav_menu(array(
									'theme_location'  => 'left',
								    'items_wrap'      => '<ul id="%1$s" class="%2$s l-section">%3$s</ul>'
								));
							?>

							<?php
								wp_nav_menu(array(
									'theme_location'  => 'center',
								    'items_wrap'      => '<ul id="%1$s" class="%2$s m-section">%3$s</ul>'
								));
							?>

							<?php
								wp_nav_menu(array(
									'theme_location'  => 'right',
								    'items_wrap'      => '<ul id="%1$s" class="%2$s r-section">%3$s</ul>'
								));
							?>
							<div class="clearfix"></div>
						</ul>
					</section>
				</div>
			</div>
		</header>