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
                                } else{
                                    $class = "b";
                                }
                            ?>
                            <div class="item <?php echo $class;?>">
                                <picture class="in-left">
                                    <source media="(orientation: landscape)" srcset="<?php the_sub_field('slide_image');?>">
                                    <source media="(orientation: portrait)" srcset="<?php the_sub_field('slide_mobile_image');?>">
                                    <img src="<?php the_sub_field('slide_image');?>">
                                </picture>
                                <div class="item-text in">
                                    <h1 class=""><?php the_sub_field('slide_title');?></h1>
                                </div>
                                <!-- <div class="item-count in-bottom">
                                    <hr></hr>
                                    <h1 class="slide-count"><?php the_sub_field('slide_number');?></h1>
                                </div> -->
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
                <div class="container mt-8 mb-8 hidden_block">
                    <div class="detailed-page">
                        <div class="">
                            <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> 
                                <?php the_field('section_title');?> 
                                <img src="<?php echo get_template_directory_uri(); ?>/images/orange-logo.png" title="Toppeq" alt="Toppeq" class="why-toppeq-logo">
                            </h2>
                            <h5 class="sub-title pr-3"><?php the_field('sub_title');?></h5>
                            <p class="sub-text f-18 pr-3 pb-8"><?php the_field('section_description');?></p>
                            <div class="row">
                                <?php if( have_rows('block_section') ): ?>
                                    <div class="col-lg-6 col-md-12">
                                        <?php
                                        while ( have_rows('block_section') ) : the_row();?>
                                            <?php 
                                                $class="";
                                                $row_index = get_row_index(); 
                                                if($row_index == 1) {
                                                    $class = "mb-2";
                                                } else {
                                                    $class = "my-2";
                                                }
                                            ?>
                                            <div class="block">
                                                <h3 class="block-title <?php echo $class;?>"><?php the_sub_field('block_title');?> </h3>
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
                                <div class="col-lg-1 col-md-12"></div>
                                <div class="col-lg-5 col-md-12 why-toppeq-img">
                                    <picture>
                                            <source media="(orientation: landscape)" srcset="<?php the_field('main_img_desk');?>">
                                            <source media="(orientation: portrait)" srcset="<?php the_field('main_img_mob');?>">
                                            <img src="<?php the_field('main_img_desk');?>" class="block-img w-100 image-shadow">
                                    </picture>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="services-page mt-4" id="services-section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="detailed-page hidden_block">
                        <h2 class="section-title f-25 text-uppercase py-4"> Our Services </h2>
                        <div class="row services-block services-01 left">
                            <div class="number-overlay"> 01 </div>
                            <div class="d-block">
                                <div class="title">
                                    <h2 class="pb-2">CAP TABLE <br> MANAGEMENT</h2>
                                </div>
                                <div class="row s-content align-items-center">
                                <div class="col-md-5">
                                    <p>From shareholders details of holding and types of securities, TOPPEQ’s cloud-based platform digitises and secures your equity data and makes it both instantly accessible and easy to understand.</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                               <div class="outer-box-shares">
                                   <!--   <table>
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
                                    </table>-->
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/cap_table_management_600.jpg , <?php echo get_template_directory_uri(); ?>/images/cap_table_management_600.jpg 2x"
                                              media="(max-width: 639px)">
                                        
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/cap_table_management_800.jpg , <?php echo get_template_directory_uri(); ?>/images/cap_table_management_800.jpg 2x"
                                              media="(min-width: 640px) and (max-width: 1299px)">
                                        
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/cap_table_management.jpg"
                                              media="(min-width: 1300px)">
                                        
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_table_management_800.jpg" title="cap table management" alt="cap table management">
                                    </picture>
                                </div> 
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="services-block services-05 text-right right">
                            <div class="number-overlay"> 02 </div>
                            <div class="title">
                                <h2 class="pb-2">CASHFLOW <br> MANAGEMENT</h2>
                            </div>
                            <div class="row s-content align-items-center">
                                <div class="col-md-1"></div>
                                 <div class="col-md-5 pt-sm-2">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/cash_flow_manage.png" media="(min-width: 768px)">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/cash_flow_manage_s.png" media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/cash_flow_manage.png"  class="block-img w-100" title="cashflow management" alt="cashflow management">
                                    </picture>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <p>Our intelligent voice and messaging-based digital expense ledgers make it easy to track your company’s current spends, and our AI-engineered forecasting tools enable you to create a financial road map for the rest of your journey.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row services-block services-03 left">
                        <div class="number-overlay"> 03 </div>
                            <div class="title">
                                <h2 class="pb-2">DUE DILIGENCE & <br> VALUATION</h2>
                            </div>
                            <div class="row s-content align-items-center due-diligence">
                                <div class="col-md-5">
                                        <p>Our integrated suite of tools provides accurate and defensible audit-ready valuations, and our relentless focus on compliance adherence  speeds up the due diligence process.  </p>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/due-digilence.png" media="(min-width: 768px)">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/due-digilence_s.png" media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/due-digilence.png"  class="block-img w-100" title="Due Deligence" alt="Due Deligence">
                                    </picture>
                                </div>
                                
                            
                            </div>
                        </div>

                        <div class="row services-block services-04 text-right right">
                        <div class="number-overlay"> 04 </div>
                            <div class="title w-100">
                                <h2 class="pb-2">LEGAL AND <br> SECRETARIAL <br> SERVICES</h2>
                            </div>
                            <div class="row s-content align-items-center ml-2">
                            <div class="col-md-6 p-0 ser_img-04">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/legal_service-600.jpg , <?php echo get_template_directory_uri(); ?>/images/legal_service-600.jpg 2x"
                                          media="(max-width: 639px)">
                                    
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/legal_services-800.jpg , <?php echo get_template_directory_uri(); ?>/images/legal_services-800.jpg 2x"
                                          media="(min-width: 640px) and (max-width: 1299px)">
                                    
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/legal_service-1300.jpg"
                                          media="(min-width: 1300px)">
                                    
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal_services-800.jpg" title="Legal and Secretarial services" alt="Legal and Secretarial services">
                                </picture>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <p>Our experienced professionals handle tax, regulatory and legal compliance, so you can focus on building your company.</p>
                            </div>
                            </div>
                        </div>

                        <div class="row services-block services-02 left">
                        <div class="number-overlay"> 05 </div>
                            <div class="title w-100">
                                <h2 class="pb-2">PORTFOLIO ANALYTICS <br> AND SCENARIO <br> MODELING</h2>
                            </div>
                            <div class="row s-content align-items-center">
                                <div class="col-md-5">
                                    <p>We deep-dive into big data across sectors to help deliver critical insights that optimise your funding round decisions. </p>
                                </div>
                                 <div class="col-md-1"></div>
                                <div class="col-md-6 pl-4">

                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/portfolio-analytics-600.jpg , <?php echo get_template_directory_uri(); ?>/images/portfolio-analytics-600.jpg 2x" media="(max-width: 639px)">

                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/portfolio-analytics-800.jpg , <?php echo get_template_directory_uri(); ?>/images/portfolio-analytics-800.jpg 2x" media="(min-width: 640px) and (max-width: 1299px)">
                                        
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/portfolio-analytics.jpg"
                                        media="(min-width: 1300px)">
                                        
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-analytics-800.jpg" title="Portfolio Analytics" alt="Portfolio Analytics">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <section class="contact-us mt-8" id="pricing-section">
                <div class="container w-780">
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