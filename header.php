<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', 1, 'right'); ?> » <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="<?php bloginfo('wpurl'); ?>/feed/">

	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div id="header"></div><!-- header -->
