<?php

/**
 * Template Name: frontpage
 */

get_header();
?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>		
            <?php if( have_rows('slider') ): ?>
                <div class="mainSlider">
                    <?php
                        while ( have_rows('slider') ) : the_row();?>
                            <?php 
                                $class="";
                                $row_index = get_row_index(); 
                                if($row_index == 1) {
                                    $class = "a";
                                }
                            ?>
                            <div class="item <?php echo $class;?>">
                                <picture class="in">
                                    <source media="(orientation: landscape)" srcset="<?php the_sub_field('slide_image');?>">
                                    <source media="(orientation: portrait)" srcset="<?php the_sub_field('slide_mobile_image');?>">
                                    <img src="<?php the_sub_field('slide_image');?>">
                                </picture>
                                <div class="item-text in-left">
                                    <h1 class=""><?php the_sub_field('slide_title');?></h1>
                                </div>
                                <div class="item-count in-bottom">
                                    <hr></hr>
                                    <h1 class="slide-count"><?php the_sub_field('slide_number');?></h1>
                                </div>
                            </div>

                            <?php
                        endwhile;                    
                    ?>
                </div>
            <?php 
                else :
                endif; 
            ?>

            <div class="toppeq-section">
                <div class="overlay"></div>
                <div class="container w-980 mt-8 mb-8 hidden_block">
                    <div class="detailed-page">
                        <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> <?php the_field('section_title');?></h2>
                        <h5 class="sub-title pr-3"><?php the_field('sub_title');?></h5>
                        <p class="sub-text f-18 pr-3"><?php the_field('section_description');?></p>
                        <div class="row">
                            <?php if( have_rows('block_section') ): ?>
                                <div class="col-lg-6 col-md-12">
                                    <?php
                                    while ( have_rows('block_section') ) : the_row();?>
                                        <?php 
                                            $class="";
                                            $row_index = get_row_index(); 
                                            if($row_index == 1) {
                                                $class = "why-toppeq";
                                            }
                                        ?>
                                        <div class="block">
                                            <h3 class="block-title my-2"><?php the_sub_field('block_title');?> </h3>
                                            <img src="<?php the_sub_field('block_icon');?>" class="icon">
                                            <p class="block-content"><?php the_sub_field('block_content');?></p>
                                        </div>
                                    <?php
                                        endwhile;                    
                                    ?>
                                </div>
                            <?php 
                            else :
                                endif; 
                            ?>
                            <div class="col-lg-5 col-md-12 why-toppeq-img">
                               <picture>
                                    <source media="(orientation: landscape)" srcset="<?php the_field('main_img_desk');?>">
                                    <source media="(orientation: portrait)" srcset="<?php the_field('main_img_mob');?>">
                                    <img src="<?php the_field('main_img_desk');?>" class="block-img w-100">
                                </picture>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="services-page mt-4" id="services-section">
                <div class="overlay"></div>
                <div class="container w-980">
                    <div class="detailed-page hidden_block">
                        <h2 class="section-title f-25 text-uppercase py-4"> Our Services</h2>
                        <div class="row services-block services-01 left">
                            <div class="number-overlay"> 01 </div>
                            <div class="d-block">
                                <div class="title">
                                    <h2 class="pb-2">CAP TABLE <br> MANAGEMENT</h2>
                                </div>
                                <div class="row s-content align-items-center">
                                <div class="col-md-6">
                                    <p>From shareholders to percentage of holding and types of securities, TOPPEQ’s cloud-based platform digitises and secures your equity data and makes it both instantly accessible and easy to understand.</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="outer-box-shares">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="f-18 p-1">Shareholders</th>
                                            <th class="f-18 p-1">% holding</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-14">John Appleseed</td>
                                            <td class="f-14">25</td>
                                        </tr>
                                        <tr>
                                            <td class="f-14">John Doe</td>
                                            <td class="f-14">12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row services-block services-02 text-right right">
                        <div class="number-overlay"> 02 </div>
                            <div class="title w-100">
                                <h2 class="pb-2">PORTFOLIO ANALYTICS <br> AND SCENARIO <br> MODELING</h2>
                            </div>
                            <div class="row s-content align-items-center">
                                <div class="col-md-6 pl-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio.png">
                                </div>
                                <div class="col-md-6">
                                    <p>We deep-dive into big data across sectors to help deliver critical insights that optimise your funding round decisions.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row  services-block services-03 left">
                        <div class="number-overlay"> 03 </div>
                            <div class="title">
                                <h2 class="pb-2">DUE DILIGENCE & <br> VALUATION</h2>
                            </div>
                            <div class="row s-content align-items-center">
                                <div class="col-md-5">
                                        <p>Our integrated suite of tools provides accurate and defensible audit-ready valuations, and our relentless focus on compliance adherence  speeds up the due diligence process. </p>
                                </div>
                                <div class="col-md-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/due-digilence.png">
                                </div>
                                
                            
                            </div>
                        </div>
                        <!-- <div class="row services-block services-04 text-right right">
                        <div class="number-overlay"> 04 </div>
                            <div class="title w-100">
                                <h2 class="pb-2">LEGAL AND <br> SECRETARIAL <br> SERVICES</h2>
                            </div>
                            <div class="row s-content align-items-center ml-2">
                            <div class="col-md-6 p-0 ser_img-04">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/legal-services.png">
                            </div>
                            <div class="col-md-6">
                                <p>Our experienced professionals handle tax, regulatory and legal compliance, so you can focus on building your company.</p>
                            </div>
                            </div>
                        </div> -->
                        <div class="services-block services-05 left">
                        <div class="number-overlay"> 05 </div>
                            <div class="title">
                                <h2 class="pb-2">CASHFLOW <br> MANAGEMENT</h2>
                            </div>
                            <div class="row s-content align-items-center">
                                <div class="col-md-5">
                                    <p>Our intelligent voice and messaging-based digital expense ledgers make it easy to track your company’s current spends, and our AI-engineered forecasting tools enable you to create a financial road map for the rest of your journey.</p>
                                </div>
                                <div class="col-md-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/cashflow.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="blog mb-5 mt-5">
                <div class="container">
                    <h2 class="section-title f-25 text-uppercase mb-3">Blog</h2>
                    <h5 class="sub-title f-18 text-center mb-5 pb-2">A quick brown fox jumps over a lazy dog. </h5>
                    <div class="row">
                        <?php 
                            $blog_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>
                            <?php if ( $blog_posts->have_posts() ) : ?>
                            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
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
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="contact-us mt-8">
                <div class="container w-980 hidden_block">
                    <div class="row align-items-center">
                        <div class="contact-form">
                            <h2 class="section-title f-25 text-uppercase"><?php the_field('pricing_title');?></h2>
                            <h5 class="sub-title f-18"><?php the_field('pricing_description');?> </h5>
                            <div class="tab-content mt-4 position-relative">
                                <div class="rectangle"></div>
                                <div class="tab-pane active" id="tab1">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php echo do_shortcode("[formidable id=2]"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        <?php
    endwhile;
    wp_reset_query();
endif;
?>

<?php
get_footer();
?>