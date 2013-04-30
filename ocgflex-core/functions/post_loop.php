<?php
/* Standard Loop for Posts */

function post_loop() {
 if (have_posts()) : 
 	while (have_posts()) : the_post();    
      get_template_part('partials/partial', 'single-post');
     
    endwhile;
     get_template_part('ocgflex-core/functions/post_nav_below');
 endif;
}

?>