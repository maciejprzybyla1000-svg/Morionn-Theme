<?php



 get_header(); ?>

<main>

  <section class="hero">
    <img src="https://images.unsplash.com/photo-1773423203025-d6060d1e5a8c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="hero">
    <div class="hero-text">
      <h1>Nowa kolekcja</h1>
      <p>Morionn</p>
    </div>
  </section>


  <section class="products">
    <h2>New Products</h2>
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 8,
      'orderby' => 'date',
      'order' => 'DESC',
    );

    $query = new WP_Query($args);

    if($query->have_posts()) : ?>
      <div class="products-show">
        <?php while ($query->have_posts()) : $query->the_post();
        global $product; ?>
        
        <div class="product-card">
          <a href="<?php the_permalink(); ?>">
            <?php echo $product->get_image('morion-product'); ?>
            <h3><?php the_title(); ?></h3>
            <span class="price"><?php echo $product->get_price_html(); ?></span>
          </a>
          <?php woocommerce_template_loop_add_to_cart(); ?>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>

      <?php else : ?>
        <p>Brak produktów.</p>
      <?php endif; ?>



  </section>
</main>


<?php get_footer(); ?>
