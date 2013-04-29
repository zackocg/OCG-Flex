<?php
/*
Index - Blog Posts
*/
?>

<section id="contentContainerBorder" class="<?php contentContainerInGrid(); ?>">
	<div id="contentContainer">
		<div class="col_8">
		<?php
		//Located in /ocgflex-core/functions/post_loop.php
		post_loop();
		?>
		</div>
		
		<div class="col_4">
			<?php dynamic_sidebar('primary-sidebar'); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</section>