
<?php get_header(); ?>


<section class="container page-wrap m-auto">

  <div class="row">
<div class="col-lg-9 ">
      <h1 class="mt-5 text-info"> <?php the_title(); ?>   </h1>

      <?php get_template_part('includes/section','content'); ?>
</div>
<div class="col-lg-3 widget pl-5 mt-5">

  <?php if(is_active_sidebar('page-sidebar')) :?>
    <?php dynamic_sidebar('page-sidebar'); ?>

  <?php endif; ?>
</div>
</section>


<?php get_footer(); ?>
