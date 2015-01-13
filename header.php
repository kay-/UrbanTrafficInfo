<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/js/footerFixed.js"></script>
</head>
<body>

<div id="wrapper">
	<header>
		<a href="http://urbantraffic.info/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo" class="logo"></a>
		<ul class="menu-list">
			<li class="menu-item nav-about"><a href="http://urbantraffic.info/about">About</a></li>
			<li class="menu-item nav-case"><a href="http://urbantraffic.info/case">Case Study</a></li>
			<li class="menu-item nav-blog"><a href="https://medium.com/@UrbanTraffic" target="_blank">Blog</a></li>
			<li class="menu-item nav-contact"><a href="http://urbantraffic.info/contact">Contact</a></li>
		</ul>
	<?php wp_head(); ?>
	</header>