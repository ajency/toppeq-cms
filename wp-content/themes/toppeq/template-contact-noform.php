<?php
/**
 * Template Name: Contact No Form
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
		<div class="toppeq-section">
			<div class="detailed-page">
				<div class="contact-title">
					<div class="text-center pb-6">
						<h2 class="section-title f-25 text-uppercase pt-md-5 pb-md-2 pt-2 pr-3"> Contact Us</h2>
						<h5 class="sub-title pr-3 font-weight-light">Curious about us? Say <a href="mailto:hello@toppeq.com" class="highlight">hello@toppeq.com</a> or call us at <a href="tel:00919137768403" class="text-body">+91-9137768403</a></h5>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 d-none d-sm-block">
						<img src="<?php echo get_template_directory_uri(); ?>/images/map.jpg" title="Our Locations" alt="Our Locations">
					</div>
					<div class="col-sm-6">
						<div class="pl-sm-5 ml-sm-5">
							<h4 class="text-muted mb-4">Our Offices</h4>

							<h5 class="mb-1 font-weight-bold">WeWork at Goregaon</h5>
							<p class="mb-4">
								Oberoi Commerz II,<br>
								International Business Park,<br>
								Goregaon(E) Mumbai - 400 063
							</p>

							<h5 class="mb-1 font-weight-bold">Plug N Work at Vile-Parle</h5>
							<p class="mb-4">
								102, Man House, S.V. Road,<br>
								Vile-Parle(W) Mumbai - 400 056
							</p>

							<h5 class="mb-1 font-weight-bold">WeWork at Thane</h5>
							<p class="mb-4">
								Zenia Building, Hiranandani Circle,<br>
								Hiranandani Business Park,<br>
								Thane - 400 607
							</p>
						</div>
					</div>
					<div class="col-sm-6 d-sm-none">
						<img src="<?php echo get_template_directory_uri(); ?>/images/map.jpg" title="Our Locations" alt="Our Locations">
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>



<?php get_footer(); ?>
