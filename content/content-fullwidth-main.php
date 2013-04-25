<?php while ( have_posts() ) : the_post(); ?>
<div class="<?php bodyInGrid(); ?>">
	
	<div id="page-title" class="col_12" >
		<h1><?php the_title(); ?></h1>
	</div>

	<div id="main_content" class="col_12">
		<div class="grid flex">
			<?php the_content(); ?>
		</div>
		<h2>Comments</h2>
		<?php comments_template( '', true ); ?>
	</div>
</div>
<div class="clearfix"></div>
<?php endwhile; // end of the loop. ?>
		
			
			
			
			
			
			
			

		
