<?php
/**
 * Template Name: coming-soon
 */

if (have_posts()) {
	while (have_posts()) {
	the_post(); ?>
	<?php }
}
?>

	<div class="position-relative">
		<div class="coming-soon-bg" style="background-image: url(<?php the_field('background_image'); ?>); background-repeat: no-repeat; background-size: cover; height: 100%; filter: blur(10px);"></div>
		<div class="cs-main-content">
			<div class="container">
				<img src="<?php the_field('logo');?>" class="normal-logo">
				<h1><?php the_field('comingsoon_title');?></h1>
				<p> <?php the_field('tgaline');?> </p>
				<?php echo do_shortcode("[formidable id=3]"); ?>
			</div>
		</div>
	</div>


