<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="top-bar">
      <p class="top-bar-text">darmowa dostawa od 300zł</p>
  </div>
  <nav>
    <a class="logo" href="<?php echo home_url(); ?>">
      <?php 
      if (has_custom_logo()) :
        the_custom_logo();
      else :
        bloginfo('name');
      endif;
      ?>
    </a>
    
    <ul>
      <li><a href="#">Produkty</a></li>
      <li><a href="#">Personalizacja</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Kontakt</a></li>
      <li><a href="#">O nas</a></li>  
    </ul>

    <div class="usable-icons">
      <div class="serach button" >
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><g id="_01_align_center" data-name="01 align center"><path d="M24,22.586l-6.262-6.262a10.016,10.016,0,1,0-1.414,1.414L22.586,24ZM10,18a8,8,0,1,1,8-8A8.009,8.009,0,0,1,10,18Z"/></g>
        </svg>

      </div>
      <div class="account button">
        
        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24" height="24"><path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z"/><path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z"/>
        </svg>

      </div>
      <a class="cart button" href="<?php echo wc_get_cart_url(); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="24" height="24"><path d="M9,22c0,1.1-.9,2-2,2s-2-.9-2-2,.9-2,2-2,2,.9,2,2Zm8-2c-1.1,0-2,.9-2,2s.9,2,2,2,2-.9,2-2-.9-2-2-2ZM23,3h-6c-.55,0-1,.45-1,1s.45,1,1,1h6c.55,0,1-.45,1-1s-.45-1-1-1Zm-.8,5.02c-.55-.11-1.07,.24-1.18,.78l-.36,1.78c-.28,1.4-1.52,2.41-2.94,2.41H5.42l-.94-8h7.52c.55,0,1-.45,1-1s-.45-1-1-1H4.24l-.04-.35c-.18-1.51-1.46-2.65-2.98-2.65h-.22C.45,0,0,.45,0,1s.45,1,1,1h.22c.51,0,.93,.38,.99,.88l1.38,11.7c.3,2.52,2.43,4.42,4.97,4.42h10.44c.55,0,1-.45,1-1s-.45-1-1-1H8.56c-1.29,0-2.41-.82-2.83-2h11.99c2.38,0,4.44-1.69,4.9-4.02l.36-1.78c.11-.54-.24-1.07-.78-1.18Z"/>
        </svg>
        </a>
      </div>
    </div>
  </nav>


</header>
  
