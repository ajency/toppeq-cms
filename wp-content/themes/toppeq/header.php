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
						<img src="<?php echo get_template_directory_uri(); ?>/images/Logo_White.png" class="normal-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/orange-logo.png" class="sticky-logo">
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
					<li class="nav-item">
						<a class="nav-link" href="#">Our Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
						<ul class="dropdown">
							<li class="nav-item">
								<a class="nav-link" href="#">Team</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Careers</a>
							</li>
						</ul>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="#">Newsrooom</a>
						<ul class="dropdown">
							<li class="nav-item">
								<a class="nav-link" href="#">Media</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">In the News</a>
							</li>
						</ul>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
				</ul>
				<button class="btn-reset menu-close-btn"><img class="" width="35" src="<?php echo get_template_directory_uri(); ?>/images/x-close-icon-white.png"></button>
				<div class="rectangle-black"></div>
				<div class="rectangle-orange"></div>
			</div>
		</div>
	</nav>

	<div class="header-bg">
		<div class="breadcrumbs-wrapper">
			<h2 class="title text-capitalize"><?php the_title(); ?></h2>
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
		              	itemtype="https://schema.org/ListItem" title="<?php the_title(); ?>">
		                <span itemprop="name" title="<?php the_title(); ?>"><?php the_title(); ?></span>
		                    <meta itemprop="position" content="2" />
		        	</li>
		        </ul>
	        </div>
        </div>
	</div>

	<div id="content">