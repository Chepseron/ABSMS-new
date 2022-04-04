<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$request = file_get_contents("php://input");
$decodedUrl = urldecode($request);
$SmsMessageSid = filter_var(0 + isset($_REQUEST['SmsMessageSid']) ? $_REQUEST['SmsMessageSid'] : "", FILTER_SANITIZE_STRING);
$SmsStatus = filter_var(0 + isset($_REQUEST['SmsStatus']) ? $_REQUEST['SmsStatus'] : "", FILTER_SANITIZE_STRING);
$text = filter_var(0 + isset($_REQUEST['Body']) ? $_REQUEST['Body'] : "", FILTER_SANITIZE_STRING);
$To = filter_var(0 + isset($_REQUEST['To']) ? $_REQUEST['To'] : "", FILTER_SANITIZE_STRING);
$MediaUrl = filter_var(0 + isset($_REQUEST['MediaUrl0']) ? $_REQUEST['MediaUrl0'] : "", FILTER_SANITIZE_STRING);
$MIMEType = filter_var(0 + isset($_REQUEST['MediaContentType0']) ? $_REQUEST['MediaContentType0'] : "", FILTER_SANITIZE_STRING);
$NumMedia = filter_var(0 + isset($_REQUEST['NumMedia']) ? $_REQUEST['NumMedia'] : "", FILTER_SANITIZE_STRING);
$AccountSid = filter_var(0 + isset($_REQUEST['AccountSid']) ? $_REQUEST['AccountSid'] : "", FILTER_SANITIZE_STRING);
$From = filter_var(0 + isset($_REQUEST['From']) ? $_REQUEST['From'] : "", FILTER_SANITIZE_STRING);
$From = str_replace("whatsapp:", "", $From);
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC216fa2bc87b23d6d8af8961359bc43d1';
$auth_token = '44a69a65d0b72364c25854b8bd5cfe00';
$twilio_number = "whatsapp:+14155238886";


$client = new Client($account_sid, $auth_token);
$client->messages->create(
        'whatsapp:' . $From, array(
    'from' => "whatsapp:+14155238886",
    'body' => 'Welcome to UASU. We are dedicated to serve your Union needs, select an option from the menu below' . PHP_EOL . '1. Check your contribution' . PHP_EOL . '2. Check your balance' . PHP_EOL . '3. Withdraw from the union' . PHP_EOL . '4. View your statement'
        )
);
