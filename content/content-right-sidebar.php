<?php while ( have_posts() ) : the_post(); ?>
<section id="contentContainerBorder" class="<?php contentContainerInGrid(); ?>">
	<div id="contentContainer">

	<?php
	//Show Title of Page
get_template_part('partials/partial', 'pagetitle');
	?>

	<div id="main_content" class="col_7">
		<div class="grid flex">
			<?php the_content(); ?>
		</div>
		
	</div>
	
	<div id="primarySidebar" class="col_5">
		<ul>
		<?php dynamic_sidebar('primary-sidebar'); ?>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
</section>

<?php endwhile; // end of the loop. ?>
		
			
			
			
			
			
			
			

		
