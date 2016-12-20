<?php
/**
 * @package huhanlin
 */ 
?>
<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <label for="searchbox2" class="visuallyhidden"><?php _e('Enter keywords to search:','huhanlin'); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="searchbox" />
	<input type="submit" id="searchsubmit" value="搜索" />
</form>
