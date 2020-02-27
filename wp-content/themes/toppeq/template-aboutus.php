<?php
/**
 * Template Name: About us
 */
get_header(); ?>

<?php
    if (have_posts()) {
        while (have_posts()) {
        the_post(); ?>
            <div class="about container">
                <div class="page-title">
                    <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> ABOUT US </h2>
                </div>
                <div class="sub-title">A quick brown fox jumps over a lazy dog. </div>
                <div class="page-content">
                    <?php the_content();?>
                </div>
            </div>
        <?php }
    }
?>

<?php get_footer(); ?>