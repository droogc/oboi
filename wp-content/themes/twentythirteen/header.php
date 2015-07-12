<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quadradecor</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="/assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/assets/plugins/animate/animate.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/assets/css/theme.css" rel="stylesheet">

    <!-- Head Libs -->
    <script src="/assets/plugins/modernizr.custom.js"></script>

	<!-- JS Global -->
	<script src="/assets/js/csi.js"></script>
	<script src="/assets/plugins/jquery/jquery-1.11.1.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
	<script src="/assets/plugins/superfish/js/superfish.min.js"></script>
	<script src="/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
	<script src="/assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
	<script src="/assets/plugins/jquery.sticky.min.js"></script>
	<script src="/assets/plugins/jquery.easing.min.js"></script>
	<script src="/assets/plugins/jquery.smoothscroll.min.js"></script>
	<script src="/assets/plugins/smooth-scrollbar.min.js"></script>
	<!-- JS Page Level -->
	<script src="/assets/js/theme.js"></script>
	<!--[if (gte IE 9)|!(IE)]><!-->
	<script src="/assets/plugins/jquery.cookie.js"></script>
	<script src="/assets/js/theme-config.js"></script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>

<body id="home" class="wide">
	<div class="wrapper">
		<header class="header fixed">
		    <div class="header-wrapper">
			<div class="container">

			    <!-- Logo -->
			    <div class="logo">
				<a href="index.html"><img src="http://quadradecor.ru/images/logo.jpg" alt=""/></a>
			    </div>
			    <!-- /Logo -->

			    <!-- Header search -->
			    <div class="header-search">
				<input class="form-control" type="text" placeholder="Поиск"/>
				<button><i class="fa fa-search"></i></button>
			    </div>
			    <!-- /Header search -->
			</div>
		    </div>
		    <div class="navigation-wrapper">
			<div class="container">
			    <!-- Navigation -->
			    <nav class="navigation closed clearfix">
				<a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
				<ul class="nav sf-menu">
				    <li class="sale"><a href="#">Главная</a></li>
				    <li><a href="category.html">Каталог</a></li>
				    <li><a href="blog.html">Новости</a></li>
				    <li><a href="portfolio.html">Portfolio</a></li>
				    <li><a href="category.html">Скидки</a></li>
				    <li><a href="contact.html">Контакты</a></li>
				</ul>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			    </nav>
			    <!-- /Navigation -->
			</div>
		    </div>
		</header>
		<div id="main" class="site-main">
