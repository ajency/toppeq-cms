<?php


get_header(); ?>

<?php
if (have_posts()) {
  while (have_posts()) {
  the_post(); ?>
  <?php }
}
?>
  <div class="single-press-post">
    <div class="container">
      <div class="single-post-featured-img text-center">
        <a href="<?php the_permalink(); ?>" target="_blank">
          <?php
            $post_title = get_the_title();
            $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'medium');
            if(empty($post_thumbnail_url) || is_null($post_thumbnail_url) || $post_thumbnail_url== false){
                    $post_thumbnail_url = '../wp-content/themes/toppeq/images/orange-logo.png';
                }
          ?>
          <img src="<?php echo $post_thumbnail_url ?>" alt="<?php echo $post_title;?>" title="<?php echo $post_title;?>">
      </div>
      <header class="header text-left my-2 py-1 px-0">
        <h2 class="single-post-title text-capitalize f-25 py-1 pl-3 font-weight-bold mb-0"><?php the_title(); ?></h2>
      </header>
     
      <div class="single-post-content mb-20"><?php the_content(); ?></div>  
      <div class="single-post-navigation row mt-30 mb-30">
        <div class="col-md-6 previous">
          <?php next_post_link('%link', 'Previous Post'); ?>
        </div>
        <div class="col-md-6 text-right next">
            <?php previous_post_link('%link', 'Next Post'); ?>  
        </div> 
      </div>
    </div>
    <div class="uploads"><?php the_field('uploads');?></div>
  </div>
<?php get_footer(); ?>

