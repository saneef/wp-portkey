<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- build:css css/main.min.css -->
	<link rel="stylesheet" href="<?php printf(get_template_directory_uri()); ?>/bower_components/normalize.css/normalize.css">
	<link rel="stylesheet" href="<?php printf(get_template_directory_uri()); ?>/css/main.css">
	<!-- endbuild -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header row">
		<h1 class="site-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-header__description"><?php bloginfo( 'description' ); ?></h2>
	</header>
