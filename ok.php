<?php

include 'tbcpay.lib.php';

$Payment = new tbcpay( 'https://securepay.ufc.ge:18443/ecomm2/MerchantHandler', __DIR__ . '/cert/tbcpay.pem', '0DhJ4AdxVuPZmz3F4y', $_SERVER['REMOTE_ADDR'] );

if ( isset($_REQUEST['trans_id']) ) {
	$trans_id = $_REQUEST['trans_id'];
	$result   = $Payment->get_transaction_result( $trans_id );
}

?>


<html>
<head>
    <title>TBCPAY</title>
</head>

<body>
    <h2>Response:</h2>
    <p><?php print_r( $result ); ?></p>
</body>
</html>
