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
		<div class="col-sm-6"><div class="rectangle-left"></div><img src="<?php echo get_template_directory_uri(); ?>/images/team-img1.png" alt="Team at Toppeq" title="Team at Toppeq" class="w-100"></div>
		<div class="col-sm-6"><div class="rectangle-right"></div><img src="<?php echo get_template_directory_uri(); ?>/images/team-img2.png" alt="Team at Toppeq" title="Team at Toppeq" class="w-100"></div>
	</div>

	<section class="services">
	    <div class="circle--slider py-8">
	        <div class="rotate--circle">
	            <ul class="circle--rotate" id="circle--rotate">
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/large-img.png" alt="Nandini Sankar" title="Nandini Sankar"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/bhargavi-s.png" alt="Bhargavi Swami" title="Bhargavi Swami"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Akhilesh-vyas.jpg" alt="Akhilesh Vyas" title="Akhilesh Vyas"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/akhilesh.png" alt="Aditya Yadav" title="Aditya Yadav"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/kaartik.png" alt="Kaartik Malhotra" title="Kaartik Malhotra"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/ajay.png" alt="Ajay Khadke" title="Ajay Khadke"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/aayush.png" alt="Aayush Tainwala" title="Aayush Tainwala"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/urmi_mehta.jpg" alt="Urmi Mehta" title="Urmi Mehta"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/hema-r.png" alt="Hema Radhakrishna" title="Hema Radhakrishna"></div>
	                </li>
	            </ul>
	            <div class="animate-wrapper">
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
        								<div class="text-center">
											<h3 class="name"> Nandini Sankar</h3>
		                        			<p class="designation">Founder</p>
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
											<h3 class="name">Bhargavi Swami</h3>
		                        			<p class="designation">CHRO</p>
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
											<h3 class="name"> Akhilesh Vyas </h3>
		                        			<p class="designation">Lead BA – Equity Vertical</p>
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
											<h3 class="name"> Aditya Yadav </h3>
		                        			<p class="designation">Lead BA – Cash Vertical</p>
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
											<h3 class="name"> Kaartik Malhotra </h3>
		                        			<p class="designation">UI/UX Designer</p>
		                    			</div>
	                                    <h4>A potato trying to be a French fry</h4>
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
											<h3 class="name"> Ajay Khadke </h3>
		                        			<p class="designation">Lead Front End Tech</p>
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
											<h3 class="name"> Aayush Tainwala </h3>
		                        			<p class="designation">Legal</p>
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
											<h3 class="name"> Urmi Mehta </h3>
		                        			<p class="designation">Lead Business and Product Strategist</p>
		                    			</div>
	                                    <h4>Hard taskmaster; always finds a way. Can solve Rubik’s Cube faster than making Maggie. Comedy movie buff.</h4>
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
											<h3 class="name"> Hema Radhakrishna</h3>
		                        			<p class="designation">Lead Product &amp; Tech Strategist</p>
		                    			</div>
	                                    <h4>Discerns patterns in data. Global Citizen. Cruciverbalist. Wodehouse fan</h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	           
	        </div>
	    </div>
	</section>
</div>

<?php get_footer(); ?>
