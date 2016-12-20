<?php
/**
 * @package huhanlin
 */
?>
	</div><!--.container-->
</div><!--.section-->
<div class="section mainmenu" role="navigation">  
  <div class="sixteen columns alpha omega">
	  <?php
    /*  wp_nav_menu( array(
				'theme_location' => 'secondary', 
				'container' => 'nav',
				'container_class' => 'container menus',
				'container_id' => 'footer-navigation',
				'menu_class' => 'mdd-menu',
				'depth' => 2,
			) );*/
	  ?>
  </div>
</div><!--.section menu-->
<div class="section footer">
  <footer class="container" role="contentinfo">
    <hr>
  	<div class="sixteen columns">
  	  <p><?php 
				_e('Copyright &copy; ','huhanlin');
				echo date("Y"); 
				?> : <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
          <?php printf( __( 'Theme: %1$s by %2$s.', 'huhanlin' ), 'huhanlin', '<a href="https://github.com/hanlin5566/hanlinTheme.git" rel="designer">hanlinTheme</a>' ); ?>
      </p>
	  </div>
  </footer>
</div><!--.section.footer-->
<?php wp_footer(); ?>
</body>
</html>