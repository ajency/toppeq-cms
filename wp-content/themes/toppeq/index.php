<?php
get_header();

if (have_posts()) {
	while (have_posts()) {
	the_post(); 
?>
	<div class="page-wrapper">
		<div class="container">
			<div class="title">
				<h1><?php the_title();?></h1>
			</div>
			<?php if ( ! has_excerpt() ) {
				echo '';
			} else { ?>
				<div class="excerpt">
					<?php the_excerpt();?>
				</div><?php 
			} ?>				
			<div class="content">
				<?php the_content();?>
			</div>
		</div>
	</div>
<?php
        }
    }
get_footer();
?>