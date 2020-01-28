<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
	the_post(); ?>
	<?php }
}
?>

<div class="contact-page"> 
	<div class="container"> 
		<div class="contact-title">
			<div class="text-center pb-6">
				<h1 class="title f-45"> Let's get in touch </h1>
				<p class="email-id f-22"> dummy@emailaddress.com</p>
			</div>
		</div>
		<div class="row align-items-center"> 
	  		<ul class="nav">
				<li>
					<a href="#" class="contactBox"> 
			         	<div class="contactInnerContainer"> 
			         		<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/invest-form.png"></div>
			       			<h3 class="contactTitle common-BodyTitle">Considering an Investment in TOPPEQ</h3> 
			           		<p class="contactTagline common-BodyText">We’d love to talk about how we can work together.</p> 
			    	 	</div> 
			 	 	</a> 
			    </li>  
				<li>
					<a href="#" class="contactBox"> 
			         	<div class="contactInnerContainer">  
			         		<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/client-form.png"></div>
			       			<h3 class="contactTitle common-BodyTitle">Interested in becoming a Client</h3> 
			           		<p class="contactTagline common-BodyText">We’d love to talk about how we can work together.</p> 
			    	 	</div> 
		 	 		</a> 
	 	 		</li>
	 	 		<li>
					<a href="#" class="contactBox"> 
			         	<div class="contactInnerContainer"> 
		         			<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/career-form.png"></div>
			       			<h3 class="contactTitle common-BodyTitle">Want to build a Career with us?</h3> 
			           		<p class="contactTagline common-BodyText">We’d love to talk about how we can work together.</p> 
			    	 	</div> 
			 	 	</a> 
		 	 	</li>
	  		</ul>
		</div>
		<div class="row mt-4 mt-md-9 mb-9 max-700">
			<div class="col-sm-5">
				<div class="col-two text-center">
					<div class="col-two-title">
						<h3 class="">Join us on TOPPEQ</h3>
					</div>
					<div class="col-two-text">
						<p class="">We’d love to talk about how we can work together.</p> 
					</div>
				</div>	
			</div>
			<div class="col-sm-2">
			
			</div>
			<div class="col-sm-5">
				<div class="col-two text-center">
					<div class="col-two-title">
						<h3 class="">General communication</h3> 
					</div>
					<div class="col-two-text">
						<p class="">For general queries, including partnership opportunities, please email <a href="mailto:info@toppeq.com">info@toppeq.com</a></p> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
