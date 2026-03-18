<?php 
require_once "PaytmChecksum.php";

//define('PAYTM_ENVIRONMENT', 'https://securegw-stage.paytm.in');
define('PAYTM_ENVIRONMENT', 'https://securegw.paytm.in'); // For Production

/**
* Generate checksum by parameters we have
*/
//define('PAYTM_MID', 'YBYqQF03712355550657');
//define('PAYTM_MERCHANT_KEY', 'JqYTBeNWFOSrEzjH');

define('PAYTM_MID', 'iDYdMg60394152327987'); // for production
define('PAYTM_MERCHANT_KEY', 'sMl%V03ybn99JYr4'); // for production

//define('PAYTM_WEBSITE', 'WEBSTAGING');
define('PAYTM_WEBSITE', 'DEFAULT'); // for production


function getTransactionToken(){
    
	$orderID = isset($_POST['orderID']) ? $_POST['orderID'] : '';
    $amount = isset($_POST['amt']) ? $_POST['amt'] : '';
    $custName = isset($_POST['custName']) ? $_POST['custName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
	
	$callbackUrl ='https://sheranisevents.in/payment/callback';

	$paytmParams["body"] = array(
								"requestType" 	=> "Payment",
								"mid" 			=> PAYTM_MID,
								"websiteName" 	=> PAYTM_WEBSITE,
								"orderId" 		=> $orderID,
								"callbackUrl" 	=> $callbackUrl,
								"txnAmount" 	=> array(
														"value" => $amount,
														"currency" => "INR",
													),
								"userInfo" 		=> array(
								                    "custId" => "CUID".rand(100000,999999),
						                            "custName" => $custName, 
						                            "email" => $email, 
						                            "phone"   => $phone,
						                            ),
							);

		$generateSignature = PaytmChecksum::generateSignature(json_encode($paytmParams['body'], JSON_UNESCAPED_SLASHES), PAYTM_MERCHANT_KEY);

		$paytmParams["head"] = array(
								"signature"	=> $generateSignature
							);

		$url = PAYTM_ENVIRONMENT."/theia/api/v1/initiateTransaction?mid=". PAYTM_MID ."&orderId=". $orderID;

		$getcURLResponse = getcURLRequest($url, $paytmParams);

		if(!empty($getcURLResponse['body']['resultInfo']['resultStatus']) && $getcURLResponse['body']['resultInfo']['resultStatus'] == 'S'){
			$result = array('success' => true, 'orderId' => $orderID, 'txnToken' => $getcURLResponse['body']['txnToken'], 'amount' => $amount, 'message' => $getcURLResponse['body']['resultInfo']['resultMsg']);
		}else{
			$result = array('success' => false, 'orderId' => $orderID, 'txnToken' => '', 'amount' => $amount, 'message' => $getcURLResponse['body']['resultInfo']['resultMsg']);
		}
		return $result;
	
	}


	function getcURLRequest($url , $postData = array(), $headers = array("Content-Type: application/json")){

		$post_data_string = json_encode($postData, JSON_UNESCAPED_SLASHES);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
		$response = curl_exec($ch);
		return json_decode($response,true);
	}

	function getSiteURL(){
		$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return str_replace('config.php', '', $actual_link);
	}
	$result = getTransactionToken();

	function transactionStatus()
	{
		/* initialize an array */
		$paytmParams = array();

		/* body parameters */
		$paytmParams["body"] = array(
			"mid" => PAYTM_MID,
			/* Enter your order id which needs to be check status for */
			"orderId" => $orderStatus,
		);
		$checksum = PaytmChecksum::generateSignature(json_encode($paytmParams["body"], JSON_UNESCAPED_SLASHES), PAYTM_MERCHANT_KEY);

		/* head parameters */
		$paytmParams["head"] = array(
			"signature"	=> $checksum
		);

		/* prepare JSON string for request */
		$post_data = json_encode($paytmParams, JSON_UNESCAPED_SLASHES);

		$url = PAYTM_ENVIRONMENT."/v3/order/status";

		$getcURLResponse = getcURLRequest($url, $paytmParams);
		return $getcURLResponse;
	}
	
?>