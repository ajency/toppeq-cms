<?php
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
                                    <a href="#why-toppeq-section"><?php the_sub_field('button_text');?></a>
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

            <section class="why-toppeq mt-5 mb-3" id="why-toppeq-section">
                <div class="container">
                    <div class="content w-980">
                        <div class="heading hidden_block">
                            <h2 class="item-heading py-2 font-weight-bold"><?php the_field('section_title');?></h2>
                            <div class="sub-text f-22">
                                <?php the_field('section_description');?>
                            </div>
                        </div>
                        <div class="row justify-content-left">
                            <div class="col-md-5 col-sm-12 hidden_block text-block mr-2" data-position="left">
                                <h3 class="item-heading py-2 font-weight-bold"><?php the_field('left_section_title');?></h3>
                                <p class=""><?php the_field('left_section_description');?></p>
                            </div>
                            <div class="col-md-5 col-sm-12 hidden_block text-block">
                                <h3 class="item-heading py-2 font-weight-bold"><?php the_field('right_section_title');?></h3>
                                <p class=""><?php the_field('right_section_description');?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-12 hidden_block text-block pr-2">
                                <h3 class="item-heading py-2 font-weight-bold"><?php the_field('bottom_section_title');?></h3>
                                <p class=""><?php the_field('bottom_section_description');?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="item-heading text-uppercase px-2 py-2 font-weight-bold text-center hidden_block"> Our Services</h2>
                <div class="homeSlider">
                    <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                        );
                        
                        $services = new WP_Query( $args );
                        if( $services->have_posts() ) {
                            while( $services->have_posts() ) {
                                $services->the_post();
                                ?>
                                <div class="slider-element">
                                    <div class="row mx-0">
                                        <div class="col-lg-6 col-md-6 col-sm-12 position-relative pl-sm-0 block-1">
                                            <div class="block w-980">
                                                <h2 class="item-heading text-uppercase px-2 py-2 font-weight-bold"> <?php the_title();?></h2>

                                                <?php if( have_rows('btn') ): ?>
                                                        <?php
                                                            while ( have_rows('btn') ) : the_row();?>
                                                                <?php 
                                                                    $class="";
                                                                    $row_index = get_row_index(); 
                                                                    if($row_index == 1) {
                                                                        $class = "a";
                                                                    }
                                                                ?>
                                                                    <button class="btn btn-outline action-btn"> <?php the_sub_field('serv_section_btn');?> <span class="circle"><i class="fa fa-plus" aria-hidden="true"></i></span></button>

                                                            <?php
                                                            endwhile;                    
                                                        ?>
                                                <?php 
                                                    else :
                                                    endif; 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 block-2 block-2">
                                            <picture>
                                                <source media="(orientation: landscape)" srcset="<?php the_post_thumbnail_url(''); ?>">
                                                <source media="(orientation: portrait)" srcset="<?php the_post_thumbnail_url(''); ?>">
                                                <img src="<?php the_post_thumbnail_url(''); ?>" class="img-block" alt="<?php the_title();?>">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else {
                            echo 'No services!';
                        }
                        wp_reset_query();
                    ?>
                </div>
            </section>

            <section class="in-news-section">
                <div class="in-news my-6 py-6" style="background-image: url(<?php the_field('background_image'); ?>); background-repeat: no-repeat; background-size: cover;" >
                        <div class="news-block container w-980 text-center hidden_block">
                            <h2 class="pt-3 pb-2  mb-0 font-weight-bold text-white"><?php the_field('news_title');?> </h2>
                            <p class="pb-md-2 pb-1 font-weight-300 text-white w-780"><?php the_field('news_description');?> </p>
                        </div>
                        <div class="our-partners container w-980 pt-3">
                            <?php if( have_rows('logo') ): ?>
                            <div class="row justify-content-center align-items-center">
                                <?php
                                    while ( have_rows('logo') ) : the_row();?>
                                        <?php 
                                            $class="";
                                            $row_index = get_row_index(); 
                                            if($row_index == 1) {
                                                $class = "a";
                                            }
                                        ?>
                                    <div class="col-lg-2 col-6 hidden_block">
                                        <img src="<?php the_sub_field('client_logo');?>" class="w-100">
                                    </div>
                                <?php
                                    endwhile;                    
                                ?>
                            </div>
                        <?php 
                            else :
                            endif; 
                        ?>
                        </div>
                    </div>
            </section>

            <?php 
                $ptitle = get_field('p_section_title');
                $pdesc = get_field('p_section_description');
            ?>

            <section class="container w-980">
                <div class="form my-6 hidden_block">
                    <div class="row">
                        <div class="col-md-6 p-md-4 form-block">
                            <?php if($ptitle) { ?>
                                <h2 class="py-md-2 py-1 mb-0 font-weight-bold"><?php echo $ptitle;?></h2>
                            <?php } ?>
                            <?php if($pdesc) { ?>
                                <h4 class="pb-md-2 pb-1 font-weight-300"><?php echo $pdesc;?></h4>
                            <?php } ?>
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