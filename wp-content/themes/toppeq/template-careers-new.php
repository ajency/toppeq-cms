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
                <div class="page-content mb-5">
                    <?php the_content();?>
                </div>
                <div class="page-title">
                    <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> Current openings</h2>
                </div>
                <div class="openings">
                    <?php
                        $j = 0;
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
                                                        <div class="accordion" id="accordionOpenings-<?php echo $j;?>">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne">
                                                                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse-<?php echo $j;?>-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $j;?>-<?php echo $i;?>">
                                                                        <?php echo the_sub_field('job_title');?>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapse-<?php echo $j;?>-<?php echo $i;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionOpenings-<?php echo $j;?>">
                                                                    <div class="card-body">
                                                                        <?php echo the_sub_field('job_content');?>
                                                                        <button class="btn btn-sm btn-outline-primary mt-2 rounded-0" data-toggle="modal" data-target="#exampleModalCenter">Apply Now</button>
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
                            <?php 
                            $j++;
                            endwhile;
                        else :
                        endif;
                    ?>
                </div>
                <div class="modal fade modal-white" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg modal-careers" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title fot-weight-light" id="exampleModalLongTitle">Position for </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <img width="20" src="<?php echo get_template_directory_uri(); ?>/images/cross-on-hover.svg" class="img-fluid" />
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php //echo do_shortcode( '[formidable id=4 title=false description=false]' );?>
                                <?php echo do_shortcode( '[formidable id=8 title=false description=false]' );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    }
?>

<?php get_footer(); ?>