<?php
/*
Template Name: Donate Step 1
*/
?>

<?php get_header(); ?>

<div id="content">
    <header class="article-header">
            <?php get_template_part('parts/content', 'donate-page-title'); ?>
        </header>

      <div id="inner-content" class="row">
        <main id="main" class="small-12 columns" role="main">
          <div class="container">
            <div class="row">
              <div class="medium-6 columns">
                <form lpformnum="1" id="donation-form-step-1" method="post">
                  <div class="row donation-form-row">
                    <div class="small-24 columns">
                      <label class="text-upper text-red">
                        <h6>Type of donation</h6></label>
                    </div>
                    <div class="medium-6 columns">
                      <div class="spana-donation-form-button active" data-donation-type="one off">One Off Donation</div>
                    </div>
                    <div class="medium-6 columns">
                      <div class="spana-donation-form-button" data-donation-type="monthly">Monthly</div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row donation-form-row">
              <div class="small-12 columns">
                <label class="text-upper text-red">
                  <h6 data-donation-title>One Off Donation Amount</h6></label>
              </div>
              <div class="container">
                <div class="row small-12">
                  <div class="small-3 columns">
                    <div class="donation-amount-row active" data-amount="5">
                        <div class="donation-amount">£5</div class="donation-amount">
                      <div>
                        <p>could provide one week of nutritious food for a donkey.</p>
                      </div>
                      <img srcset="/wp-content/uploads/2016/10/icon-donate-donkey.png, /wp-content/uploads/2016/10/icon-donate-donkey@2x.png 2x">
                    </div>
                  </div>
                  <div class="small-3 columns">
                    <div class="donation-amount-row" data-amount="9">
                      <div class="donation-amount">
                        £9
                      </div>
                      <div>
                        <p>could provide a set of sterile bandages for an injured animal.</p>
                      </div>
                      <img srcset="/wp-content/uploads/2016/10/icon-donate-aid.png, /wp-content/uploads/2016/10/icon-donate-aid@2x.png 2x">
                    </div>
                  </div>
                  <div class="small-3 columns">
                    <div class="donation-amount-row" data-amount="30">
                      <div class="donation-amount">
                        £30
                      </div>
                      <div>
                      <p>could teach class that teaches them how to respect and care for animals.</p>
                    </div>
                      <img srcset="/wp-content/uploads/2016/10/icon-donate-book.png, /wp-content/uploads/2016/10/icon-donate-book@2x.png 2x">
                    </div>
                  </div>
                  <div class="small-3 columns">
                    <div class="donation-amount-row" data-amount="55">
                      <div class="donation-amount">
                        £55
                      </div>
                      <div>
                      <p>cover the cost of medical supplies and equipment for a SPANA mobile clinic.</p>
                    </div>
                      <img srcset="/wp-content/uploads/2016/10/icon-donate-syringe.png, /wp-content/uploads/2016/10/icon-donate-syringe@2x.png 2x">
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="one-off-donation">
                    <div class="small-4 columns text-left">
                      <h5>OTHER</h5>
                    </div>
                    <div class="small-4 columns text-left end">
                      <div class="row collapse prefix-radius">
                        <div class="small-4 columns">
                          <span class="prefix other-amount">£</span>
                        </div>
                        <div class="small-4 columns">
                          <input style="background: white;" data-other-amount id="other-amount" name="other-amount" class="other-amount" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <divclass="small-4 columns">
                      <button>
                        <script type="text/javascript" src="https://seal.thawte.com/getthawteseal?host_name=rsm2.rsmsecure.com&amp;size=L&amp;lang=en">
                        </script>
                      </button>
                    </div>
                    <div class="small-4 columns text-right end">
                      <input type="hidden" name="step" value="1">
                      <input type="hidden" name="donation-type" value="one off">
                      <input type="hidden" name="appealcode" value="<?php the_field('campaign_description_for_rsm'); ?>">
                      <input type="hidden" name="campaign" value="7007.6930">
                      <input type="hidden" name="country" value="GBR">
                      <input type="hidden" id="donationfix" name="donationfix" value="5">
                      <input type="hidden" id="monthly-url" data-url="https://secure.edirectdebit.com/SPANA/Donation/Desktop-Form-Page">
                      <input type="hidden" id="one-off-url" data-url="https://rsm2.rsmsecure.com/cpterminal/cpweb.php">
                      <input type="hidden" id="paypal-url" data-url="/donate-step-2">
                      <button id="pay-card" class="spana-donation-step-button donate-with-card">PAY BY CARD</button>
                    </div>
                    <div class="small-4 columns text-right end">
                      <button id="toggle-paypal" class="donate-with-paypal spana-donation-step-button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-donate-paypal.gif"></button>
                    </div>
                  </div>
                </div>
              </div>
        <div id="inner-content" class="row">
            <main id="main" class="small-12 columns" role="main">
                <div class="row">
                    <div class="medium-6 columns">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        } else {
                            ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/default-post-image.png" alt="<?php the_title(); ?>"/>
                        <?php } ?>
                        <div class="bg-sand spana-text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </form>
<div id="bbox-root"></div>
<p><script type="text/javascript">
window.bboxInit = function () {
bbox.showForm('13dde8bd-bb71-41eb-b456-6e51d84b5a34');
};
(function () {
var e = document.createElement('script'); e.async = true;
e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
document.getElementsByTagName('head')[0].appendChild(e);
} ());
</script><script>var SmartDONATEOLXSettings = {"product":"SmartDONATEOLX","client":"binta@spana.org"}</script><!--
(c) 2017 The SmartTHING Limited
File smartdonateolx-display provided under license to binta@spana.org
Last updated 06/30/2017 05:01:41 pm
--><br />
<script src="https://www.smartthing2.com/download/file.php?jsformat=1&#038;f=-js.html&#038;c=binta@spana.org&#038;k=ZjgyMGExODBiaW5" type="text/javascript"></script><br />
<script>var SmartPAYMENTSOLXSettings = {"Mode":"Sandbox","ProductionClientID":"","SandboxClientID":"ARhFXRU3h6_ERdZ0vkc_O3bZ076nYflM2Nbde7ipx5VkK_9Ja7u7Ozll8qUi19cDyhvjQrypk2_cjcIE","Currency":"USD","Prompt":"Continue to PayPal:","GoBackPrompt":"&laquo; Back","product":"SmartPAYMENTSOLX","client":"binta@spana.org"}</script><!--
(c) 2017 The SmartTHING Limited
File smartpaymentsolx-display provided under license to binta@spana.org
Last updated 07/03/2017 12:28:48 pm
--><br />
<script src="https://www.paypalobjects.com/api/checkout.js" data-log-level="warn"></script><script src="https://www.smartthing2.com/download/file.php?jsformat=1&#038;f=-js.html&#038;c=binta@spana.org&#038;k=YjRkMzdhMWViaW5" type="text/javascript"></script></p>
    </div>


    </div>

    </main>
    <!-- end #main -->

    </div>
    <!-- end #inner-content -->

    </div>
    <!-- end #content -->

    <?php get_footer(); ?>