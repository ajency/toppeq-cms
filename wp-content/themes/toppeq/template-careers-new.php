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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bgimg1.png" title="" alt="" width="32">
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
                                                        <li>3+ Year Experience in Ul development</li>
                                                        <li>Proficient understanding of web markup, including HTML5, CSS3, client-side scripting and JavaScript frameworks, including React & jQuery</li>
                                                        <li>Strong JavaScript framework experience - React (required), jQuery, Bootstrap, Node.Js Proficient understanding of cross-browser compatibility issues and ways to work around them</li>
                                                        <li>Experience with client- or server-side MVC and MVVM patterns, AJAX, JSON, Restful services</li>
                                                        <li>Good understanding of asynchronous request handling, partial page updates, and AJAX Basic knowledge of image authoring tools, to be able to crop, resize, or perform small adjustments on an image. Familiarity with tools such as Gimp or Photoshop is a plus.</li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <h5>Qualifications Required</h5>
                                                    <ul class="custom-list">
                                                        <li>BE/ B. Tech with relevant experience mentioned above</li>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bgimg1.png" title="" alt="" width="32">
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
                                                        <li>Person with a legal background, experience with Private Equity or VC firms a MUST, comfort in reading and deciphering shareholder / Investor agreements, experience of deal participation an added advantage.</li>
                                                        <li>Extracting and recording specified data from investment documents.</li>
                                                        <li>Representing said data in such form as may be most useful for developing the product by the team.</li>
                                                        <li>Summarising contractual provisions in simple terms and conducting legal research, primarily on corporate, foreign investment and securities laws.</li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <h5>Office Locations</h5>
                                                    <ul class="custom-list">
                                                        <li>Goregaon/ Vile Parle/ Thane.</li>
                                                    </ul>
                                                    <button class="btn btn-sm btn-outline-primary mt-2">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingthree">
                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                                Lead Conversion
                                            </h5>
                                        </div>
                                        <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionOpeningsTwo">
                                            <div class="card-body">
                                                <div class="mb-5">
                                                    <h5>What we are looking for</h5>
                                                    <p>The profile involves seamless on-boarding of clients, which includes Conversion of financial data from client’s platform on to our applications.</p>
                                                    <ul class="custom-list">
                                                        <li>Hands on experience of at least 3-4 years in Conversion a MUST, Total experience could be 7 - 12 years.</li>
                                                        <li>Should possess sound accounting knowledge and be well versed with the conversion process.</li>
                                                        <li>Should be comfortable reconciling the books between the two platforms as on the conversion date and the parallel period.</li>
                                                        <li>Ability to navigate through the open breaks and close them down.</li>
                                                        <li>Funds set up as per Fund offering documents.</li>
                                                        <li>Set up new accounts in accordance with the Client needs and Product specifications.</li>
                                                        <li>Hands-on experience in driving complex financial analysis for a global business processes, involving consolidation & analysis of financial data and presentation of conclusions using tools like Excel, VBA, Access, Macros & Pivot Tables.</li>
                                                        <li>Adopting new process strategies to the regular data conversion</li>
                                                        <li>Verifiable strength in designing and improving work procedures in providing systems support. Strong in taking a holistic approach to problem solving, able to deal with all levels solution from high level business requirements and objectives</li>
                                                        <li>Excellent process orientation in performing project scoping, business process re-engineering, fit/gap analysis, requirements gathering, functional design, application configuration, user interactions, testing and production support.</li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <h5>Pre-requisites:</h5>
                                                    <ul class="custom-list">
                                                        <li>Chartered accountant preferred.</li>
                                                        <li>Highly energetic & approachable with excellent interpersonal, analytical, proactive problem solving, communication, people management and facilitation skills.</li>
                                                        <li>Experience in working in a global team environment & coordinating with onsite businesses.</li>
                                                        <li>Reconciliations with historical records.</li>
                                                        <li>Funds set up as per Fund offering documents.</li>
                                                        <li>Set up new accounts in accordance with the Client needs and Product specifications.</li>
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