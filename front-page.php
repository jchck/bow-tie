<div class="h100" style="background: url(/content/themes/bow-tie/dist/images/farm.jpg) center; background-size: cover; background-attachment:fixed">
<div class="row center-xs">
<div class="col-xs-11">


	<div class="row center-xs gutter-x-padding section">
		<div class="col-sm-6 col-xs-12">
			<div class="border text-center">
				<h2>A WordPress theme that is so fresh and so clean</h2>
				<a href="#" class="btn btn-black btn-lg">Download</a>
				<a href="#" class="btn btn-black btn-lg">Fork</a>
				<h3>Made with care by:</h3>
				<a href="http://jstn.ch/ck" target="_blank" title="Justin Chick is a freelance front-end developer" class="btn btn-transparent">Justin Chick</a>
			</div>
		</div>
	</div>

	<div class="row section">
		<div class="col-xs-12">
			<p class="section-title color-black text-center">Latest Posts</p>
			<div class="box box-black">
				<div class="row center-xs">
					<?php $the_query = new WP_Query( array( 'posts_per_page' => 3 ) ); ?>
					<?php if ($the_query->have_posts()): ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="col-sm-4 flex">
								<div class="box box-white">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<div class="box box-white">
							<h2>Whoops!</h2>
							<p>Look likes someone forgot to add some posts...</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="row center-xs section">
		<div class="col-xs-8">
			<div class="box box-white box-border">
				<div class="about">
					<p>Bow Tie is a WordPress theme made by front-end developer and digital nomad Justin Chick.</p>
					<a href="#" class="btn btn-black base my1">What Makes This So Great?</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row section" id="instafeed">
	</div>

</div>
</div>

</div>