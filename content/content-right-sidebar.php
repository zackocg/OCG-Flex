<?php while ( have_posts() ) : the_post(); ?>
<div class="grid">

	<div id="main_content" class="col_9">
		<div class="grid flex">
			<?php the_content(); ?>
		</div>
		<h2>Comments</h2>
		<?php comments_template( '', true ); ?>
	</div>
	
	<div id="primarySidebar" class="col_3">
		Right Sidebar
	</div>
</div>
<div class="clearfix"></div>
<?php endwhile; // end of the loop. ?>
		
			
			
			
			
			
			
			

		
