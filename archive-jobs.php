<?php get_header(); ?>

<div class="container my-5">

  <h1 class="mb-4">Job Openings</h1>

  <?php if(have_posts()): ?>
    <div class="row g-4">
      <?php while(have_posts()): the_post(); ?>
        <div class="col-md-6">
          <div class="card p-4 shadow-sm h-100">
            <h2><?php the_title(); ?></h2>
            <div class="mb-3"><?php the_content(); ?></div>

            <p><strong>Salary:</strong> <?php echo get_post_meta(get_the_ID(),'salary',true); ?></p>
            <p><strong>Location:</strong> <?php echo get_post_meta(get_the_ID(),'location',true); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p>No jobs found.</p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
