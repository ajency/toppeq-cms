<?php
/**
 * Template Name: Team
 */

get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
	the_post(); ?>
	<?php }
}
?>
<div class="team">
	<h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> Meet The Team </h2>
	<div class="row team-image container w-980">
		<div class="col-sm-6"><div class="rectangle-left"></div><img src="<?php echo get_template_directory_uri(); ?>/images/team-img1.png" class="w-100"></div>
		<div class="col-sm-6"><div class="rectangle-right"></div><img src="<?php echo get_template_directory_uri(); ?>/images/team-img2.png" class="w-100"></div>
	</div>

	<section class="services">
	    <div class="circle--slider py-8">
	        <div class="rotate--circle">
	            <ul class="circle--rotate" id="circle--rotate">
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/large-img.png"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/second-member.png"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/third-member.png"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/fourth-member.png"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/fifth-member.png"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/sixth-member.png"></div>
	                </li>
	                	<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/seventh-member.png"></div>
	                </li>
	                	<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/eight-member.png"></div>
	                </li>
	                	<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/ninth-member.png"></div>
	                </li>




	            </ul>
	            <div class="animate-wrapper">
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
        								<div class="text-center">
											<h5 class="name"> Nandini Sankar </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>Big picture person. Insomniac. Seahawks 12th Woman. Design fiend</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Hema Radhakrishna </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>Discerns patterns in data. Global Citizen. Cruciverbalist. Wodehouse fan</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Ajay Khadke </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>Talent spotter and excellent team builder. Dreams of winning a PGA tournament. Recommends The Seventh Secret by Irving Wallace to all and sundry.</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Bhargavi Swami </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>Chief Happiness incharge with a penchant for people and stories. Can create a tune a minute and is taking over the world one Podcast at a time!</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Aditya Yadav </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>Transforms ideas into products. Drawn to the ocean. Tom Hanks fan</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Akhilesh Vyas </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>Operates at the intersection of product and technology. Can whip up a mean vangi bhaat.</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Urmi Mehta </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>Hard taskmaster; always finds a way. Can solve Rubik’s Cube in XX seconds. Comedy movie buff.</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Aayush Tainwala </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4></h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Kaartik Malhotra </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>A potato trying to be a French fry</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Hema Radhakrishna </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>A quick brown fox jumps over a lazy dog</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Hema Radhakrishna </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>A quick brown fox jumps over a lazy dog</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
	                                	<div class="text-center">
											<h5 class="name"> Hema Radhakrishna </h5>
		                        			<p class="designation">Business Role</p>
		                    			</div>
	                                    <h4>A quick brown fox jumps over a lazy dog</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div> -->
	            </div>
	           
	        </div>
	    </div>
	</section>
</div>

<?php get_footer(); ?>
