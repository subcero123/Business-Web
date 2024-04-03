<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>
    <?php wp_title('|', true, 'right'); ?>
    <?php
		echo get_bloginfo('name');  // this is the name of your website.
		// use your code to display title in all other pages.
	?>
</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="navbar">
	<div class="logo">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-hero.png' ); ?>" alt="Hero Image">

	</div>
	<div class="contenedor-links">
		<ul>
			<li><a href="#">HOME</a></li>
			<li><a href="#">PRODUCTS</a></li>
			<li><a href="#">FEATURES</a></li>
			<li><a href="#">HOW TO APPLY</a></li>
			<li><a href="#">TOOLS</a></li>
    		<li><a href="#">MORE</a></li>
		</ul>
	</div>
	<div class="boton-apply-now">
		APPLY NOW
	</div>
</div>