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
        <?php
          if ( has_post_thumbnail() ) :
          the_post_thumbnail( 'medium-large' );
          endif;
        ?>
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

