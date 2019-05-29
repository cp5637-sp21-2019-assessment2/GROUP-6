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


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
  <nav class="site-header sticky-top py-1">
      <?php
      $args = array(
          'theme_location' => 'footer'

      );
      ?>
      <?php wp_nav_menu( $args ) ?>
  </nav>

        <main role="main">

        <div class="container">
            <div class="blog-header">
                <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
                <p class="load blog-description"><?php bloginfo('description'); ?></p>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

