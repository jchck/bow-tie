<?php 
	$categoryArgs = array(
		'title_li' => '' 
	); 
?>

<div class="meta">
	<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('M j, Y'); ?></time>
	<ul class="list-inline mb0">
		<?php wp_list_categories( $categoryArgs ); ?>
	</ul>
</div>