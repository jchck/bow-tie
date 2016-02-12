<?php
/**
 * Template Name: Biography Template
 */
?>
<div class="row center-xs">
	<div class="col-xs-11">
		<?php while (have_posts()) : the_post(); ?>
		  <?php get_template_part('templates/page', 'header'); ?>
		  <?php get_template_part('templates/content', 'page'); ?>
		<?php endwhile; ?>
	</div>
</div>
