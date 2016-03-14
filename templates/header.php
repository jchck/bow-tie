<nav class="navbar navbar-default">

  <div clas="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php 
    if (has_nav_menu( 'primary_navigation' )) :
        wp_nav_menu( ['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'] );
    endif;
    ?>
  </div>

</nav>

<!-- <header class="row center-xs bg-white">
  <div class="col-xs-12 col-sm-11 flex between-sm middle-xs center-xs navbar navbar-default">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1><a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>

    <div class="collapse navbar-collapse">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </div>
  </div>
</header>
 -->