<div class="top-bar" id="main-menu">
	<div class="row">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right show-for-medium">
			<?php joints_top_nav(); ?>
		</div>
		<div class="top-bar-right show-for-small-only">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a class="menu-button" id="menuButton" type="button" data-toggle="off-canvas"><span class="burger-icon"></span></a></li>
				<li><a data-toggle="off-canvas" data-off-canvas><?php _e( 'Menu', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>