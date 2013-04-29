<?php 
/*--------------------------------------
	M A S T H E A D    L A Y O U T S
----------------------------------------*/
?>
<?php
// Custom Header
function header_layout_0() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<?php require_once get_stylesheet_directory() . '/content/custom_sections/custom_masthead.php'; ?>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_1() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_3"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="col_9">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_2() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_4"><a href="<?php echo site_url(); ?>" title="<?php wp_title('|', true, 'right'); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="col_8">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_3() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_5"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="col_7">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_4() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_6"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="col_6">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_5() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_7"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="col_5">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_6() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_8"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="col_4">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Logo Left | Widget Area Right
function header_layout_7() {
?>
<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_9"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="col_3">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
<?php
// Center Logo No Widget Area
function header_layout_8() {
?>

<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="col_12 masthead-branding-logo-centered"><a href="<?php echo site_url(); ?>"><?php wp_title('|', true, 'right'); ?></a></div>
		<div class="clearfix"></div>
	</div>
</header>
<?php
}
?>
