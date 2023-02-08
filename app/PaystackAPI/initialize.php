<?php

// Initialaize CURL
  $curl = curl_init();

  $zero = 00;
  $email = $_POST['email'];
  // $amount = $_POST['amount'] . $zero;

  $amount = 350 . $zero.$zero;
  var_dump($amount);

  // Callback URL for Paystack
  $callbackUrl = "http://localhost/defcon/app/PaystackAPI/callback.php";

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.paystack.co/transaction/initialize',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode([
      'email' => $email,
      'amount' => $amount,
      'callback_url' => $callbackUrl
    ]),
    CURLOPT_HTTPHEADER => [
      'authorization: Bearer sk_test_340a6707a123222a842df3ae209e0196e3aa8516',
      'content-type: application/json',
      'cache-control: no-cache'
    ]
  ));

  // Response
  $response = curl_exec($curl);
  $error = curl_error($curl);

  if ($error) {
    die("Curl error: " . $error);
  }

  $transaction = json_decode($response, true);
  if (!$transaction['status']) {
    print_r("API error: " . $transaction['message']);
  }
  print_r($transaction);

  // Redirect to courses page
  header('location: ' . $transaction['data']['authorization_url']);

?>