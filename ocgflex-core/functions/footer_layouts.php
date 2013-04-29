<?php 
/*--------------------------------------
	F O O T E R    L A Y O U T S
----------------------------------------*/
?>
<?php
// Custom Footer
function footer_layout_0() {
?>
<footer>
	<div class="<?php footerInGrid(); ?>">
		<?php require_once get_stylesheet_directory() . '/content/custom_sections/custom_footer.php'; ?>
		<div class="clearfix"></div>
	</div>
</footer>
<!--
<header>
	<div class="<?php //mastHeadInGrid(); ?>">
		<?php //require_once get_stylesheet_directory() . '/content/custom_sections/custom_masthead.php'; ?>
		<div class="clearfix"></div>
	</div>
</header>
-->
<?php
}
?>
<?php
// Footer Area 1 Col 12
function footer_layout_1() {
?>
<footer>
	<div class="<?php footerInGrid(); ?>">
		<div class="col_12"><?php dynamic_sidebar('footer-area-1'); ?></div>
		<div class="clearfix"></div>
	</div>
</footer>
<?php
}
?>
<?php
// Footer Area 1 Col 11, Footer Area 2 Col 1
function footer_layout_2() {
?>
<footer>
	<div class="<?php footerInGrid(); ?>">
		<div class="col_9"><?php dynamic_sidebar('footer-area-1'); ?></div>
		<div class="col_3"><?php dynamic_sidebar('footer-area-2'); ?></div>
		<div class="clearfix"></div>
	</div>
</footer>
<?php
}
?>
