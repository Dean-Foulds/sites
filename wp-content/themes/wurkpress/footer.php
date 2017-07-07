					<section style="border-top: 1px solid #ececec; padding: 0; margin: 0;">
						<div class="row">
							<div class="small-12 columns">
								<?php dynamic_sidebar( 'Footer CTA' ); ?>
							</div>
						</div>
					</section>

					<footer class="footer" role="contentinfo">

						<div id="inner-footer">
							<div class="row" data-equalizer data-equalize-on="medium">
								<div class="medium-4 columns">
									<div class="border-widget" data-equalizer-watch>
										<?php get_sidebar( 'footer-1' ); ?>
									</div>
								</div>
								<div class="medium-4 columns">
									<div class="border-widget" data-equalizer-watch>
										<?php get_sidebar( 'footer-2' ); ?>
									</div>
								</div>
								<div class="medium-4 columns">
									<div data-equalizer-watch>
										<?php get_sidebar( 'footer-3' ); ?>
									</div>
								</div>
<!--								<div class="medium-3 columns">-->
<!--									--><?php //get_sidebar( 'footer-4' ); ?>
<!--								</div>-->
							</div>
						</div> <!-- end #inner-footer -->

								<div class="copyright-bar">
									<div class="row">
										<div class="medium-9 columns">
											<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Registered in England, Company Number: 558085 - Registered Charity Number: 209015. All Rights Reserved</p>
										</div>
										<div class="medium-3 columns medium-text-right">
											<p>Site: <a href="https://wurkhouse.com" target="_blank">WURKHOUSE</a></p>
											
										</div>
									</div>
								</div>

					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>

	</body>
</html> <!-- end page -->