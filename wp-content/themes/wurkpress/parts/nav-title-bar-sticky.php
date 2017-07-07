<div data-sticky-container>

	<div class="title-bar" data-sticky data-margin-top='0' data-margin-bottom='0'>
		<div class="row">
					<div class="medium-2 small-7 columns">
						<div class="logo" data-logo-url="<?php bloginfo('stylesheet_directory'); ?>/assets/images/spana-logo.png">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/spana-logo.png" alt="Logo"/>
							</a>
						</div>
					</div>
					<div class="medium-10 small-5 columns top-nav">
						<div class="row">
							<div class="large-7 medium-5 hide-for-small-only columns text-center">
								<?php joints_top_nav(); ?>
							</div>
							<div class="large-3 medium-4 medium-push-3 large-push-2 columns text-right">
								<a class="button green-light search">
									<i class="fa fa-search"></i>
								</a>

								<a class="button red donate hide-for-small-only">
									Donate <i class="fa fa-gbp"></i>
<!--									<span class="fa-stack donate-icon">-->
<!--									  <i class="fa fa-circle-o fa-stack-2x"></i>-->
<!--									  <i class="fa fa-gbp fa-stack-1x fa-inverse"></i>-->
<!--									</span>-->
								</a>

								<a class="button red donate show-for-small-only" href="<?php echo home_url(); ?>">
									<i class="fa fa-gbp"></i>
<!--									<span class="fa-stack donate-icon">-->
<!--									  <i class="fa fa-circle-o fa-stack-2x"></i>-->
<!--									  <i class="fa fa-gbp fa-stack-1x fa-inverse"></i>-->
<!--									</span>-->
								</a>
							</div>
							<div class="large-2 large-pull-3 medium-3 medium-pull-4 columns">
								<ul class="menu socials">
									<li class="twitter">
										<a href="https://twitter.com" target="_blank">
										<span class="fa-stack">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
										</span>
										</a>
									</li>
									<li class="facebook">
										<a href="https://facebook.com" target="_blank">
										<span class="fa-stack">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span>
										</a>
									</li>
									<li class="linkedin">
										<a href="https://linkedin.com" target="_blank">
										<span class="fa-stack">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
										</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
					<div class="small-12 show-for-small-only columns top-nav">
						<?php joints_top_nav(); ?>
					</div>



		</div>
	</div>

</div>