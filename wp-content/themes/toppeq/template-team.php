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
		<div class="col-sm-6"><!-- <div class="rectangle-left"></div> --><img src="<?php echo get_template_directory_uri(); ?>/images/team-img1.jpg" alt="Team at Toppeq" title="Team at Toppeq" class="w-100"></div>
		<div class="col-sm-6"><!-- <div class="rectangle-right"></div> --><img src="<?php echo get_template_directory_uri(); ?>/images/team-img2.jpg" alt="Team at Toppeq" title="Team at Toppeq" class="w-100"></div>
	</div>

	<section class="services">
	    <div class="circle--slider py-8">
	        <div class="rotate--circle">
	            <ul class="circle--rotate" id="circle--rotate">
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/large-img.jpg" alt="Nandini Sankar" title="Nandini Sankar"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/bhargavi-s.jpg" alt="Bhargavi Swami" title="Bhargavi Swami"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/av.jpg" alt="Akhilesh Vyas" title="Akhilesh Vyas"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/akhilesh.jpg" alt="Aditya Yadav" title="Aditya Yadav"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/kaartik.jpg" alt="Kaartik Malhotra" title="Kaartik Malhotra"></div>
	                </li>
					<li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/ajay.jpg" alt="Ajay Khadke" title="Ajay Khadke"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/aayush.jpg" alt="Aayush Tainwala" title="Aayush Tainwala"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/urmi_mehta_new.jpg" alt="Urmi Mehta" title="Urmi Mehta"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/hema-r.jpg" alt="Hema Radhakrishna" title="Hema Radhakrishna"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Nitin.jpg" alt="Nitin Edate" title="Nitin Edate"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Sujit.jpg" alt="Sujit Karunakaran" title="Sujit Karunakaran"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Nikhil.jpg" alt="Nikhil Jain" title="Nikhil Jain"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Nitya.jpg" alt="Nitya Prasad" title="Nitya Prasad"></div>
	                </li>
	                <li class="block">
	                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Smitha-Satish.jpg" alt="Nitya Prasad" title="Nitya Prasad"></div>
	                </li>
	            </ul>
	            <div class="animate-wrapper">
	                <div class="animate">
	                    <div class="animate-img">
	                        <div class="animate-img__in">
	                            <div class="animate-more">
	                                <div class="animate-title">
        								<div class="text-center">
											<h3 class="name"> Nandini Sankar <a href="https://www.linkedin.com/in/nandini-toppeq/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
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
											<h3 class="name">Bhargavi Swami <a href="https://www.linkedin.com/in/bhswami/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">People Strategist</p>
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
											<h3 class="name"> Akhilesh Vyas <a href="https://www.linkedin.com/in/akhileshvyas/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Product Strategist</p>
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
											<h3 class="name"> Aditya Yadav <a href="https://www.linkedin.com/in/aditya-yadav-12a8453b/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Product Strategist</p>
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
											<h3 class="name"> Kaartik Malhotra <a href="https://www.linkedin.com/in/kaartikmalhotra14/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">UI/UX Strategist</p>
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
											<h3 class="name"> Ajay Khadke <a href="#" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Technology Strategist</p>
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
											<h3 class="name"> Aayush Tainwala <a href="https://www.linkedin.com/in/aayush-tainwala-38b41a25/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Legal Strategist</p>
		                    			</div>
	                                    <h4>Gets down to the nitty gritty.  Pianist. Never tires of watching The Big Short</h4>
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
											<h3 class="name"> Urmi Mehta <a href="https://www.linkedin.com/in/urmi-mehta-a3090715/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Business and Product Strategist</p>
		                    			</div>
	                                    <h4>Hard taskmaster; always finds a way. Can solve Rubik’s Cube faster than making Maggi. Comedy movie buff.</h4>
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
											<h3 class="name"> Hema Radhakrishna <a href="https://www.linkedin.com/in/hema-radhakrishna-3510664/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Technology &amp; Product Strategist</p>
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
											<h3 class="name"> Nitin Edate <a href=" https://www.linkedin.com/in/nitin-edate-a91b1821/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Technology Strategist</p>
		                    			</div>
	                                    <h4>Always up for a challenge. Eats, breathes, and sleeps movies. Also loves Chicken Chilly</h4>
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
											<h3 class="name"> Sujit Karunakaran <a href="https://www.linkedin.com/in/sujit-karunakaran-882b3821/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Technology Strategist</p>
		                    			</div>
	                                    <h4>Product person. Loves movies with twists and turns. Brings knights into action before bishops.</h4>
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
											<h3 class="name"> Nikhil Jain <a href="https://www.linkedin.com/in/nikhil-jain-050775169/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Technology Strategist</p>
		                    			</div>
	                                    <h4>Goes with the (task) flow. Has his own take on why Kattapa killed Baahubali. Firm believer in driving therapy</h4>
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
											<h3 class="name"> Nitya Prasad <a href="https://www.linkedin.com/in/nitya-prasad-b68934a0/" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation">Finance Strategist</p>
		                    			</div>
	                                    <h4>Looks for the devil in the detail. Listens to Ilayaraja. River-gazer.</h4>
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
											<h3 class="name"> Smitha Satish  <a href="#" target="_blank" class="linkedin-link"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="linkedin" title="linkedin"></a></h3>
		                        			<p class="designation"> Brand Liaison </p>
		                    			</div>
	                                    <h4>Connects people and dots. Current Candy Crush level : 1567. Always seeking a portal into a parallel universe</h4>
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
 