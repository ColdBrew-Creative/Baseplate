<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
		<?php is_front_page() ? bloginfo( 'description') : wp_title( ''); ?> | EDIT ME (header.php)
	</title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/img/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"><![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/img/win8-tile-icon.png">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="stylesheet" type="text/stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>

</head>


<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">


	<div class="row" id="top-thinggy" itemscope itemtype="http://schema.org/WPHeader">
		<div class="small-12 columns">
			<div id="icon">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/img/icon.png"></a>
			</div>
			<div id="menu" class="noselect">
				<div class="button">
					<i class="fa fa-bars"></i> MENU
				</div>
				<?php wp_nav_menu(array(
					'container' => false,
					'menu' => __( 'The Main Menu', 'bonestheme' ),
					'menu_class' => '',
					'theme_location' => 'main-nav',
					'depth' => 1
				)); ?>
			</div>
		</div>
	</div>