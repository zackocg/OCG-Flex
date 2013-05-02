<?php
/*
Index - Blog Posts
*/
?>

<section id="contentContainerBorder" class="<?php contentContainerInGrid(); ?>">
	<div id="contentContainer">
		<div class="col_7">
		<?php
		//Function Located in /ocgflex-core/functions/post_loop.php
		//Template Located in /partials/partial-single-post.php
		post_loop();
		?>
		</div>
		
		<div id="primarySidebar" class="col_5">
			<ul>
			<?php dynamic_sidebar('primary-sidebar'); ?>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</section>