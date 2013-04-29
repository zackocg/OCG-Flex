<?php while ( have_posts() ) : the_post(); ?>
<section id="contentContainerBorder" class="<?php contentContainerInGrid(); ?>">
	<div id="contentContainer">
	
	<section id="left_sidebar_content_section" class="col_8">
		<div class="grid flex">
			<?php the_content(); ?>
		</div>
		<h2>Comments</h2>
		<?php comments_template( '', true ); ?>
	</section>
	
	<aside id="left_sidebar_aside" class="col_4">
		<?php dynamic_sidebar('primary-sidebar'); ?>
	</aside>
	
	<div class="clearfix"></div>
	</div>
</section>

<?php endwhile; // end of the loop. ?>
		
			
			
			
			
			
			
			

		
