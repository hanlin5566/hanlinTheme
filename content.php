<?php
/**
 * @package huhanlin
 * 首页展示的页面
 */
?>

<?php
  /*echo '<time datetime="' . date('Y-m-d') . '" class="datehead">';
  the_time('Y-m-d H:i:s');
  echo '</time>';*/
?>
<article <?php post_class('blurbing') ?> id="post-<?php the_ID(); ?>">
	<?php
  if(has_post_thumbnail()) {
    echo '<figure class="thumbnailsquare">';
    the_post_thumbnail('thumbnail');
    echo '</figure>';
  }else{
      echo  '<figure class="thumbnailsquare">'; don_the_thumbnail(); echo '</figure>';
  }
  ?>
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="entry clearfix">
    <?php the_excerpt(); ?>
    <?php
    echo '<time datetime="' . date('Y-m-d') . '" class="datehead">';
    the_time('Y-m-d H:i:s');
    echo ' | ';
    _e('read','huhanlin');post_views('','');
    echo ' | ';
    $one =  sprintf( __('1 Comment' , 'huhanlin') );
    $more = sprintf( __('Comments' , 'huhanlin') );
    comments_popup_link($more, $one, '% '.$more);
    echo '</time>';
    ?>
    <?php

    ?>
  </div><!--.entry-->
  <!--<p class="postmetadata">
    <?php
/*			_e('Posted in ','huhanlin');
			the_category(', '); 
		*/?>
    <?php
/*		if (!post_password_required() AND (comments_open() OR (get_comments_number() > 0))) {
			echo '<span class="commentlink">';
			$one =  sprintf( __('1 Comment' , 'huhanlin') );
			$more = sprintf( __('Comments' , 'huhanlin') );
			comments_popup_link($more, $one, '% '.$more); 
			echo '</span>';
		}
		*/?>
  </p>-->
</article>