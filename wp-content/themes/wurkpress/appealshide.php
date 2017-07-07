<script>
(c) The SmartTHING Limited 2017
Redirect donations to the new Blackbaud Online Express (OLX) donation form
Note: Requires the user to have JavaScript enabled otherwise standard donation
routes are taken instead. OLX requires JavaScript.

var redirectURL = 'https://www.smartthing.org/smartthing-test-zone';

(function($) {
$(document).ready(function() {
var donateBtn = $('.spana-donation-step-button:not([patched])');
if (donateBtn.length > 0) {
donateBtn.attr('patched', true);

Hide the old PayPal buttons
$('#toggle-paypal .row').hide();

donateBtn.html('DONATE NOW');
$('#donation-form-step-1').submit(function(e) {
e.preventDefault();

Redirect to our donation form with all relevant info
var activeRow = $('.donation-amount-row.active');
var amount = (activeRow.length > 0 ? activeRow.data('amount') : $('#other-amount').val());
var typ = $('.spana-donation-form-button.active').data('donation-type');
var nam = $('input[name="campaign"]').val();
var appeal = $('input[name="appealcode"]').val();
window.location.href = redirectURL + '?amount=' + encodeURIComponent(amount) +
'&type=' + encodeURIComponent(typ) +
'&attr1=Campaign' +
'&attr1value=' + encodeURIComponent(nam) +
'&attr2=Gift%20Test' +
'&attr2value=' + encodeURIComponent(appeal);
});
}
});
})(jQuery);
</script>