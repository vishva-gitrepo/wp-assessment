<?php get_header(); ?>

<div class="container my-5">
  <h1><?php the_title(); ?></h1>
  <div class="mb-3"><?php the_content(); ?></div>

  <p><strong>Salary:</strong> <?php echo get_post_meta(get_the_ID(),'salary',true); ?></p>
  <p><strong>Location:</strong> <?php echo get_post_meta(get_the_ID(),'location',true); ?></p>
</div>

<?php get_footer(); ?>
