<?php
/**
 * Template Name: Privacy policy
 */
get_header(); ?>

<?php
    if (have_posts()) {
        while (have_posts()) {
        the_post(); ?>
            <div class="container">
                <div class="page-title">
                    <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> <?php the_title();?> </h2>
                </div>
                <div class="page-content">
                    <?php the_content();?>
                </div>
            </div>
        <?php }
    }
?>

<?php get_footer(); ?>