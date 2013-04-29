<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<title>OCG Flex</title>

<?php wp_head(); ?>

<script type="text/javascript" charset="utf-8">
less.env = "development";
less.watch();
</script>

</head>
<body <?php body_class(); ?>>
<div id="primary-content-border" class="<?php boxedLayout(); ?>">
<div id="primary-content-wrapper" class="<?php boxedLayout(); ?>">

<?php
global $mastHeadLayout;
switch ($mastHeadLayout) {
    case 0:
        header_layout_0();
        break;
    case 1:
        header_layout_1();
        break;
    case 2:
        header_layout_2();
        break;
    case 3:
        header_layout_3();
        break;
    case 4:
        header_layout_4();
        break;
    case 5:
        header_layout_5();
        break;
    case 6:
        header_layout_6();
        break;
    case 7:
        header_layout_7();
        break;
    case 8:
        header_layout_8();
        break;
}
?>


<!-- Header Navigation -->
<?php useKickstartNav(); ?>

<!-- Ubermenu -->
<?php useUberMenu(); ?>





