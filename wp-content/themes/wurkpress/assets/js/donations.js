jQuery(document).ready(function() {

    // Setup default amount
    jQuery('<input>').attr({
        type: 'hidden',
        id: 'amount',
        name: 'amount',
    }).appendTo('#donation-form-step-1');

    // Setup default donation type
    jQuery('<input>').attr({
        type: 'hidden',
        id: 'donation-type',
        name: 'donation-type',
        value: 'one off'
    }).appendTo('#donation-form-step-1');

    jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url'));


    if (jQuery("#donation-type-control").attr('data-value') == 'one off') {
        jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url'));
        jQuery('#donation-types').addClass('hide');
        jQuery('#donation-type').val('one off');
        jQuery('[data-donation-title]').html('Donation Amount');
        jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url'));
    } else {
        jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url'));
    }

    jQuery('#toggle-paypal').show();
    jQuery('#month').hide();
    jQuery('#one').show();

    jQuery('[data-donation-type]').click(function(e) {

        jQuery('[data-donation-type]').removeClass('active');


        var donation_type = jQuery(this).attr('data-donation-type');
        if (donation_type == 'monthly') {
            jQuery(this).addClass('active');
            jQuery('#month').show();
            jQuery('#donation-type').val('monthly');
            jQuery('[data-donation-title]').html('Monthly Donation Amount');
            jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url'));
            jQuery('#toggle-paypal').hide();
            jQuery('#one').hide();
            jQuery("#pay-card").html('Direct Debit')
        } else if (donation_type == 'one off') {
            jQuery(this).addClass('active');
            jQuery('#one').show();
            jQuery('#donation-type').val('one off');
            jQuery('[data-donation-title]').html('One Off Donation Amount');
            jQuery('#donation-form-step-1').attr('action', jQuery("#one-off-url").attr('data-url'));
            jQuery('#toggle-paypal').show();
            jQuery('#month').hide();
            jQuery("#pay-card").html('PAY BY CARD')
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

        if (jQuery('#donation-type').val() == 'monthly') {
            jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url') + '/?amount=' + jQuery('#donationfix').val());
        }

        jQuery('#other-amount').val('');
        jQuery('html, body').animate({
            scrollTop: jQuery("#pay-card").offset().top
        }, 2000);
    });

    jQuery('[data-other-amount]').change(function(e) {

        jQuery('[data-amount]').removeClass('active');
        jQuery(this).addClass('active');

        jQuery("#donationfix").val(jQuery(this).val());

        if (jQuery('#donation-type').val() == 'monthly') {
            jQuery('#donation-form-step-1').attr('action', jQuery("#monthly-url").attr('data-url') + '/?amount=' + jQuery('#donationfix').val());
        }

    });

    function loadAjax(url, data) {

        jQuery.ajax({
            url: url,
            data: data,
            cache: false,
            type: "POST",
        }).done(function(result) {
            console.log(result);
            return jQuery("#donation-form-step-1").submit();
        });
    }

    jQuery('.donate-with-card').click(function(e) {

        e.preventDefault();

        if (jQuery('#donation-type').val() == 'one off') {
            var sku = 'card-one-off-payment';
        } else {
            var sku = 'card-monthly-payment';
        }

        var data = {
            'transactionId': +new Date,
            'transactionTotal': jQuery("#donationfix").val(),
            'transactionProducts': [{
                'sku': sku,
                'name': 'Donation',
                'category': jQuery('#donation-type').val() + ' Card',
                'price': jQuery("#donationfix").val(),
                'quantity': 1
            }]
        };

        console.log(data);

        loadAjax('/wp-content/themes/wurkpress/data-layer/ajax.php', data);

    });

    jQuery('.donate-with-paypal').click(function(e) {

        e.preventDefault();

        if (jQuery('#donation-type').val() == 'one off') {
            var sku = 'paypal-one-off-payment';
        } else {
            var sku = 'paypal-monthly-payment';
        }

        var data = {
            'transactionId': +new Date,
            'transactionTotal': jQuery("#donationfix").val(),
            'transactionProducts': [{
                'sku': sku,
                'name': 'Donation',
                'category': jQuery('#donation-type').val() + ' PayPal',
                'price': jQuery("#donationfix").val(),
                'quantity': 1
            }]
        }

        jQuery('#donation-form-step-1').attr('action', jQuery("#paypal-url").attr('data-url'));

        console.log(data);

        loadAjax('https://spana.org/wp-content/themes/wurkpress/data-layer/ajax.php', data);
    });


    jQuery('.donate-with-mobile').click(function(e) {

        var data = {
            'transactionId': +new Date,
            'transactionTotal': 3,
            'transactionProducts': [{
                'sku': 'mobile-monthly-payment',
                'name': 'Donation',
                'category': 'Monthly Mobile',
                'price': 3,
                'quantity': 1
            }]
        }

        console.log(data);

        loadAjax('https://spana.org/wp-content/themes/wurkpress/data-layer/ajax.php', data);

    });


    jQuery("#donate-step-2").submit(function() {

        if (jQuery("#title").val() == '') {
            jQuery("#title_errors").append('<div id="error_title" class="error pull-left">Title required!</div>');
            return false;
        } else {
            jQuery("#title_errors").html();
        }

        if (jQuery("#first_name").val() == '') {
            jQuery("#title_errors").html('<div id="error_first_name" class="error pull-left">First name required!</div>');
            return false;
        } else {
            jQuery("#title_errors").html();
        }

        if (jQuery("#surname").val() == '') {
            jQuery("#title_errors").html('<div id="error_surname" class="error pull-left">Last name required!</div>');
            return false;
        } else {
            jQuery("#title_errors").html();
        }

        if (jQuery("#email").val() == '') {
            jQuery("#email").before('<div id="error_email" class="error pull-right">Email address required!</div>');
            return false;
        } else {
            jQuery("#error_email").remove();
        }

        if (jQuery("#address1").val() == '') {
            jQuery("#address1").before('<div id="error_address1" class="error pull-right">Address required!</div>');
            return false;
        } else {
            jQuery("#error_address1").remove();
        }

        if (jQuery("#town").val() == '') {
            jQuery("#town").before('<div id="error_town" class="error pull-right">Town required!</div>');
            return false;
        } else {
            jQuery("#error_town").remove();
        }

        if ((jQuery("#postcode").val() == '') && (jQuery("#country").val() == 'uk')) {
            jQuery("#postcode").before('<div id="error_postcode" class="error pull-right">Postcode required!</div>');
            return false;
        } else {
            jQuery("#error_postcode").remove();
        }

    });


});