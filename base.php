<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class('gutter-x-padding'); ?>>

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <div class="wrap container-fluid" role="document">
      <div class="" style="background: url(/content/themes/bow-tie/dist/images/farm.jpg) center; background-size: cover; background-attachment:fixed; height: 100vh">
      <?php 
        do_action( 'get_header' ); 
        get_template_part( 'templates/header' );
      ?>
      <div class="content row center-xs">
        <main class="col-xs-11">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if ( Setup\display_sidebar() ) : ?>
        <aside class="sidebar">
          <?php include Wrapper\sidebar_path(); ?>
        </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
      </div>
    </div><!-- /.wrap .container-fluid -->
  
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
      get_template_part( 'templates/google', 'font' );
    ?>

  </body>
</html>
