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
                    <div class="single-post-featured-img text-center">
                        <?php
                            if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'medium-large' );
                            endif;
                        ?>
                    </div>
                    <div class="header text-center my-2 py-1 px-0">
                        <h2 class="single-post-title text-capitalize f-25 py-1 pl-3 font-weight-bold mb-0"><?php the_title(); ?></h2>
                    </div>
                 
                    <div class="single-post-content mb-20"><?php the_content(); ?></div>  
                    <div class="single-post-navigation row mt-30 mb-30">
                        <div class="col-md-6 previous">
                            <?php next_post_link('%link', 'Previous Post'); ?>
                        </div>
                        <div class="col-md-6 text-right next">
                            <?php previous_post_link('%link', 'Next Post'); ?>  
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
