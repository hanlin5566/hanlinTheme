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
	?>
	<div class="postcopyright">
		<strong>©版权声明：</strong>本文为【<a href="http://www.huhanlin.com" >翰林小院</a>】（<a href="http://www.huhanlin.com" >huhanlin.com</a>）原创文章，转载时请注明出处！
	</div>
	<?php
		  wp_link_pages( array(
				'before' => '<p class="page-links">' . __( 'Pages: ', 'huhanlin' ),
				'after'  => '</p>',
			) );
		?>
      <div class="posts-navigation">
          <?php
          previous_post_link( '<div class="nav-previous">%link</div>', '%title' );
          next_post_link( '<div class="nav-next">%link</div>', '%title' );
          ?>
          <br>
      </div>
  <div>
  <p class="postmetadata"><?php
		_e('Posted on <time datetime="','huhanlin');
		echo date('Y-m-d') . '">'; 
		the_time('Y-m-d H:i:s');
		/*_e('</time> by ','huhanlin');
		the_author_link(); */
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
      <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
      <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</article>
