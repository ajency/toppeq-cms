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
			</div>
		</div>
		<div class="row align-items-center"> 
	  		<ul class="nav">
				<li>
					<a href="#" role="button" class="contactBox" data-toggle="modal" data-target="#form-one"> 
			         	<div class="contactInnerContainer"> 
			         		<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/invest-form.png"></div>
			       			<h3 class="contactTitle common-BodyTitle">Considering an Investment in TOPPEQ</h3> 
			           		<p class="contactTagline common-BodyText">investor@toppeq.com</p> 
			    	 	</div> 
			 	 	</a> 
					  <!-- <a href="mailto:investor@toppeq.com" class="text-orange">investor@toppeq.com</a> -->
			    </li>  
				<li>
					<a href="#" role="button" class="contactBox" data-toggle="modal" data-target="#form-two"> 
			         	<div class="contactInnerContainer">  
			         		<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/career-form.png"></div>
			       			<h3 class="contactTitle common-BodyTitle">Interested in becoming a Client</h3> 
			           		<p class="contactTagline common-BodyText">prospect@toppeq.com</p> 
			    	 	</div> 
		 	 		</a> 
					  <!-- <a href="mailto:prospect@toppeq.com" class="text-orange">prospect@toppeq.com</a>					   -->
	 	 		</li>
	 	 		<li>
				  <a href="#" role="button" class="contactBox" data-toggle="modal" data-target="#form-three"> 
			         	<div class="contactInnerContainer"> 
		         			<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/client-form.png"></div>
			       			<h3 class="contactTitle common-BodyTitle">Want to build a Career with us</h3> 
			           		<p class="contactTagline common-BodyText">hr@toppeq.com</p> 
			    	 	</div> 
			 	 	</a> 
					  <!-- <a href="mailto:hr@toppeq.com" class="text-orange">hr@toppeq.com</a>					   -->
		 	 	</li>
	  		</ul>
		</div>
		<div class="row mt-4 mt-md-9 mb-9 max-700 justify-content-center">
			<!-- <div class="col-sm-5">
				<div class="col-two text-center">
					<div class="col-two-title">
						<h3 class="">Join us on TOPPEQ</h3>
					</div>
					<div class="col-two-text">
						<p class="">We’d love to talk about how we can work together.</p> 
					</div>
				</div>	
			</div>
			<div class="col-sm-2 mb-3 mb-sm-0">
			
			</div> -->
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


<!-- Modal -->
<div class="modal fade" id="form-one" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <div class="form-title">
	  	<h5>Considering an Investment in TOPPEQ</h5>
	  </div>
      <div class="modal-body contact-us ">
	  	<div class="contact-form">
			<div class="panel-body">
				<?php $form_id = get_field('form_one_id');?>
				<?php echo do_shortcode( '[formidable id="' . $form_id . '"]' );?>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="form-two" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <div class="form-title">
	  	<h5>Interested in becoming a Client</h5>
	  </div>
      <div class="modal-body contact-us ">
	  	<div class="contact-form">
			<div class="panel-body">
				<?php $form_id = get_field('form_two_id');?>
				<?php echo do_shortcode( '[formidable id="' . $form_id . '"]' );?>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="form-three" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <div class="form-title">
	  	<h5>Want to build a Career with us?</h5>
	  </div>
      <div class="modal-body contact-us ">
	  	<div class="contact-form">
			<div class="panel-body">
				<?php $form_id = get_field('form_three_id');?>
				<?php echo do_shortcode( '[formidable id="' . $form_id . '"]' );?>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
