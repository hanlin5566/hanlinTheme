<?php
/**
 * @package huhanlin
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
  <div class="twelve columns alpha" role="main">
  <?php if ( have_posts() ) : ?>
    <h1 id="archive-title"><?php 
			_e('Category Archives: ','huhanlin');
			single_cat_title(); 
		?></h1>  
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <time datetime="' . date('Y-m-d') . '" class="datehead"><?php the_time('F j, Y'); ?></time>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <div class="entry">
          <?php 
            the_excerpt(); 
          ?>
        </div><!--.entry-->
        <p class="postmetadata"><?php 
					_e('Posted by ','huhanlin');
					the_author_link(); 
					_e(' in ','huhanlin');
					the_category(', '); 
	
					if (!post_password_required() AND (comments_open() OR (get_comments_number() > 0))) {
						echo '<span class="commentlink">';
						$one =  sprintf( __('1 Comment' , 'huhanlin') );
						$more = sprintf( __('Comments' , 'huhanlin') );
						comments_popup_link($more, $one, '% '.$more); 
						echo '</span>';
					}
        ?></p>
      </article>
      <hr />
    <?php endwhile; ?>
  <?php else : ?>
    <h1><?php _e( 'Not Found', 'huhanlin' );?></h1>
    <div class="hentry">
    <p><?php _e( 'We\'re sorry.  The posts you were looking for could not be found.', 'huhanlin' ); ?></p>
    <p> <?php _e( 'Perhaps using the search form below would help?', 'huhanlin' ); ?> </p>
    <?php get_search_form(); ?> 
  <?php endif; ?>
  </div><!--.twelve.columns-->
	<div class="four columns omega">
    <?php get_sidebar(); ?>
  </div><!--.four.columns-->  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>