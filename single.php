<?php while (have_posts()) : the_post(); ?>

	<article <?php post_class( 'col-xs-12' ); ?>>

		<header class="post-header flex flex-center" style="background: url(<?php the_post_thumbnail_url(); ?>) center center; background-size: cover; background-attachment: fixed">
			<div class="entry-title center-block">
				<div class="flex flex-column">
					<h1><?php the_title(); ?></h1>
					<?php get_template_part('templates/entry-meta'); ?>
				</div>
			</div>
		</header>

		<div class="row center-xs">
			<div class="col-xs-12 col-md-8">
				<div class="entry-content border-base">
					<?php the_content(); ?>

					<footer>
						<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
					</footer>
					<?php comments_template('/templates/comments.php'); ?>

					<?php get_template_part('templates/content-single', get_post_type()); ?>

				</div>
			</div>
		</div>

	</article>

<?php endwhile; ?>