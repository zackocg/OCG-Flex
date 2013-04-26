<?php
/*
Index - Blog Posts
*/
?>

<div class="<?php bodyInGrid(); ?>">
	<div class="col_9">
	<?php
	post_loop();
	?>
	</div>
	
	<div class="col_3">
		Sidebar
	</div>
	<div class="clearfix"></div>
</div>