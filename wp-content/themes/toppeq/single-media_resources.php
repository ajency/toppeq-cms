<?php
/*
    * Template file to display single posts
*/
get_header(); 

?>

<div class="single-post"> 
    <div class="single-post-page">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <?php           
                while ( have_posts() ) :
                  the_post();
                ?>

                   <?php 
                        $terms = get_the_terms( $post->ID , array( 'media_category') );
                            if ( !empty( $terms ) ) :
                            $project = array();
                            foreach ( $terms as $term ) {
                                $project[] = $term->name;
                        }
                        endif;
                   
                        // $terms = get_the_terms( $post->ID , array( 'media_category') );
                        // var_dump($terms);
                        // $i = 1;
                        // foreach ( $terms as $term ) {
                        //     $term_link = get_term_link( $term, array( 'media_category') );
                        //     if( is_wp_error( $term_link ) )
                        //     continue;
                        //     echo $term->name;
                        //     //  Add comma (except after the last theme)
                        //     echo ($i < count($terms))? " / " : "";
                        //     // Increment counter
                        //     $i++;
                        // }
                    ?>
                    <h5 class="section-title text-left mb-2 font-weight-light mt-2 mt-sm-6 f-25"><?php echo $project[0];?></h5>

                    <h1 class="section-title text-left mb-3 ml-0 mt-2 text-dark-grey max-700 font-weight-600"><?php the_title(); ?></h1>

                    <?php 
                        $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; 
                        $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
                    ?>

                    <div class="post-social-share ">
                        <a href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $postUrl; ?>&amp;via=WPCrumbs" class="text-orange mr-2 f-28" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/cws/share?url=<?php echo $postUrl; ?>" class="text-orange mr-2 f-28" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" class="text-orange f-28" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                    
                    <hr class="grey-separator mb-4"></hr>

                    <div class="single-post-featured-img post-image text-center mb-7">
                        <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail( 'medium-large' );
                            endif;
                        ?>
                    </div>
                 
                    <div class="page-content single-post-content single-media mb-4 text-left ml-0">
                        <?php the_content(); ?>

                        <div class="post-social-share mt-3 mt-sm-9">
                            <h3 class="section-title f-30 text-left mb-2 ">Share this article</h3>
                            <a href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $postUrl; ?>&amp;via=WPCrumbs" class="text-orange mr-2 f-28" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/cws/share?url=<?php echo $postUrl; ?>" class="text-orange mr-2 f-28" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" class="text-orange f-28" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>

                        <hr class="grey-separator"></hr>
                    </div>  

                    <div class="latest-articles mb-3 mb-sm-10">
                        <h3 class="section-title f-30 text-left mb-2 text-dark-grey">Latest Articles</h3>
                        <div class="article-slider">
                            <?php 

                            $args = array(
                                'post_type' => 'media_resources',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'media_category',
                                        'field' => 'slug',
                                        'terms' => $project[0]
                                    )
                                ),
                                'post__not_in' => array ($post->ID),
                            );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="m-wrap-outer">
                                    <div class="m-wrap">
                                        <div class="m-image">
                                        <?php 
                                            $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'large');
                                        ?>
                                            <img src="<?php echo $post_thumbnail_url ?>" />
                                        </div> 
                                        <div class="m-data">
                                            <h6 class="m-data-title font-weight-bold f-15"><?php the_field('media_name');?></h6>
                                            <h2 class="m-data-post-title f-30 font-weight-600 mb-0"><?php the_title();?></h2>
                                        </div> 
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
//get_sidebar();
get_footer();

?>
