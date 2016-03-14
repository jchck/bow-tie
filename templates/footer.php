<footer class="col-xs-12">
	<div class="box box-black clearfix pr0 pl0">
		<div class="row center-xs">
			<a class="bow-tie my1" href="<?= esc_url(home_url('/')); ?>">
				<?php get_template_part( 'templates/bow', 'tie' ); ?>
			</a>
		</div>
		<div class="row center-xs">
			<a class="btn btn-transparent" href="<?= esc_url(home_url('/support')); ?>">Want Premimm Support?</a>
		</div>
		<div class="row center-xs">
			<div class="col-xs-11">
				<h5 class="left">
					<a href="<?php echo admin_url(); ?>" target="_blank" class="login">&copy;</a> <?php echo date('Y') ?> <a href="/"><?php bloginfo( 'name' ); ?></a>
				</h5>
				<h5 class="right">
					<a href="http://jstn.ch/ck" target="_blank" title="Justin Chick is a freelance front-end developer">Who made this?</a>
				</h5>
			</div>
		</div>
	</div>
</footer>
