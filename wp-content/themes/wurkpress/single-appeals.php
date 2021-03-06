<?php get_header(); ?>

<div id="content">

	<header class="article-header">
		<?php get_template_part('parts/content', 'donate-page-title'); ?>
		<?php include_once "appealshide.php"; ?>
	</header>

	<div id="inner-content" class="row">

		<main id="main" class="large-12 columns first" role="main">

			<div id="appeal-content" class="row">
				<div class="medium-7 columns">
					<?php
					if ( has_post_thumbnail() )
					{
						the_post_thumbnail('spana-appeal-featured-lg');
					}
					else 
					{
						?>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/default-post-image.png" alt="<?php the_title(); ?>" />
					<?php } ?>
					<div class="bg-sand spana-text-block">
						<?php the_content(); ?>
					</div>
				</div>


				<div class="medium-5 columns">

					<form lpformnum="1" id="donation-form-step-1" method="post">

						<div id="donation-types">
							<div class="row donation-form-row">
								<div class="small-12 columns">
									<label class="text-upper text-red"><h6>Type of donation</h6></label>
								</div>
								<div class="medium-6 columns">
									<div id="one-click" class="spana-donation-form-button active" data-donation-type="one off">One Off</div>
								</div>
								<div class="medium-6 columns">
									<div id="month-click" class="spana-donation-form-button" data-donation-type="monthly">Monthly</div>
								</div>
							</div>
						</div>

						<div class="row donation-form-row">
							<div class="small-12 columns">
								<label class="text-upper text-red">
									<h6 data-donation-title>One off Donation Amount</h6>
								</label>
							</div>



							
							<div id="one" class="small-12 columns">
								<?php

								if( !get_field('accept_only_one_off_payment') ) {

									// check if the repeater field has rows of data
									if (data-donation-type == "one off")
										if (have_rows('donation_options')):

											// loop through the rows of data
											while (have_rows('donation_options')) : the_row(); ?>

												<div  class="donation-amount-row" data-amount="<?php the_sub_field('donation_amount'); ?>">
													<div class="row">
														<div class="small-3 columns donation-amount">
															£<?php the_sub_field('donation_amount'); ?>
														</div>
														<div class="small-9 columns">
															<p><?php the_sub_field('donation_description'); ?></p>
														</div>
													</div>
												</div>
												

											<?php // display a sub field value
											endwhile;
									endif;
										// no rows found	
								}
								?>
								</div>
								
								<div id="month" class="small-12 columns" >
								<?php

								if( !get_field('accept_only_one_off_payment') ) {

									// check if the repeater field has rows of data
									if (data-donation-type == "one off")
										if (have_rows('donation_options_month')):

											// loop through the rows of data
											while (have_rows('donation_options_month')) : the_row(); ?>

												<div class="donation-amount-row" data-amount-month="<?php the_sub_field('donation_amount_month'); ?>">
													<div class="row">
														<div class="small-3 columns donation-amount">
															£<?php the_sub_field('donation_amount_month'); ?>
														</div>
														<div class="small-9 columns">
															<p><?php the_sub_field('donation_description_month'); ?></p>
														</div>
													</div>
												</div>
											
											<?php // display a sub field value
											endwhile;
									endif;
										// no rows found	
								}
								?>
								</div>
							
								<div class="one-off-donation">
									<div class="row">
										<div class="small-2 columns text-left">
											<h5>OTHER</h5>
										</div>
										<div class="small-6 columns text-left end">
											<div class="row collapse prefix-radius">
												<div class="small-3 columns">
													<span class="prefix other-amount">£</span>
												</div>
												<div class="small-9 columns">
													<input style="background: white;" data-other-amount id="other-amount" name="other-amount" class="other-amount" type="text" value="">
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="row">
									<div class="small-6 small-offset-6 columns text-right" style="margin-top: 20px;">
										<input type="hidden" name="step" value="1">
										<?php
										if( get_field('accept_only_one_off_payment') ) {
											echo '<input type="hidden" id="donation-type-control" data-value="one off">';
										}else{
											echo '<input type="hidden" id="donation-type-control" data-value="monthly">';
										}
										?>
										<input type="hidden" name="donation-type" value="monthly">
										<input type="hidden" name="campaign" value="7007.6930">
										<input type="hidden" name="country" value="GBR">
										<input type="hidden" name="appealcode" value="<?php the_field('campaign_description_for_rsm'); ?>">
										<input type="hidden" id="donationfix" name="donationfix" value="">
										<input type="hidden" id="monthly-url" data-url="https://secure.edirectdebit.com/SPANA/Donation/Desktop-Form-Page">
										<input type="hidden" id="one-off-url" data-url="https://rsm2.rsmsecure.com/cpterminal/cpweb.php">
										<input type="hidden" id="paypal-url" data-url="/donate-step-2">
										<div><button id="pay-card" class="spana-donation-step-button">PAY BY CARD</button></div>
									</div> 
								</div>

								<div id="toggle-paypal">
									<div class="row">
										<div class="small-12 columns text-right text-black" style="margin: 15px 0;">
											<h4>OR</h4>
										</div>
									</div>
									<div class="row">
										<div class="small-6 columns">
											<button class="donate-with-paypal">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-donate-paypal.gif">
											</button>
										</div>
										<div class="small-6 columns text-right end">
											<button  class="donate-with-paypal spana-donation-step-button">PAY VIA PAYPAL</button>
										</div>
									</div>
								</div>

							</div>
						</div>
					</form>
				</div>


			</div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->


<?php get_footer(); ?>







