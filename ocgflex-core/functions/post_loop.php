<?php
/* Standard Loop for Posts */

function post_loop() {
 if (have_posts()) : 
 	while (have_posts()) : the_post();    
      the_title();
      the_content();
    endwhile;
 endif;
}

?>