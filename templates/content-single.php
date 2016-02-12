<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header class="post-header flex flex-center" style="background: url(<?php the_post_thumbnail_url(); ?>) center center; background-size: cover; background-attachment: fixed">
      <div class="entry-title center-block">
      <div class="flex flex-column">
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
      </div>
    </header>

    <div class="entry-content">
      <div class="row center-xs">
        
        <div class="col-sm-8 text-justify">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
