<!doctype HTML>
<!--[if IE 7]>    <html class="ie7 ie-lt-8 ie-lt-9 ie-lt-10" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie-lt-9 ie-lt-10" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 ie-lt-10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>	
	<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	echo ", $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( 'Page %s', max( $paged, $page ) );
	?></title>
		
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="author" content="Pablo Cazorla" />
	<meta name="contact" content="contact@pcazorla.com" />
	<meta name="copyright" content="Designed by Pablo Cazorla under licence Creative Commons - <?php echo date('Y'); ?>." />
	
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700|Open+Sans' rel='stylesheet' type='text/css'>
	
	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_url'); ?>/js/html5-3.4-respond-1.1.0.min.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>	
</head>
<body>
	<noscript>
		<link href="<?php bloginfo('template_url'); ?>/css/noscript.css" rel="stylesheet" type="text/css" />
		<div class="noscript">Please, activate Javascript in your browser to enjoy this site</div>
	</noscript>
	<script>
		var server = '<?php echo $_SERVER[HTTP_HOST]; ?>',
			templateURL = '<?php bloginfo('template_url'); ?>';
	</script>
	
	
	<?php if ( is_home() ) {?>
	<?php }?>
	
	
	
	


	<header class="main">
		<div class="wrap clearfix">
			<menu>					
				<?php  wp_nav_menu();?>
			</menu>
		</div>
	</header>
	
	
	
	
	
	
	
	
	
		