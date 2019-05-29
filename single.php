
<?php get_header(); ?>
  




  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <!-- Three columns of text below the carousel -->



    <!-- START THE FEATURETTES -->

    

    <div class="row featurette">
      <div class="col-md-7">
          <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content'); ?>

    <?php endwhile; ?>
    <?php else : ?>
    <p><?php __('No posts'); ?> </p>

    <?php endif; ?>

    

    

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
<?php get_footer(); ?>
