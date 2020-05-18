<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <div class="">
      <div class="bg-info">
        <h1 class="display-4 text-light siteTitle"> <?php echo get_theme_mod('garden_siteTitleText'); ?></h1>
      </div>
    <!-- search form -->
    <div class="container text-info my-5">
      <?php get_search_form(); ?>
    </div>


    <header class="myTheme container-fluid">

      <!-- logo -->

      <div class="container-fluid">
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
  </div>
