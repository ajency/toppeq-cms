<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
	<div class="container">
		<?php if ( have_posts() ) : ?>
            <div class="page-title">
                <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> 
                    <?php
                        $title = single_cat_title( '', false );
                        echo $title ;
                    ?>
                </h2>
            </div>
            <div class="row">
                <?php
                while ( have_posts() ) :
                    the_post();?>
                    <div class="col-md-4 d-flex">
                            <div class="post-column">
                                <?php 
                                    $image = get_the_post_thumbnail_url();
                                    if($image) {
                                        $image = get_the_post_thumbnail_url();
                                    } else {
                                        $image = get_template_directory_uri().'/images/placeholder.png';
                                    }
                                ?>
                                <div class="post-featured-image">
                                    <img src="<?php echo $image; ?>" class="img-fluid" alt="<?php the_title();?>"/>
                                </div>
                                <div class="post-meta">
                                    <h4><?php the_title();?></h4>
                                    <?php if(has_excerpt()) { ?>
                                        <div class="post-excerpt">
                                            <?php the_excerpt();?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="post-link">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">See more</a>
                                </div>
                            </div>
                        </div>
                    <?php                
                endwhile;?>
            </div>
            <?php
		    else :			
		endif;
		?>
	</div>

<?php
get_footer();
