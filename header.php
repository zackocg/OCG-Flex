


<html>

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<title>OCG Flex</title>

<?php wp_head(); ?>

<?php
//Compile Less if in Developer Mode
//ocgflex_compile_less();
?>

<script type="text/javascript" charset="utf-8">
less.env = "development";
less.watch();
</script>

</head>
<body>
<div id="primary-content-wrapper" class="<?php boxedLayout(); ?>">

<header>
	<div class="<?php mastHeadInGrid(); ?>">
		<div class="masthead-branding-logo col_5"><a href="/">Home Page</a></div>
		<div class="col_7">
			<?php
				$sidebar = "masthead-widget-area";
				dynamic_sidebar( $sidebar );
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>


<!-- Header Navigation -->
<?php useKickstartNav(); ?>

<!-- Ubermenu -->
<?php useUberMenu(); ?>





