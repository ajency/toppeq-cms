<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
	the_post(); ?>
	<?php }
}
?>
	<div class="container">
		<div class="page-title">
			<h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> <?php the_title();?> </h2>
		</div>
		<div class="page-content">
			<h2 class="has-text-align-center">A quick brown fox jumps over a lazy dog. </h2>
		</div>
		<div class="row">
			<?php 
				$blog_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
				<?php if ( $blog_posts->have_posts() ) : ?>
				<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
					<div class="col-md-4 d-flex">
						<div class="post-column">
							<?php 
								$image = get_the_post_thumbnail_url();
								if($image) {
									$image = get_the_post_thumbnail_url();
								} else {
									$image = get_template_directory_uri().'/images/placeholder.png';
								}
							?>
							<div class="post-featured-image">
								<img src="<?php echo $image; ?>" class="img-fluid" alt="<?php the_title();?>"/>
							</div>
							<div class="post-meta">
								<h4><?php the_title();?></h4>
								<?php if(has_excerpt()) { ?>
									<div class="post-excerpt">
										<?php the_excerpt();?>
									</div>
								<?php } ?>
							</div>
							<div class="post-link">
								<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">See more</a>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_query();?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
