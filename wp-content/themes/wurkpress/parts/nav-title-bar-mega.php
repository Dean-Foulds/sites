<div data-sticky-container>

	<div class="title-bar" data-sticky data-margin-top='0'>
		<div id="title-bar-row" class="row">
					<div class="medium-2 small-7 columns">
						<div class="logo" data-logo-url="<?php bloginfo('stylesheet_directory'); ?>/assets/images/spana-logo.png">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/spana-logo.png" alt="Logo"/>
							</a>
						</div>

						<ul class="menu sp-offcanvas-toggle show-for-small-only">
							 <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
							<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
						</ul>

					</div>
					<div class="medium-10 small-5 columns top-nav">
						<div class="row collapse">
							<div class="medium-7 hide-for-small-only columns text-center">

								<?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>

							</div>
							<div class="medium-3 medium-push-2 columns text-right">
								<a class="button green-light search">
									<i class="fa fa-search"></i>
								</a>

								<a class="button red donate hide-for-small-only" href="/donate-step-1">
									Donate <i class="fa fa-gbp"></i>
								</a>

								<a class="button red donate show-for-small-only" href="/donate-step-1">
									<i class="fa fa-gbp"></i>
								</a>
							</div>
							<div class="medium-2 medium-pull-3 columns text-right medium-text-center">
								<ul class="menu socials align-right">
									<li class="instagram">
										<a href="https://www.instagram.com/spanacharity/" target="_blank">
										<span class="fa-stack">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-instagram  fa-stack-1x fa-inverse"></i>
										</span>
										</a>
									</li>

									<li class="twitter">
										<a href="https://twitter.com/SPANAcharity" target="_blank">
										<span class="fa-stack">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
										</span>
										</a>
									</li>

									<li class="facebook">
										<a href="https://www.facebook.com/spanacharity/" target="_blank">
										<span class="fa-stack">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>

		</div>

	</div>

</div>

