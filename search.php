<?php
//Show Mast Head
get_header();

//Show Title of Page
get_template_part('partials/partial', 'pagetitle');

//Show Body Content
get_template_part('content/content', 'right-sidebar');


//Show Footer
get_footer();

?>