<div class="col-sm-4">
	<article <?php post_class('box box-white my1'); ?>>
		<header class="flex center-xs" style="background: url(<?php the_post_thumbnail_url(); ?>) center center; background-size: cover;">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</article>
</div>