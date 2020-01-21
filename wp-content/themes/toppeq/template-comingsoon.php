<?php
/**
 * Template Name: coming-soon
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0 height=device-height">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]--> 
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,900&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>



	<div class="position-relative">
		<div class="coming-soon-bg" style="background-image: url(<?php the_field('background_image'); ?>); background-repeat: no-repeat; background-size: cover;"></div>
			<div class="module-header blur"></div>
		<div class="cs-main-content p-3">
			<div class="container">
				<img src="<?php the_field('logo');?>" class="normal-logo">
				<p class=""> <?php the_field('tagline');?> </p>
				<h1 class="title font-weight-bold f-35 text-uppercase my-5"><?php the_field('comingsoon_title');?></h1>
				<p class="mb-0">Get in touch with us: <a class="email-id-link f-18" href="mailto:<?php the_field('emailid');?>"> <?php the_field('emailid');?> </a> </p>
			</div>
		</div>
</div>
</body>
</html>


