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
	<div class="burger-menu">
			<svg fill="#1ad079" version="1.1" viewBox="144 144 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#1ad079" stroke-width="34.304"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="m556.75 263.58h-313.5c-4.3477 0-7.875-3.5234-7.875-7.8711 0-4.3477 3.5273-7.8711 7.875-7.8711h313.5c4.3477 0 7.8711 3.5234 7.8711 7.8711 0 4.3477-3.5234 7.8711-7.8711 7.8711z"></path> <path d="m556.75 407.87h-313.5c-4.3477 0-7.875-3.5234-7.875-7.8711s3.5273-7.8711 7.875-7.8711h313.5c4.3477 0 7.8711 3.5234 7.8711 7.8711s-3.5234 7.8711-7.8711 7.8711z"></path> <path d="m556.75 552.16h-313.5c-4.3477 0-7.875-3.5234-7.875-7.8711 0-4.3477 3.5273-7.875 7.875-7.875h313.5c4.3477 0 7.8711 3.5273 7.8711 7.875 0 4.3477-3.5234 7.8711-7.8711 7.8711z"></path> </g> </g></svg>
	</div>
	<div class="boton-apply-now">
		APPLY NOW
	</div>
</div>