<?php
require_once('paypal-ipn.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/wp-load.php');
global $wpdb;

use PaypalIPN;

$ipn = new PayPalIPN();

// Use the sandbox endpoint during testing.
//$ipn->useSandbox();
$verified = $ipn->verifyIPN();
if ($verified) {

    $data = $ipn->getData();

    $wpdb->update(
        'sp_donors',
        array(
            'paypal_trans_id' => $data['txn_id']
        ),
        array( 'id' => $data['custom'] ),
        array(
            '%s',
        ),
        array( '%d' )
    );


}
// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");