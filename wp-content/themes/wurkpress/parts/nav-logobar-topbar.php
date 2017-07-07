<!--
<div class="toplinks-bar">
	<div class="row">
		<div class="large-12 columns">
			<div class="toplinks-bar-left">
				Top Links Left
			</div>
			<div class="toplinks-bar-right">
				Top Links Right
			</div>
		</div>
	</div>
</div> -->

<div class="logo-bar">
	<div class="row">

		<div class="medium-6 columns">
			<div class="logo-bar-left">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/login-logo.png" alt="Logo"/></a>
			</div>
		</div>

		<div class="medium-6 columns text-right">
			<ul class="socials">
				<li>
					<a href="https://twitter.com/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/twitter-icon.png" alt="Twitter"/></a>
				</li>
				<li>
					<a href="https://facebook.com/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/facebook-icon.png" alt="Facebook"/></a>
				</li>
				<li>
					<a href="https://linkedin.com/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/linkedin-icon.png" alt="LinkedIn"/></a>
				</li>
			</ul>
		</div>

	</div>
</div>

<div class="top-bar" id="main-menu">
	<div class="row">
		<div class="large-12 columns">
			<div class="top-bar-left show-for-medium">
				<?php joints_top_nav(); ?>
			</div>

			<div class="top-bar-right show-for-small-only">
				<ul class="menu">
					<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
					<li><a class="menu-button" id="menuButton" type="button" data-toggle="off-canvas"><span class="burger-icon"></span></a></li>
					<li><a data-toggle="off-canvas" data-off-canvas><?php _e( 'Menu', 'jointswp' ); ?></a></li>
				</ul>
			</div>
			<!--
            <div class="top-bar-right">
            	Top Bar Right Elements
			</div>
 			-->
                    </div>
                </div>
            </div>