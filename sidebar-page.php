<?php
/**
 * @package huhanlin
 */
?>
<div class="widget-area" role="complementary">
	<h1 class="visuallyhidden"><?php _e('Sidebar','huhanlin'); ?></h1>
	<?php if ( !dynamic_sidebar( 'Page Sidebar' ) ) : ?>
  	<aside id="archives" class="widget">
      <h2><?php _e('Pages','huhanlin'); ?></h2>
    	<ul>
      	<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order'); ?>
      </ul>
    </aside>
  <?php endif; ?>
</div><!-- .widget-area -->
