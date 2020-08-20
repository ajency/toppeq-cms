<?php
/**
 * Template Name: Media & Resources
 */

get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
    the_post(); ?>
        <div class="custom-container with-bg">
        <div class="bg-post-image">
        </div>
        <div class="container position-relative">
            <div class="mb-3 mb-md-7 bg-white">
                <h3 class="section-title f-25 mb-2 font-weight-light mt-2 mt-sm-6 mb-3 text-uppercase"><?php the_title();?></h3>
                <div class="page-content mb-0 pb-2">
                    <h2 class="">View TOPPEQ’s latest updates in the media</h2>
                </div>
                <div class="media-list d-flex flex-wrap " id="ajax-posts">
                    <?php 
                    $args = array(
                        'post_type' => 'media_resources',
                        'post_status' => 'publish',
                        'posts_per_page' => 7,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'media_category',
                                'field' => 'slug',
                                'terms' => 'media-resources'
                            )
                        ),
                    );
                    $loop = new WP_Query( $args );
                    $index = 0;
                    $ids = array();
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                        array_push($ids, get_the_ID());
                        if($index == 0) {
                            $classW = "w-100";
                        } else if ($index == 1) {
                            $classW = "w-70";
                        } else if ($index == 2) {
                            $classW = "w-30";
                        } else if ($index == 3) {
                            $classW = "w-30";
                        } else if ($index == 4) {
                            $classW = "w-70";
                        } else if ($index == 5) {
                            $classW = "w-70";
                        } else if ($index == 6) {
                            $classW = "w-30";
                        }
                        
                        if($index == 0) { ?> 
                            <div class="m-wrap-outer w-100 mb-3">
                                <a href="<?php the_field('source_link');?>" class="m-wrap text-black text-decoration-none flex-row" target="_blank">
                                    <div class="m-image pb-m-100">
                                    <?php 
                                        $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'large');
                                    ?>
                                        <img src="<?php echo $post_thumbnail_url ?>" />
                                    </div> 
                                    <div class="m-data">
                                        <h6 class="m-data-title font-weight-bold text-uppercase f-15" style="color: <?php the_field('media_name_color');?>"><?php the_field('media_name');?></h6>
                                        <h2 class="m-data-post-title f-25 font-weight-600 mb-0 f-30"><?php the_title();?></h2>
                                    </div> 
                                </a>
                            </div>
                        <?php } else { ?>
                            <div class="m-wrap-outer d-flex <?php echo $classW; ?>">
                                <a href="<?php the_field('source_link');?>" class="m-wrap flex-wrap mb-3 text-black text-decoration-none" target="_blank">
                                    <?php 
                                        $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'large');
                                    ?>
                                    <div class="m-image w-100 m-bg-image" style="background-image: url('<?php echo $post_thumbnail_url;?>');">
                                        <!-- <img src="<?php //echo $post_thumbnail_url ?>" /> -->
                                    </div> 
                                    <div class="m-data w-100 p-3">
                                        <h6 class="m-data-title font-weight-bold position-static text-uppercase f-15" style="color: <?php the_field('media_name_color');?>"><?php the_field('media_name');?></h6>
                                        <h2 class="m-data-post-title f-25 font-weight-600 mb-0 f-30"><?php the_title();?></h2>
                                    </div> 
                                </a>
                            </div>
                        <?php } ?>
                    <?php $index ++; endwhile;  wp_reset_postdata();?>
                </div>
                <?php if($loop->max_num_pages > 1) { ?>
                    <div class="center text-center">
                        <button id="more_posts" class="btn btn-sm btn-outline-primary py-1 mt-md-4 text-center" data-post_type = "media_resources" data-post_terms = "media-resources" data-posts_exclude='<?php echo json_encode($ids);?>' data-posts_pagenumber = "1">
                            View more
                        </button>
                    </div>
                <?php } ?>
            </div>
            <div class="resources-block pt-3 pt-md-7 mb-3 mb-sm-2">
                <div class="resources-block-left pb-3 pb-md-7">
                    <h3 class="m-0 text-white mb-2 mb-md-0 f-25"><?php the_field('r_section_title');?></h3>
                    <h1 class="m-0 text-white mb-2 mb-md-0"><?php the_field('r_section_sub_title');?></h1>
                    <a href="<?php the_field('view_link');?>" target="_blank" class="btn-reset btn-white f-20">View</a>
                </div>
                <div class="resources-block-right">
                    <img src="<?php the_field('section_image');?>" class="img-fluid"/>
                </div>
            </div>
            <div class="mb-3 mb-md-7 bg-white">
                <h3 class="section-title f-25 mb-2 font-weight-light mt-2 mt-sm-6 mb-3 text-uppercase">The Toppeq Blog</h3>
                <div class="page-content mb-0 pb-2">
                    <h2 class="">Please check out our blog, <span class="text-orange">FULL STACK</span>, for more news and views from our end</h1>
                </div>
                <div class="media-list d-flex flex-wrap" id="ajax-posts-full">
                    <?php 
                    $args = array(
                        'post_type' => 'media_resources',
                        'post_status' => 'publish',
                        'posts_per_page' => 7,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'media_category',
                                'field' => 'slug',
                                'terms' => 'fullstack'
                            )
                        ),
                    );

                    $loopF = new WP_Query( $args );
                    $index = 0;
                    while ( $loopF->have_posts() ) : $loopF->the_post(); 
                        if($index == 0) {
                            $classW = "w-100";
                        } else if ($index == 1) {
                            $classW = "w-70";
                        } else if ($index == 2) {
                            $classW = "w-30";
                        } else if ($index == 3) {
                            $classW = "w-30";
                        } else if ($index == 4) {
                            $classW = "w-70";
                        } else if ($index == 5) {
                            $classW = "w-70";
                        } else if ($index == 6) {
                            $classW = "w-30";
                        }
                        
                        if($index == 0) { ?> 
                            <div class="m-wrap-outer w-100 mb-3">
                                <a href="<?php the_field('source_link');?>" class="m-wrap text-black text-decoration-none flex-row" target="_blank">
                                    <div class="m-image pb-m-100">
                                    <?php 
                                        $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'large');
                                    ?>
                                        <img src="<?php echo $post_thumbnail_url ?>" />
                                    </div> 
                                    <div class="m-data">
                                        <h6 class="m-data-title font-weight-bold text-uppercase f-15" style="color: <?php the_field('media_name_color');?>">INSIGHTS</h6>
                                        <h2 class="m-data-post-title f-25 font-weight-600 mb-0 f-30"><?php the_title();?></h2>
                                    </div> 
                                </a>
                            </div>
                        <?php } else { ?>
                            <div class="m-wrap-outer d-flex <?php echo $classW; ?>">
                                <a href="<?php the_field('source_link');?>" class="m-wrap flex-wrap mb-3 text-black text-decoration-none" target="_blank">
                                    <?php 
                                        $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'large');
                                    ?>
                                    <div class="m-image w-100 m-bg-image" style="background-image: url('<?php echo $post_thumbnail_url;?>');">
                                        <!-- <img src="<?php //echo $post_thumbnail_url ?>" /> -->
                                    </div> 
                                    <div class="m-data w-100 p-3">
                                        <h6 class="m-data-title font-weight-bold position-static text-uppercase f-15" style="color: <?php the_field('media_name_color');?>">INSIGHTS</h6>
                                        <h2 class="m-data-post-title f-25 font-weight-600 mb-0 f-30"><?php the_title();?></h2>
                                    </div> 
                                </a>
                            </div>
                        <?php } ?>
                    <?php $index ++; endwhile;  wp_reset_postdata();?>
                </div>
                <?php if($loopF->max_num_pages > 1) { ?>
                    <div class="centerF text-center">
                        <button id="more_posts_full" class="btn btn-sm btn-outline-primary py-1 mt-md-4 text-center" data-post_type = "media_resources" data-post_terms = "fullstack">
                            View more
                        </button>
                    </div>
                <?php }  ?>
            </div>
        </div>
        </div>
	<?php }
}
?>

<?php get_footer(); ?>