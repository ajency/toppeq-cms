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
			
	<header id="site-header">
		<div class="container-fluid">
			<div class="navbar navbar-expand-md navbar-light bg-light p-0">
				<div class="logo">
					<a href="#" class="d-inline-block text-decoration-none">
						<!-- <h2 class="m-0">TOPPEQ</h2> -->
						<?php 
						if ( is_page_template( 'front-page-home.php' ) ) {
							?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/Logo_White.png" class="normal-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/images/orange-logo.png" class="sticky-logo">
							<?php
						} else {
							?>
						    <img src="<?php echo get_template_directory_uri(); ?>/images/orange-logo.png" class="">
							<?php
						}
						?>
					</a>
				</div>
				<div class="hamburger-menu">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>         
			</div>
		</div>
	</header>
	<nav>
		<div class="site-menu">
			<div class="menu-items position-relative">
				<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/orange-logo.png" class="menu-logo"></div>
				<ul class="navbar-nav mt-4">
					<li class="nav-item">
						<a class="nav-link active" href="#">Home</a>
					</li>
					<?php
						// if ( is_front_page() ){
						// 	$url = "#services-section";
						// } else {
						// 	$url = get_home_url()."/#services-section";
						// }
					?>
					<li class="nav-item service">
						<a class="nav-link" href="#services-section">Our Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About Us</a>
						<ul class="dropdown">
							<li class="nav-item">
								<a class="nav-link" href="/team">Team</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/careers">Careers</a>
							</li>
						</ul>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="#">Media</a>
						<ul class="dropdown">
							<li class="nav-item">
								<a class="nav-link" href="/press">News</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Blog</a>
							</li>
						</ul>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="/contact">Contact Us</a>
					</li>
				</ul>
				<button class="btn-reset menu-close-btn"><img class="" width="35" src="<?php echo get_template_directory_uri(); ?>/images/cancel.svg"></button>
				<!-- <div class="rectangle-black"></div> -->
				<div class="rectangle-orange"></div>
			</div>
		</div>
	</nav>

	<div class="header-bg">
		<div class="breadcrumbs-wrapper">
			<?php
				if(is_archive()) {
					$title = single_cat_title( '', false );
				} else {
					$title = get_the_title();
				}				
			?>
			<h2 class="title text-capitalize"><?php echo $title; ?></h2>
			<div class="breadcrumbs-inside">
		        <ul itemscope itemtype="https://schema.org/BreadcrumbList">
		            <li itemprop="itemListElement" itemscope
						itemtype="https://schema.org/ListItem" title="Toppeq">
		                <a itemprop="item" href="<?php echo get_site_url(); ?>/" title="Toppeq">
		                    <span itemprop="name">Home</span></a>
		                    <meta itemprop="position" content="1" />
		            </li>
		                <span class="sperator"> / </span>						
		            <li itemprop="itemListElement" itemscope
		              	itemtype="https://schema.org/ListItem" title="<?php echo $title; ?>">
		                <span itemprop="name" title="<?php echo $title; ?>"><?php echo $title; ?></span>
		                    <meta itemprop="position" content="2" />
		        	</li>
		        </ul>
	        </div>
        </div>
	</div>

	<div id="content">