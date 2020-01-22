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
                    <header class="header text-center mt-30 mb-30 ">
                        <h2 class="single-post-title text-capitalize font-36 line-height-1 mb-10"><?php the_title(); ?></h2>
                        <p class="text-black"> Posted in <strong><span class="post_category f-12"><?php the_category(' , '); ?> </span></strong> by <strong><span class="date f-12 text-black"><?php the_author(); ?></span></strong></p>
                    </header>
                    <div class="single-post-featured-img text-center">
                        <?php
                        if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'medium-large' );
                        endif;
                        ?>
                    </div>
                    <div class="single-post-content mb-40"><?php the_content(); ?></div>  
                    <div class="single-post-tags mb-30"><span class="single-post-tags f-12 text-capitalize"><?php the_tags( null, ''); ?></span></div>
                        <div id="ss-sticky-bar" class="bottom-sticky-bar stretched-sticky-bar" data-afterscroll="500">
                            <ul class="social-icons-container">

                                <li title="Write to us"><a href="javascript:(void);" target="_blank" class="floating-share mail-share" data-title="<?php echo get_the_title(); ?>" data-url="<?php echo get_the_permalink(); ?>"><span class="icon"><i class="fas fa-envelope"></i></span></a></li>

                                <li title="Share on Facebook"><a href="#" target="_blank" class="floating-share fb-share" data-title="<?php echo get_the_title(); ?>" data-url="<?php echo get_the_permalink(); ?>"><span class="icon"><i class="fab fa-facebook-f"></i></span></a></li>

                                <li title="Share on Linkedin"><a href="#" target="_blank" class="floating-share in-share" data-title="<?php echo get_the_title(); ?>" data-url="<?php echo get_the_permalink(); ?>"><span class="icon"><i class="fab fa-linkedin-in"></i></span></a></li>
                            </ul>
                    </div>
                    <div class="single-post-navigation row mt-30 mb-30">
                        <div class="col-md-6 previous">
                            <?php next_post_link('%link', 'Previous Post'); ?>

                        </div>
                        <div class="col-md-6 text-right next">
                            <?php previous_post_link('%link', 'Next Post'); ?>  
                        </div> 
                    </div>

                    <hr>
                    <h4 class="recent-post-title text-center"> Related Articles</h4>

                    <div class="row recent-post-section mb-30">
                            <?php

                                $args = array(
                                    'posts_per_page' => 3,
                                    'post__not_in'   => array( get_the_ID() ),
                                    'no_found_rows'  => true, 
                                );

                                // Check for current post category and add tax_query to the query arguments
                                $cats = wp_get_post_terms( get_the_ID(), 'category' ); 
                                $cats_ids = array();  
                                foreach( $cats as $wpex_related_cat ) {
                                    $cats_ids[] = $wpex_related_cat->term_id; 
                                }
                                if ( ! empty( $cats_ids ) ) {
                                    $args['category__in'] = $cats_ids;
                                }

                                // Query posts
                                $wpex_query = new wp_query( $args );

                                // Loop through posts
                                foreach( $wpex_query->posts as $post ) : setup_postdata( $post );  ?>
                                
                                        <div class="col-lg-3 col-md-4 col-sm-12 recent-post-grid">
                                            <div class="recent-post-featured-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php
                                                        $post_thumbnail_url = get_the_post_thumbnail_url($attachment_id,'large');
                                                        $post_title = get_the_title();
                                                        if(empty($post_thumbnail_url) || is_null($post_thumbnail_url) || $post_thumbnail_url== false){
                                                            $post_thumbnail_url = url("wp-content/themes/joinivy/assets/images/no-feature-img.png");
                                                        }
                                                    ?>
                                                    <img src="<?php echo $post_thumbnail_url ?>" alt="<?php echo $post_title;?>" title="<?php echo $post_title;?>">
                                                </a>
                                            </div>
                                            <div class="recent-post-bg">
                                                <div class="recent-post-header my-4">
                                                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                </div>
                                                <div class="recent-post-excerpt"><?php echo wp_trim_words(get_the_content(), 9, '...'); ?></div>
                                                <span class="category f-12 text-uppercase"><?php the_category('  '); ?> </span>
                                            </div>
                                        </div>

                                <?php endforeach; ?>
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
