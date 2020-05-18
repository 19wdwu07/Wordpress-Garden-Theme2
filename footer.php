<footer class="text-info myTheme jumbotron ">
  <div class="container">
  <?php
  // wp_nav_menu(
  //   array(
  //   'theme_location' => 'footer-menu',
  //  //  'menu' => 'Top Bar',
  //   'menu_class' => 'top-bar'
  //   )
  // );
  ?>
</div>
 <p class="footerText"><?php echo get_theme_mod('garden_footerMessage'); ?></p>


  <div class="py-3 row">
  <p class="col footerText"> facebook </p> <p class="col">twitter </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
