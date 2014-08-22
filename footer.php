<?php get_sidebar(); ?>

<footer role="contentinfo" class="contentinfo">
<hr>
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php bloginfo( 'name' ); ?></a> &copy;<?php echo date("Y"); ?> <a href="#top" title="Jump back to top">&#8593;</a></p>
  <nav role="navigation" class="nav__secondary">
      <?php
          $args = array(
              'theme_location' => 'nav__secondary',
              'container' => 'false',
              'items_wrap' => '<ul>%3$s</ul>',
              );
          wp_nav_menu($args);
      ?>
  </nav>
  <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/logo.png" class="logo-image" />
</footer>

<?php wp_footer(); ?>

<!-- Scripts -->
    <!--
    Please be sure you need jQuery for your project, if you don't, remove it
    If lt IE9 support is needed, use jQuery 1.x.x, v2 doesn't support it -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-2.0.3.min.js"%3E%3C/script%3E'))</script>


    <script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/general.js"></script>

    <!-- Google Analytics Tracking script !-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42804068-1', 'foundrydoor.com');
  ga('send', 'pageview');

</script>

<!-- Scripts -->

<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
</body>
</html>