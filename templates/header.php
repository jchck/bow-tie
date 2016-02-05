<header class="row center-xs mr0 ml0 bg-white">
  <div class="col-xs-11 flex between-xs middle-xs">
    <h1><a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
