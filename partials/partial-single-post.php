<div>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="grid flex">
	<div class="col_4">
	Posted By: <?php the_author(); ?>
	</div>
	<div class="col_4">
	<?php the_date(); ?> <?php the_time(); ?>
	</div>
	<div class="col_4">
	<a href="#">View Comments</a>
	</div>
</div>
<div class="clearfix"></div>

<div>
	<?php the_content(); ?>
</div>