<footer class="container">
<nav class="site-header sticky-top py-1">
<?php
      $args = array(
          'theme_location' => 'footer'

      );
      ?>
      <?php wp_nav_menu( $args ) ?>
  </nav>
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  </footer>
  <?php wp_footer(); ?>
</main>
<script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
</html>