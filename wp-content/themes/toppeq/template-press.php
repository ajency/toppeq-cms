<?php
/**
 * Template Name: Press
 */

get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
	the_post(); ?>
	<?php }
}
?>

	<div class="press container w-980">
	 	
		<?php 
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> 3 , 'paged' => $paged)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>

		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

		<div class="press-block py-3 d-flex justify-content-between align-items-center">
			<div class="block">
				<div class="logo-and-date py-2">
					<span class="news-date">
						<?php the_date(); ?>
					</span>
				</div>
				<h2 class="f-25 font-weight-bolder pb-2"> <?php the_title(); ?> </h2>
				<p class="press-text">GitLab Appoints VP of Global Channels and Chief Legal Officer &amp; Corporate Secretary as Company Prepares for Going Public</p>
				<a class="article-link" href="<?php the_permalink(); ?>" target="_blank">Read press release
					<i class="fa fa-arrow-right"></i>
				</a>
			</div>
			<div class="img-block">
				<a href="<?php the_permalink(); ?>">
					<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail( array('large') );
					endif;
					?>
				</a>
			</div>
		</div>
		    <?php endwhile; ?>
		    <?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div>


<?php get_footer(); ?>
