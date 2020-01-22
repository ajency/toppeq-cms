<?php
/*
    * Template Name: single press
    * Template Post Type: press
*/

get_header(); ?>

<?php
if (have_posts()) {
  while (have_posts()) {
  the_post(); ?>
  <?php }
}
?>
  <div class="header-bg-post">
    <div class="container breadcrumbs-wrapper w-980">
      <h2 class="title text-capitalize"> Press </h2>
    </div>
  </div>
  <div class="single-press-post">
    <div class="container w-980">

      <div class="single-post-featured-img text-center">
        <a href="<?php the_permalink(); ?>">
          <?php
            $post_title = get_the_title();
            $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'medium');
            if(empty($post_thumbnail_url) || is_null($post_thumbnail_url) || $post_thumbnail_url== false){
                    $post_thumbnail_url = '../../wp-content/themes/toppeq/images/orange-logo.png';
                }
          ?>
          <img src="<?php echo $post_thumbnail_url ?>" alt="<?php echo $post_title;?>" title="<?php echo $post_title;?>" width="300">
        </a>
      </div>
            <header class="header text-left my-20 py-1 px-0">
        <h2 class="single-post-title text-capitalize f-25 py-1 pl-3 font-weight-bold mb-0"><?php the_title(); ?></h2>
      </header>
      <div class="single-post-content mb-20"><?php the_content(); ?></div>  
    </div>
    <div class="uploads"><?php the_field('uploads');?></div>
  </div>
<?php get_footer(); ?>

