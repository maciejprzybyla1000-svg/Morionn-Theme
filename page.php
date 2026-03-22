<?php get_header(); ?>

<main class="page-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="page-container">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>