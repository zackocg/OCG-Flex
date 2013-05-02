<?php 
/*--------------------------------------
	M A S T H E A D    L A Y O U T S
----------------------------------------*/
?>
<?php
// Custom Header
function header_layout_0() {
?>

<div class="<?php mastHeadInGrid(); ?>">
	<?php require_once get_stylesheet_directory() . '/content/custom_sections/custom_masthead.php'; ?>
	<div class="clearfix"></div>
</div>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_1() {
?>

<div class="<?php mastHeadInGrid(); ?>">
	
	<div class="<?php showBrandLogo(); ?> col_3"><a href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
	<div class="col_9">
		<?php
			$sidebar = "masthead-widget-area";
			dynamic_sidebar( $sidebar );
		?>
	</div>
	<div class="clearfix"></div>
</div>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_2() {
?>

<div class="<?php mastHeadInGrid(); ?>">
	<div class="<?php showBrandLogo(); ?> col_4"><a href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
	<div class="col_8">
		<?php
			$sidebar = "masthead-widget-area";
			dynamic_sidebar( $sidebar );
		?>
	</div>
	<div class="clearfix"></div>
</div>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_3() {
?>

	<div class="<?php mastHeadInGrid(); ?>">
		<div class="<?php showBrandLogo(); ?> col_5"><a href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
		<div class="col_7">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_4() {
?>

	<div class="<?php mastHeadInGrid(); ?>">
		<div class="<?php showBrandLogo(); ?> col_6"><a href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
		<div class="col_6">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>

<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_5() {
?>

	<div class="<?php mastHeadInGrid(); ?>">
		<div class="<?php showBrandLogo(); ?> col_7"><a href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
		<div class="col_5">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>

<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_6() {
?>

	<div class="<?php mastHeadInGrid(); ?>">
		<div class="<?php showBrandLogo(); ?> col_8"><a href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
		<div class="col_4">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>

<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_7() {
?>

	<div class="<?php mastHeadInGrid(); ?>">
		<div class="<?php showBrandLogo(); ?> col_9"><a href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
		<div class="col_3">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>

<?php
}
?>
<?php
// Center Logo No Widget Area
function header_layout_8() {
?>


	<div class="<?php mastHeadInGrid(); ?>">
		<div class="col_12 masthead-branding-logo-centered"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="clearfix"></div>
	</div>

<?php
}
?>
