<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
	the_post(); ?>
	<?php }
}
?>

<div class="contact-us">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 contact-title">
				<div class="text-center py-9">
					<h1 class="title f-45"> Let's get in touch </h1>
					<p class="email-id f-22"> dummy@emailaddress.com</p>
				</div>
				<div class="social-media">
					<h2 class="f-25"> Find us at </h2>
					<span class="px-1"><a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></span>
					<span class="px-1"><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></span>
					<span class="px-1"><a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></span>
				</div>
			</div>
			<div class="col-md-7  contact-form">
				<div class="container">
				  	<ul class="nav nav-tabs">
				    	<li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i></a><span class="mt-2 text-center">Contact HR</span></li>  
				    	<li><a href="#tab2" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i></a><span class="mt-2 text-center">Dummy Text</span></li>
				    	<li><a href="#tab3" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i></a><span class="mt-2 text-center">Dummy Text</span></li>
				  	</ul>

				  	<div class="tab-content mt-8 position-relative">
				  		<div class="rectangle"></div>
		    			<div class="tab-pane active" id="tab1">
			      			<div class="panel panel-default">
			          			<div class="panel-body">
			         				<?php echo do_shortcode("[formidable id=2]"); ?>
			          			</div>
			        		</div>
			    		</div>
			    		<div class="tab-pane" id="tab2">
			      			<div class="panel panel-default">
			          			<div class="panel-body">
			           				<?php echo do_shortcode("[formidable id=3]"); ?>
			          			</div>
			        		</div>
			      		</div>
			    		<div class="tab-pane" id="tab3">
			      			<div class="panel panel-default">
			          			<div class="panel-body">
			           				<?php echo do_shortcode("[formidable id=3]"); ?>
			          			</div>
			        		</div>
			      		</div>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
