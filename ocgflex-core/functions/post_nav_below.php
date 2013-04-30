<?php
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="button brown"';
}
?>

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<div id="nav-below" class="navigation">
<div class="nav-previous" style="float:left;"><?php next_posts_link(sprintf(__( '%s older articles', 'ocgflex' ),'<span class="meta-nav">&larr;</span>')) ?></div>
<div class="nav-next" style="float:right;"><?php previous_posts_link(sprintf(__( 'newer articles %s', 'ocgflex' ),'<span class="meta-nav">&rarr;</span>')) ?></div>
<div class="clearfix"></div>
</div>
<?php } ?>