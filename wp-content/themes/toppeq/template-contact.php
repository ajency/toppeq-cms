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
<!-- 					<p class="email-id f-22 contact-mails contact-default">
						<a href="mailto:info@toppeq.com" class="text-black">info@toppeq.com</a>
					</p> -->
					<p class="email-id f-22 contact-mails contact-invest d-none">
						<a href="mailto:investor@toppeq.com" class="text-black">investor@toppeq.com</a>
					</p>
					<p class="email-id f-22 contact-mails contact-client d-none">
						<a href="mailto:prospect@toppeq.com" class="text-black">prospect@toppeq.com</a>
					</p>
					<p class="email-id f-22 contact-mails contact-hr d-none">
						<a href="mailto:hr@toppeq.com" class="text-black">hr@toppeq.com</a>
					</p>
				</div>
				<!--<div class="social-media">
					<h2 class="f-25"> Find us at </h2>
					<span class="px-1"><a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></span>
					<span class="px-1"><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></span>
					<span class="px-1"><a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></span>
				</div> -->
			</div>
			<div class="col-md-7  contact-form ml-0 mr-0">
				<div class="container">
				  	<ul class="nav nav-tabs">
				    	<li class="">
					    	<a href="#tab1" data-toggle="tab">
					    		<img src="<?php echo get_template_directory_uri(); ?>/images/Investor_White.png" class="active">
					    		<img src="<?php echo get_template_directory_uri(); ?>/images/Investor_Orange.png" class="not-active">
					    	</a><span class="mt-2 text-center">Considering an Investment <br> in TOPPEQ</span>
					    </li>  
				    	<li>
				    		<a href="#tab2" data-toggle="tab">
				    			<img src="<?php echo get_template_directory_uri(); ?>/images/client-white.svg" class="active">
				    			<img src="<?php echo get_template_directory_uri(); ?>/images/client-orange.svg" class="not-active">
				    		</a><span class="mt-2 text-center">Interested in becoming <br> a Client</span>
				    	</li>
				    	<li>
				    		<a href="#tab3" data-toggle="tab">
				    			<img src="<?php echo get_template_directory_uri(); ?>/images/HR_White.png" class="active">
				    			<img src="<?php echo get_template_directory_uri(); ?>/images/HR_Orange.png" class="not-active">
				    		</a><span class="mt-2 text-center">Want to build a Career <br> with us</span>
				    	</li>
				  	</ul>

				  	<div class="tab-content mt-8 position-relative min-353">
				  		<div class="rectangle"></div>
		    			<div class="tab-pane" id="tab1">
			      			<div class="panel panel-default">
			          			<div class="panel-body">
								  	<?php $form_id = get_field('form_one_id');?>
									<?php echo do_shortcode( '[formidable id="' . $form_id . '"]' );?>
			          			</div>
			        		</div>
			    		</div>
			    		<div class="tab-pane" id="tab2">
			      			<div class="panel panel-default">
			          			<div class="panel-body">
								  	<?php $form_id = get_field('form_two_id');?>
									<?php echo do_shortcode( '[formidable id="' . $form_id . '"]' );?>
			          			</div>
			        		</div>
			      		</div>
			    		<div class="tab-pane" id="tab3">
			      			<div class="panel panel-default">
			          			<div class="panel-body">
								  	<?php $form_id = get_field('form_three_id');?>
									<?php echo do_shortcode( '[formidable id="' . $form_id . '"]' );?>
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

<script type="text/javascript">
	$('a[href="#tab1"]').on('shown.bs.tab', function (e) {
	  $('.contact-mails').addClass('d-none');
	  $('.contact-invest').removeClass('d-none');
	})
	$('a[href="#tab2"]').on('shown.bs.tab', function (e) {
	  $('.contact-mails').addClass('d-none');
	  $('.contact-client').removeClass('d-none');
	})
	$('a[href="#tab3"]').on('shown.bs.tab', function (e) {
	  $('.contact-mails').addClass('d-none');
	  $('.contact-hr').removeClass('d-none');
	})
</script>
