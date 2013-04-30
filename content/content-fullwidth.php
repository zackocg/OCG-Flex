<?php while ( have_posts() ) : the_post(); ?>
<section id="contentContainerBorder" class="<?php contentContainerInGrid(); ?>">
	<div id="contentContainer">
		
		<?php
		//Show Title of Page
		get_template_part('partials/partial', 'pagetitle');
		?>
		
		<div id="main_content" class="col_12">
			<div class="grid flex">
				<?php the_content(); ?>
			</div>
			<!-- <h2>Comments</h2> -->
			<?php //comments_template( '', true ); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<div class="clearfix"></div>
<?php endwhile; // end of the loop. ?>
		
			
			
			
			
			
			
			

		
