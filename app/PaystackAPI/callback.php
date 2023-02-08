<?php

  $curl = curl_init();
  $reference = isset($_GET['reference']) ? $_GET['reference'] : '';

  if(!$reference){
    die('No reference supplied');
  }

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
      "accept: application/json",
      "authorization: Bearer sk_test_340a6707a123222a842df3ae209e0196e3aa8516",
      "cache-control: no-cache"
    ],
  ));

  $response = curl_exec($curl);
  $error = curl_error($curl);

  if($error){
    // there was an error contacting the Paystack API
    die('Curl returned error: ' . $error);
  }

  $transaction = json_decode($response);

  if(!$transaction->status){
    // there was an error from the API
    die('API returned error: ' . $transaction->message);
  }

  if('success' == $transaction->data->status){
    // transaction was successful... 
    // please check other things like whether you already gave value for this ref
    // if the email matches the customer who owns the product etc
    // Give value
    echo "<h2>Thank you for making a purchase. Your file has been sent your email.</h2>";
  }

?>