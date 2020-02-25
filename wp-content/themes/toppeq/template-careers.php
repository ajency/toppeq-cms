<?php
/**
 * Template Name: Careers
 */
get_header(); ?>

<?php
    if (have_posts()) {
        while (have_posts()) {
        the_post(); ?>
            <div class="container">
                <div class="page-title">
                    <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> LIFE AT TOPPEQ </h2>
                </div>
                <div class="page-featured-image mb-3 mb-md-6">
                  <!--   <div class="row">
                        <div class="col-7">
                            <img src="<?php the_field('left_featured_image'); ?>" class="img-fluid c-image"/>
                        </div>
                        <div class="col-5">
                            <img src="<?php the_field('right_featured_image'); ?>" class="img-fluid c-image"/>
                        </div>
                    </div> -->
                </div>
                <div class="page-content">
                    <?php the_content();?>
                </div>
            </div>
        <?php }
    }
?>

<?php get_footer(); ?>