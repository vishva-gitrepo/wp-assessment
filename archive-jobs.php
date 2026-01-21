<?php get_header(); ?>
<h1>Job Openings</h1>
<?php while(have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<p><?php echo get_post_meta(get_the_ID(),'salary',true); ?></p>
<p><?php echo get_post_meta(get_the_ID(),'location',true); ?></p>
<hr>
<?php endwhile; ?>
<?php get_footer(); ?>
