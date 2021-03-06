<?php
/**
 * @package huhanlin
 * 点击日历后展示的归档页面
 */
?>
<?php get_header(); ?>
<div class="sixteen columns" id="main">
  <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
  <div class="twelve columns alpha" role="main">
  <?php if ( have_posts() ) : ?>   	
    <h1>
      <?php 
				if ( is_day() ) : 
					_e('Daily Archives for ','huhanlin');
					echo get_the_date(); 
				elseif ( is_month() ) : 
					_e('Monthly Archives for ','huhanlin');
					echo get_the_date( 'F Y' ); 
				elseif ( is_year() ) : 
					_e('Yearly Archives for ','huhanlin');
					echo get_the_date( 'Y' ); 
				elseif ( is_category() ) : 
					_e('Yearly Archives for ','huhanlin');
			 	else : 
					_e('Archives','huhanlin');
				endif; 
			?>
    </h1>
    <hr />
		<?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <!--<time datetime="' . date('Y-m-d') . '" class="datehead"><?php /*the_time('Y-m-d H:i:s'); */?></time>-->
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <div class="entry">
          <?php
            the_excerpt();
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
        </div><!--.entry-->
        <!--<p class="postmetadata">
					<?php
/*						_e('Posted by ','huhanlin');
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
          */?>
        </p>-->
      </article>
	    <hr />
		<?php endwhile; ?>
    <div class="nav-links"><p class="page-links"><?php posts_nav_link(' &nbsp; &nbsp; '); ?></p></div>
  <?php 
		else : 
  		get_template_part( 'content', 'none' );
    endif;
	?>
  </div><!--.twelve.columns-->
	<div class="four columns omega">
  	<?php get_sidebar(); ?>
  </div><!--.four.columns-->  
</div><!--.sixteen.columns-->
<?php get_footer(); ?>
