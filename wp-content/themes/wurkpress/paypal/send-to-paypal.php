<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/wp-load.php');
global $wpdb;

$data = [];
if(isset($_POST)) {

    foreach($_POST as $key => $val){
        $data[$key] = sanitize_text_field($val);
    }

    $wpdb->insert(
        'sp_donors',
        $data,
        [
            '%s',
            '%d'
        ]
    );
    $lastid = $wpdb->insert_id;
}
/*
echo '<pre>';
print_r($data);
exit;
*/
?>

<html>
<head>
    <title>Spana Paypal Payment</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <style type="text/css">
        #wrapper {
            width: 800px;
            margin: 0 auto;
            text-align: center;
            font-family: "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        }
        .logo{
            margin-top: 100px;
            margin-bottom: 50px;
        }

        .fa{
            font-size: 40px;
            margin: 20px 0;
            color: #c20139;
        }
    </style>

</head>
<body onLoad="document.form.submit();">

<div id="wrapper">

    <div class="logo">
        <img src="https://spana.org/wp-content/themes/wurkpress/assets/images/spana-logo.png">
    </div>

    <p>One moment, while we direct you to PayPal for payment ...</p>
    <i class="fa fa-circle-o-notch fa-spin"></i>

    <form name="form" method="post" action="https://www.paypal.com/cgi-bin/webscr">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="Aragie@Spana.org">
        <input type="hidden" name="item_name" value="Donation: <?php echo $_POST['appealcode']; ?>">
        <input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">
        <input type="hidden" name="currency_code" value="GBP">
        <input type="hidden" name="return" value="https://spana.org/donation-thank-you?appeal=<?php echo $_POST['appealcode']; ?>&donor=<?php echo $lastid;?>">
        <input type="hidden" name="cancel_return" value="https://spana.org/donation-failed">
        <input type="hidden" name="notify_url" value="https://spana.org/wp-content/themes/wurkpress/paypal/callback.php">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="lc" value="GB">
        <input type="hidden" name="custom" value="<?php echo $lastid;?>">
    </form>

</div>

</body>
</html>
