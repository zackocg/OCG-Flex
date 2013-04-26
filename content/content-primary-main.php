<?php while ( have_posts() ) : the_post(); ?>
<div class="grid">
	
	<div id="page-title" class="col_12" style="background:blue;">
		<h1><?php the_title(); ?></h1>
	</div>

	
	
	<div id="main_content" class="col_9" style="background:aqua;float:right;">
		<div class="grid flex">
			<?php the_content(); ?>
		</div>
		<h2>Comments</h2>
		<?php comments_template( '', true ); ?>
	</div>
	
	<div id="primarySidebar" class="col_3" style="background:purple;float:left;">
		Left Sidebar
	</div>
	<div class="clearfix"></div>
</div>

<?php endwhile; // end of the loop. ?>
		
			
			
			
			
			
			
			

		
