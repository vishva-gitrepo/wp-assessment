<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<p>Salary: <?php echo get_post_meta(get_the_ID(),'salary',true); ?></p>
<p>Location: <?php echo get_post_meta(get_the_ID(),'location',true); ?></p>
<?php get_footer(); ?>
