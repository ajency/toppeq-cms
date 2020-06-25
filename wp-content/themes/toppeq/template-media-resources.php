<?php
/**
 * Template Name: Media & Resources
 */

get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
    the_post(); ?>
        <div class="container">
            <div class="resources-block pt-3 pt-md-7 mb-3 mb-sm-9">
                <div class="resources-block-left pb-3 pb-md-7">
                    <h3 class="m-0 text-white mb-2 mb-md-0 f-25"><?php the_field('r_section_title');?></h3>
                    <h2 class="m-0 text-white mb-2 mb-md-0"><?php the_field('r_section_sub_title');?></h2>
                    <a href="<?php the_field('view_link');?>" target="_blank" class="btn-reset btn-white">View Resources</a>
                </div>
                <div class="resources-block-right">
                    <img src="<?php the_field('section_image');?>" class="img-fluid"/>
                </div>
            </div>
        </div>
	<?php }
}
?>

<?php get_footer(); ?>