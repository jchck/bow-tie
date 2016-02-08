<?php 
	$categoryArgs = array(
		'title_li' => '' 
	); 
?>

<div class="meta text-right">
	
	<ul class="list-inline mb0 ml0">
		<?php wp_list_categories( $categoryArgs ); ?>
	</ul>
	<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('M j, Y'); ?></time>
</div>