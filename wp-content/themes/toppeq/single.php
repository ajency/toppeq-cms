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
                    <div class="single-post-featured-img post-image text-center">
                        <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail( 'medium-large' );
                            endif;
                        ?>
                    </div>
                    <div class="header text-center my-2 py-1 px-0">
                        <h2 class="section-title f-25 font-weight-bold text-uppercase mb-0 py-1 pl-3 "><?php the_title(); ?></h2>
                        <?php 
                            $author = get_the_author();
                            $posted_in = '';
                            // foreach((get_the_category()) as $category) {
                            //     var_dump($category);
                            //     $posted_in .= "<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class='text-black'><strong class='text-underline text-capitalize'>".$category->cat_name."</strong></a> , ";
                            // }
                            // $posted_in = rtrim($posted_in,' , ');

                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                $posted_in .= '<a class="text-black" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" ><strong class="text-underline text-capitalize">' . esc_html( $categories[0]->name ) . '</strong></a>';
                            }
                        ?>
                        <p>Posted in <?php echo $posted_in;?> by <?php the_author(); ?> on <?php echo get_the_date(); ?></p>            
                    </div>
                 
                    <div class="page-content single-post-content mb-20">
                        <?php the_content(); ?>
                    </div>  

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
