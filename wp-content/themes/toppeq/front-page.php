<?php
get_header();
?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
			
            <div class="mainSlider">
                <div class="item a">
                    <picture class="in">
                        <source media="(orientation: landscape)" srcset="<?php echo get_template_directory_uri(); ?>/images/Sider_1.png">
                        <source media="(orientation: portrait)" srcset="<?php echo get_template_directory_uri(); ?>/images/MobileSlider1.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Sider_1.png">
                    </picture>
                    <div class="item-text in-left">
                        <h1 class="">BRINGING CLARITY <br>TO EQUITY.</h1>
                        <a href="#why-toppeq-section">Learn More</a>
                    </div>
                    <div class="item-count in-bottom">
                        <hr></hr>
                        <h1 class="slide-count">01</h1>
                    </div>
                </div>
                <div class="item b">
                    <picture class="in">
                        <source media="(orientation: landscape)" srcset="<?php echo get_template_directory_uri(); ?>/images/Slider_2.png">
                        <source media="(orientation: portrait)" srcset="<?php echo get_template_directory_uri(); ?>/images/MobileSlider2.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Slider_2.png">
                    </picture>
                    <div class="item-text in-left">
                        <h1>SMARTLY TRACK <br >YOUR MONEY.</h1>
                        <a href="#why-toppeq-section">Learn More</a>
                    </div>
                    <div class="item-count in-bottom">
                        <hr></hr>
                        <h1 class="slide-count">02</h1>
                    </div>
                </div>
            </div>

            <section class="why-toppeq mt-5 mb-3" id="why-toppeq-section">
                <div class="container">
                    <div class="content w-980">
                        <div class="heading hidden_block">
                            <h2 class="item-heading py-2 font-weight-bold"> Why TOPPEQ</h2>
                            <p class="sub-text f-22"> Toppeq helps investors and startups keep track of their money. Our machine learning algorithms and decision support systems provide investors with both the big picture and the nitty gritty , and enable startups to find  out what they are spending their money on and what it is doing for them.</p>
                        </div>
                        <div class="row justify-content-left">
                            <div class="col-md-5 col-sm-12 hidden_block text-block mr-2" data-position="left">
                                <h3 class="item-heading py-2 font-weight-bold"> For Investors </h3>
                                <p class=""> Toppeq's platform helps venture capitalists, private equity firms, and angel investors go granular on both their investment portfolio and use our dynamically generated sector-specific metrics to glean rapidly actionable insights</p>
                            </div>
                            <div class="col-md-5 col-sm-12 hidden_block text-block">
                                <h3 class="item-heading py-2 font-weight-bold"> For Startups </h3>
                                <p class=""> We use pattern recognition to dissect thousands of shareholder agreements and employ big data to red flag contractual trapdoors and ensure parity between all parties.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-12 hidden_block text-block pr-2">
                                <h3 class="item-heading py-2 font-weight-bold"> For Law and Accounting Firms </h3>
                                <p class=""> The constantly and consistently updated data at our disposal- from shareholder agreements to cap tables -enables law and accounting firms to deliver the right and promt advice to their clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="seperator container my-4">
            <section class="container mb-8">
                <h2 class="text-center my-3 font-weight-bold hidden_block"> Our Services </h2>
                <div class="pageSlider w-980 my-4">
                    <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => -1,
		                    'post_status' => 'publish',
                        );
                        
                        $services = new WP_Query( $args );
                        if( $services->have_posts() ) {
                            while( $services->have_posts() ) {
                                $services->the_post();
                                ?>
                                <div class="item hidden_block">
                                    <div class="thumb">
                                        <picture>
                                            <source media="(orientation: landscape)" srcset="<?php the_post_thumbnail_url(''); ?>">
                                            <source media="(orientation: portrait)" srcset="<?php the_post_thumbnail_url(''); ?>">
                                            <img src="<?php the_post_thumbnail_url(''); ?>" class="" alt="<?php the_title();?>">
                                        </picture>
                                        <div class="overlay">
                                            <a href="#">
                                                <i class="flaticon-graph"></i>
                                                <h4 class="f-18"><?php the_title();?></h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else {
                            echo 'Oh ohm no services!';
                        }
                        wp_reset_query();
                    ?>
                </div>
            </section>

            <section class="container w-980">
                <div class="form my-6 hidden_block">
                    <div class="row">
                        <div class="col-md-6 p-md-4 form-block">
                            <h2 class="py-md-2 py-1 mb-0 font-weight-bold"> What about the Pricing? </h2>
                            <h4 class="pb-md-2 pb-1 font-weight-300"> Fill out the form and we will get back to you. </h4>
                        </div>
                        <div class="col-md-6 p-md-3 form-block">
                            <div class="form-field mb-0">
                                <input class="form-control" type="text" placeholder="Are you an Individual, Enterprise or a Startup?">
                                <input class="form-control" type="email" placeholder="Your e-mail address?">
                                <button class="btn btn-default submit">Let’s get in touch</button>
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