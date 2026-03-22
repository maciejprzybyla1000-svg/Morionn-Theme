<?php
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
?>

<?php get_header(); ?>

<main class="single-product-page">
  <?php while (have_posts()) : the_post(); global $product; ?>

  <div class="product-container">
    
    <div class="product-image">
      <?php woocommerce_show_product_images(); ?>
    </div>

    <div class="product-info">
      <h1><?php the_title(); ?></h1>
      <span class="price"><?php echo $product->get_price_html(); ?></span>
      <div class="description"><?php the_content(); ?></div>
      <?php woocommerce_template_single_add_to_cart(); ?>
    </div>

  </div>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>