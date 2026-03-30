<?php
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
?>

<?php get_header(); ?>

<main class="single-product-page">
  <?php while (have_posts()) : the_post(); global $product; ?>

  <div class="product-container">
    
    <div class="product-image">
      <div class="gallery-side">
        <?php
        foreach( $product->get_gallery_image_ids() as $id){
          echo wp_get_attachment_image($id, 'thumbnail', false, [
    'data-full' => wp_get_attachment_image_url($id, 'full')
]);
        }
        
        ?>

      </div>
      <div class="main-image">
        <?php 
        echo $product->get_image('large');
         ?>

      </div>
      
      
    </div>

    <div class="product-info">
      <h1 class="title"><?php the_title(); ?></h1>
      <span class="price"><?php echo $product->get_price_html(); ?></span>
      <div class="description"><?php echo $product->get_description(); ?></div>
      <?php woocommerce_template_single_add_to_cart(); ?>
    </div>

  </div>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>