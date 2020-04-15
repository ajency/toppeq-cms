<?php
/**
 * Template Name: Careers new
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
                <div class="page-featured-image">
                  <!--   <div class="row">
                        <div class="col-7">
                            <img src="<?php the_field('left_featured_image'); ?>" class="img-fluid c-image"/>
                        </div>
                        <div class="col-5">
                            <img src="<?php the_field('right_featured_image'); ?>" class="img-fluid c-image"/>
                        </div>
                    </div> -->
                </div>
                <div class="page-content mb-5">
                    <?php the_content();?>
                </div>
                <div class="page-title">
                    <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> Current openings</h2>
                </div>
                <div class="openings">
                    <?php
                        if( have_rows('jobs') ):
                            while ( have_rows('jobs') ) : the_row();?>
                                <div class="openings-row">
                                    <div class="openings-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/bgimg1.png" title="" alt="" width="32">
                                    </div>
                                    <div class="openings-right">
                                        <div class="openings-row-title">
                                            <h4 class="text-black font-weight-bold mb-1"><?php echo the_sub_field('jobs_category_title');?></h4>
                                            <?php
                                                $i = 0;
                                                if( have_rows('jobs_repeater_field') ):
                                                    while ( have_rows('jobs_repeater_field') ) : the_row();?> 
                                                        <div class="accordion" id="accordionOpenings">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne">
                                                                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
                                                                        <?php echo the_sub_field('job_title');?>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapse-<?php echo $i;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionOpenings">
                                                                    <div class="card-body">
                                                                        <?php echo the_sub_field('job_content');?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php 
                                                    $i++;
                                                    endwhile;
                                                else :
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        else :
                        endif;
                    ?>
                </div>
            </div>
        <?php }
    }
?>

<?php get_footer(); ?>