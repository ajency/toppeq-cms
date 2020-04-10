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
                <div class="page-featured-image">
                  <!--   <div class="row">
                        <div class="col-7">
                            <img src="<?php the_field('left_featured_image'); ?>" class="img-fluid c-image"/>
                        </div>
                        <div class="col-5">
                            <img src="<?php the_field('right_featured_image'); ?>" class="img-fluid c-image"/>
                        </div>
                    </div> -->
                </div>
                <div class="page-content mb-5">
                    <?php the_content();?>
                </div>
                <div class="page-title">
                    <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> Current openings</h2>
                </div>
                <div class="openings">
                    <div class="openings-row">
                        <div class="openings-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bgimg1.png" title="" alt="" width="30">
                        </div>
                        <div class="openings-right">
                            <div class="openings-row-title">
                                <h4 class="text-black font-weight-bold mb-1">Development</h4>
                                <div class="accordion" id="accordionOpenings">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                UI Developer
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionOpenings">
                                            <div class="card-body">
                                                <div class="mb-5">
                                                    <h5>What we are looking for</h5>
                                                    <ul class="custom-list">
                                                        <li>qweqeqwewqeqweqwe qweqwe </li>
                                                        <li>qweqweweqweqwe  ewerfefrwef </li>
                                                        <li>ljfpjijfpsdifjpi isdjpifjisdjfi</li>
                                                        <li>qweqweweqweqwe  ewerfefrwef </li>
                                                        <li>ljfpjijfpsdifjpi isdjpifjisdjfi</li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <h5>Qualifications Required</h5>
                                                    <ul class="custom-list">
                                                        <li>BE/B.Tech with relevent experience in above</li>
                                                    </ul>
                                                    <button class="btn btn-sm btn-outline-primary mt-2">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="openings-row">
                        <div class="openings-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bgimg1.png" title="" alt="" width="30">
                        </div>
                        <div class="openings-right">
                            <div class="openings-row-title">
                                <h4 class="text-black font-weight-bold mb-1">Business Operations</h4>
                                <div class="accordion" id="accordionOpeningsTwo">
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Legal Associate
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOpeningsTwo">
                                            <div class="card-body">
                                                <div class="mb-5">
                                                    <h5>What we are looking for</h5>
                                                    <ul class="custom-list">
                                                        <li>qweqeqwewqeqweqwe qweqwe </li>
                                                        <li>qweqweweqweqwe  ewerfefrwef </li>
                                                        <li>ljfpjijfpsdifjpi isdjpifjisdjfi</li>
                                                        <li>qweqweweqweqwe  ewerfefrwef </li>
                                                        <li>ljfpjijfpsdifjpi isdjpifjisdjfi</li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <h5>Office Locations</h5>
                                                    <ul class="custom-list">
                                                        <li>Goregaon/ Vile Parle/ Thane</li>
                                                    </ul>
                                                    <button class="btn btn-sm btn-outline-primary mt-2">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingthree">
                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                                Accounting Associate
                                            </h5>
                                        </div>
                                        <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionOpeningsTwo">
                                            <div class="card-body">
                                                <div class="mb-5">
                                                    <h5>What we are looking for</h5>
                                                    <ul class="custom-list">
                                                        <li>qweqeqwewqeqweqwe qweqwe </li>
                                                        <li>qweqweweqweqwe  ewerfefrwef </li>
                                                        <li>ljfpjijfpsdifjpi isdjpifjisdjfi</li>
                                                        <li>qweqweweqweqwe  ewerfefrwef </li>
                                                        <li>ljfpjijfpsdifjpi isdjpifjisdjfi</li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <h5>Office Locations</h5>
                                                    <ul class="custom-list">
                                                        <li>Goregaon/ Vile Parle/ Thane</li>
                                                    </ul>
                                                    <button class="btn btn-sm btn-outline-primary mt-2">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    }
?>

<?php get_footer(); ?>