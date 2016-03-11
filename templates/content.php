<div class="col-xs-11 col-sm-6 col-md-4 flex">
	<a href="<?php the_permalink(); ?>" <?php post_class('box box-white my1'); ?>>
		<header class="flex center-xs" <?php if(has_post_thumbnail()): ?> style="background: url(<?php the_post_thumbnail_url(); ?>) center center; background-size: cover;"<?php endif; ?>>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</a>
</div>