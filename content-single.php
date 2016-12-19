<?php
/**
 * @package huhanlin
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
  <h1 id="page-title"><?php the_title(); ?></h1>
  </header>
  <div class="entry clearfix">
    <?php
     the_content();
		  wp_link_pages( array(
				'before' => '<p class="page-links">' . __( 'Pages: ', 'huhanlin' ),
				'after'  => '</p>',
			) );
		?>
  </div><!--.entry-->
  <p class="postmetadata"><?php 
		_e('Posted on <time datetime="','huhanlin');
		echo date('Y-m-d') . '">'; 
		the_time('F j, Y');
		_e('</time> by ','huhanlin');
		the_author_link(); 
		echo '<br />';
		_e('Categories: ','huhanlin');
		the_category(', '); 
		echo '<br />';
		the_tags();
  ?></p>
  <?php 
		$editpost =  sprintf( __('Edit This Post' , 'huhanlin') );
		edit_post_link($editpost, '<p class="button editlink">', '</p>'); 
	?>
</article>
