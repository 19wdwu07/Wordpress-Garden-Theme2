<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>

    <!-- search form -->
    <div class="container text-info my-5">
      <?php get_search_form(); ?>
    </div>


    <header class="container bg-light">

      <!-- logo -->

      <div class="bg-info">
      <?php
      wp_nav_menu(
        array(
        'theme_location' => 'top-menu',
       //  'menu' => 'Top Bar',
        'menu_class' => 'top-bar'
        )
      );


      ?>

    </div>

    </header>
