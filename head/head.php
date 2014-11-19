<!-- Obtener HEAD -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>

<link rel="icon" href="<?php bloginfo('template_url')?>/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicon.ico" type="image/x-icon" />

<meta name="author" content="cmaginet.com">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');	
	wp_head();
?>	
<!-- Fin HEAD -->