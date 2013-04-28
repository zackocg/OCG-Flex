<?php while ( have_posts() ) : the_post(); ?>
<section id="contentContainerBorder" class="<?php bodyInGrid(); ?>">
	<div id="contentContainerBackground">
	
		<?php
		
		
		
		?>
	
		<div id="main_content" class="col_12">
			<div class="grid flex">
				<?php the_content(); ?>
			</div>
			<h2>Comments</h2>
			<?php comments_template( '', true ); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<div class="clearfix"></div>
<?php endwhile; // end of the loop. ?>
		
			
			
			
			
			
			
			

		
