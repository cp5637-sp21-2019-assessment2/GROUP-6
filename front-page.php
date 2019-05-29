

<!doctype html>

<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>
        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?> 
        <?php wp_title(); ?>
    </title>


    <!-- Bootstrap core CSS -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="<php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        .showcase{
            background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
        }

    </style>
  </head>
  <body>
  <nav class="site-header sticky-top py-1">
      <?php
      $args = array(
          'theme_location' => 'footer'

      );
      ?>
      <?php wp_nav_menu( $args ) ?>



<section class="showcase">
          <div class="container">
              <h1><?php echo get_theme_mod('showcase_heading', 'Ian Kirkwood'); ?></h1>
              <p>Educator, Motivator and Motorcyclist</p>
          </div>
      </section>
      <section class="boxes">
          <div class="container">
              <div class="row">
                  <div class="col-mod-4">
                      <div class="box">
                          <i class="fas fa-globe-americas"></i>
                          <h3>Sustainability</h3>
                          <p>Business and economic sustainability is considered essential for survival of the human race and for the maintenance of the earth as a habitable environment. Damage is being caused by businesses and that damage needs to be stopped, prevented, and repaired if life as it is currently understood is to prevail. Businesses are a part of modern global society and collectively we owe our existence and survival to the life giving sources of the earth. Hence business activities and outputs must be seen from an eco-social perspective more than they need to be seen from a simple economic perspective.</p>
                      </div>
                  </div>

                  
                    <div class="col-mod-4">
                            <div class="box">
                                <i class="fas fa-atlas"></i>
                                <h3>Education</h3>
                                <p>Goals should be straightforward and emphasize what you want to happen. Specifics help us to focus our efforts and clearly define what we are going to do. Specific is the What, Why, and How of the SMART model. WHAT are you going to do? Use action words such as direct, organize, coordinate, lead, develop, plan, build etc. WHY is this important to do at this time? What do you want to ultimately accomplish? HOW are you going to do it? Ensure the goal you set is very specific, clear and easy. Instead of setting a goal to lose weight or be healthier, set a specific goal to lose 2cm off your waistline or to walk 5 miles at an aerobically challenging pace.</p>
                            </div>
                        </div>

                    <div class="col-mod-4">
                        <div class="box">
                            <i class="fas fa-motorcycle"></i>
                            <h3>Motorcycling</h3>
                            <p>Motorcyclists have long championed riding as their main road to stress relief and positive mental health. Today, the results of a neurobiological study conducted by a team of three researchers from UCLA's Semel Institute for Neuroscience and Human Behavior yielded pioneering scientific evidence revealing the potential mental and physical benefits of riding. Funded by Harley-Davidson, the study found that motorcycling increased metrics of focus and attention, and decreased relative levels of cortisol, a hormonal marker of stress</p>
                        </div>
                    </div>
        
              </div>
          </div>
      </section>

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