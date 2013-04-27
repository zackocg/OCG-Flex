<?php
/*
Index - Blog Posts
*/
?>

<div class="<?php bodyInGrid(); ?>">
	<div class="col_8">
	<?php
	post_loop();
	?>
	</div>
	
	<div class="col_4">
		<?php dynamic_sidebar('primary-sidebar'); ?>
	</div>
	<div class="clearfix"></div>
</div>