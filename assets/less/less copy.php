<?php

function ocgflex_compile_less() {

//Global Variables From site_config.php

global $dev;
global $BoxedLayout_BackgroundColor;


// End Global Variable


if($dev == false) { 
 echo '<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( \'stylesheet_url\' ); ?>" />';
} else { 


//echo get_template_directory_uri() . '/ocgflex-core/lesscompiler/lessc.inc.php';

include_once get_stylesheet_directory() . '/ocgflex-core/lesscompiler/lessc.inc.php';





$less = new lessc( get_stylesheet_directory() . '/assets/less/master_style.less');
$less->setVariables(array(
  "background-color" => $BoxedLayout_BackgroundColor,
  "base" => "960px"
));
$stylesheet = '/* Theme Name: OCG FLex
Theme URI: http://www.ocglabs.com/
Description: This is the parent OCG Flex theme for Wordpress.
Version: 1.0
Author: OCG Creative
Author URI: http://www.ocgcreative.com/
*/ '.$less->parse();
file_put_contents( get_stylesheet_directory() . '/assets/css/master_style.css', $stylesheet);




//
$less = new lessc( get_stylesheet_directory() . '/assets/less/kickstart_uikit/kickstart_master.less');
/*
$less_uikit->setVariables(array(
  "background-color" => $BoxedLayout_BackgroundColor
));
*/
$stylesheet = '/* Theme Name: OCG FLex
Theme URI: http://www.ocglabs.com/
Description: This is the parent OCG Flex theme for Wordpress.
Version: 1.0
Author: OCG Creative
Author URI: http://www.ocgcreative.com/
*/ '.$less->parse();
file_put_contents( get_stylesheet_directory() . '/assets/css/kickstart_master.css', $stylesheet);

}


echo '<script type="text/javascript" charset="utf-8">';
echo 'less.env = "development"';
echo 'less.watch();';
echo '</script>';


}
?>




