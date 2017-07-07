jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );



	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

  // Reveal Search Form
  jQuery('a.button.green-light.search').click(function(){
    jQuery('.search-form-row').slideToggle();
  });

  // Reveal Enews Form
  jQuery('.enews-form').hide();
  jQuery('.spana-button.enews-btn').click(function(){
    jQuery('.enews-form').slideToggle();
  });

  // Sibling Sidebar List Toggle

  //jQuery('.children').hide();
  //
  //jQuery('.page_item_has_children').click(function() {
  //  jQuery(this).find('.children').slideToggle();
  //  jQuery(this).addClass('expanded');
  //});

  // Animate Hamburger Menu

  jQuery(".menu-button").click(function(){
    jQuery(this).toggleClass('is-active');
  });

  jQuery(".menu-text-animate").click(function(){
    jQuery(".menu-button").toggleClass('is-active');
  });

  jQuery(".js-off-canvas-exit").click(function(){
    jQuery("#menuButton").removeClass("is-active");
  });


  // Sticky Menu in scripts.js

  //var origonal_logo = jQuery('.logo').attr('data-logo-url');
  //origonal_logo = origonal_logo.replace(".png", "@2x.png");
  //var reverse_logo = origonal_logo.replace("logo", "logo-rev");
  //
  //jQuery('.title-bar').on('sticky.zf.stuckto:top', function(){
  //  jQuery(this).addClass('shrink');
  //
  //  jQuery(".logo").html('<a href="/"><img src="' + reverse_logo + '"></a>').width(100).height(40);
  //}).on('sticky.zf.unstuckfrom:top', function(){
  //  jQuery(this).removeClass('shrink');
  //  jQuery(".logo").html('<a href="/"><img src="' + origonal_logo + '"></a>').width(150).height(40);
  //});


  // Scroll to Top

  //lets handle the button click event
  //jQuery('.to-top-btn').on('click', function(e) {
  //  jQuery('body, html').stop().animate({scrollTop: 0}, 'slow', 'swing');
  //  e.preventDefault();
  //});

  //lets show the button when the page scroll to about 400 pixels
  //change the value to your desired offset
  //jQuery(window).scroll(function() {
  //  if(jQuery(window).scrollTop() > 200){
  //    //show the button when scroll offset is greater than 400 pixels
  //    jQuery('.to-top-btn').fadeIn('slow');
  //  }else{
  //    //hide the button if scroll offset is less than 400 pixels
  //    jQuery('.to-top-btn').fadeOut('slow');
  //  }
  //});

  // Setup default amount
  jQuery('<input>').attr({
    type: 'hidden',
    id: 'amount',
    name: 'amount',
    value: '5'
  }).appendTo('#donation-form-step-1');

  // Setup default donation type
  jQuery('<input>').attr({
    type: 'hidden',
    id: 'donation-type',
    name: 'donation-type',
    value: 'one off'
  }).appendTo('#donation-form-step-1');

  jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url') );


  if( jQuery("#donation-type-control").attr('data-value') == 'one off' ){
    jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url') );
    jQuery('#donation-types').addClass('hide');
    jQuery('#donation-type').val('one off');
    jQuery('[data-donation-title]').html('Donation Amount');
    jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url') );
  }else{
    //jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url') );
  }

  jQuery('#toggle-paypal').show();

  jQuery('[data-donation-type]').click(function(e) {

    jQuery('[data-donation-type]').removeClass('active');

    var donation_type = jQuery(this).attr('data-donation-type');
    if(donation_type == 'monthly'){
      jQuery(this).addClass('active');
      jQuery('#donation-type').val('monthly');
      jQuery('[data-donation-title]').html('Monthly Donation Amount');
      jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url') );
      jQuery('#toggle-paypal').hide();
    }else if(donation_type == 'one off'){
      jQuery(this).addClass('active');
      jQuery('#donation-type').val('one off');
      jQuery('[data-donation-title]').html('One Off Donation Amount');
      jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url') );
      jQuery('#toggle-paypal').show();
    }

    jQuery('<input>').attr({
      type: 'hidden',
      id: 'donation-type',
      name: 'donation-type',
      value: donation_type
    }).appendTo('#donation-form-step-1');

  });

  jQuery('[data-amount]').click(function(e) {

    jQuery('[data-amount]').removeClass('active');
    jQuery(this).addClass('active');

    jQuery("#donationfix").val(jQuery(this).attr('data-amount'));

    if(jQuery('#donation-type').val() == 'monthly'){
      jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url') + '/?amount=' + jQuery('#donationfix').val() );
    }

    jQuery('#other-amount').val('');
  });

  jQuery('[data-other-amount]').change(function(e) {

    jQuery('[data-amount]').removeClass('active');
    jQuery(this).addClass('active');

    jQuery("#donationfix").val(jQuery(this).val());

    if(jQuery('#donation-type').val() == 'monthly'){
      jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url') + '/?amount=' + jQuery('#donationfix').val() );
    }

  });

  jQuery('.donate-with-card').click(function(e) {

    window.dataLayer = []
    dataLayer.push({
      'transactionId': +new Date,
      'transactionTotal': jQuery("#donationfix").val(),
      'transactionProducts': [{
        'sku': jQuery("#appealcode").val(),
        'name': 'Donation',
        'category': jQuery('#donation-type').val() + ' Card',
        'price': jQuery("#donationfix").val(),
        'quantity': 1
      }]
    });

  });

  jQuery('.donate-with-paypal').click(function(e) {

    window.dataLayer = [];
    dataLayer.push({
      'transactionId': +new Date,
      'transactionTotal': jQuery("#donationfix").val(),
      'transactionProducts': [{
        'sku': jQuery("#appealcode").val(),
        'name': 'Donation',
        'category': jQuery('#donation-type').val() + ' PayPal',
        'price': jQuery("#donationfix").val(),
        'quantity': 1
      }]
    });

    jQuery('#donation-form-step-1').attr('action', jQuery("#paypal-url").attr('data-url') );

  });


  jQuery('.donate-with-mobile').click(function(e) {

    window.dataLayer = [];
    dataLayer.push({
      'transactionId': +new Date,
      'transactionTotal': '3',
      'transactionProducts': [{
        'sku': 'mobile-montly-payment',
        'name': 'Donation',
        'category': 'Monthly Mobile',
        'price': '3',
        'quantity': 1
      }]
    });

  });


  jQuery("#donate-step-2").submit(function(){

    if(jQuery("#title").val() == ''){
      jQuery("#title_errors").html('<div id="error_title" class="error pull-left">Title required!</div>');
      return false;
    }else{
      jQuery("#title_errors").html();
    }

    if(jQuery("#first_name").val() == ''){
      jQuery("#title_errors").html('<div id="error_first_name" class="error pull-left">First name required!</div>');
      return false;
    }else{
      jQuery("#title_errors").html();
    }

    if(jQuery("#surname").val() == ''){
      jQuery("#title_errors").html('<div id="error_surname" class="error pull-left">Last name required!</div>');
      return false;
    }else{
      jQuery("#title_errors").html();
    }

    if(jQuery("#email").val() == ''){
      jQuery("#email").before('<div id="error_email" class="error pull-right">Email address required!</div>');
      return false;
    }else{
      jQuery("#error_email").remove();
    }

    if(jQuery("#address1").val() == ''){
      jQuery("#address1").before('<div id="error_address1" class="error pull-right">Address required!</div>');
      return false;
    }else{
      jQuery("#error_address1").remove();
    }

    if(jQuery("#town").val() == ''){
      jQuery("#town").before('<div id="error_town" class="error pull-right">Town required!</div>');
      return false;
    }else{
      jQuery("#error_town").remove();
    }

    if(jQuery("#postcode").val() == ''){
      jQuery("#postcode").before('<div id="error_postcode" class="error pull-right">Postcode required!</div>');
      return false;
    }else{
      jQuery("#error_postcode").remove();
    }


  });


});
