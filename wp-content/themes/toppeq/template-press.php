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
			<div class="block w-980">
				<div class="logo-and-date pb-2">
					<span class="news-date">
						<?php echo get_the_date(); ?>
					</span>
				</div>
				<h2 class="f-22 font-weight-bold pb-2"> <?php echo wp_trim_words( get_the_title(), 6 ); ?> </h2>
				<p class="press-text"><?php echo wp_trim_words(get_the_content(), 18, '...'); ?></p>
				<a class="article-link" href="<?php the_permalink(); ?>" target="_blank">Read press release
					<i class="fa fa-arrow-right"></i>
				</a>
			</div>
			<div class="img-block">
				<a href="<?php the_permalink(); ?>">
					<?php
						$post_title = get_the_title();
						$post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'medium');
						if(empty($post_thumbnail_url) || is_null($post_thumbnail_url) || $post_thumbnail_url== false){
				          	$post_thumbnail_url = '../wp-content/themes/toppeq/images/Logo_Black.png';
				        }
					?>
					<img src="<?php echo $post_thumbnail_url ?>" alt="<?php echo $post_title;?>" title="<?php echo $post_title;?>">
				</a>
			</div>
		</div>
		    <?php endwhile; ?>
		    <?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div>


<?php get_footer(); ?>
