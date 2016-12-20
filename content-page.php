 <?php
/**
 * @package huhanlin
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 id="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
  <div class="entry clearfix">
    <?php
      the_content();
		  wp_link_pages( array(
				'before' => '<p class="page-links">' . __( 'Pages: ', 'huhanlin' ),
				'after'  => '</p>',
			) );
		?>
  </div><!--.entry-->
  <?php
		$editpage =  sprintf( __('Edit This Page' , 'huhanlin') );
		edit_post_link($editpage, '<p class="button editlink">', '</p>');
	?>
</article>
