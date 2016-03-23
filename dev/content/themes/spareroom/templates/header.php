<?php
  $homePage = get_page_by_title( 'Home Page' );
  $homeID = $homePage->ID;
?>
<header class="banner" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 text-left">
        <?php
          if(get_field('header_quote', $homeID)){
            the_field('header_quote', $homeID);
          }
        ?>
      </div>
      <div class="col-sm-6 text-center">
        <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
        <nav class="nav-main" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills nav-justified'));
            endif;
          ?>
        </nav>
      </div>
      <div class="col-sm-3 text-right">
        <?php
          if(get_field('address', $homeID)){
            the_field('address', $homeID);
          }
          echo "<br />";
          if(get_field('phone_number', $homeID)){
            the_field('phone_number', $homeID);
          }
        ?>
      </div>
    </div>
  </div>
</header>
