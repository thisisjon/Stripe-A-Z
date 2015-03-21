<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_15hwKg2eZvKYlo2CovAYIemn", //CHANGE TO YOUR TEST/OR LIVE API KEY: https://dashboard.stripe.com/account/apikeys 
  "publishable_key" => "pk_test_BQokikJOvBiI2HlWgH4olfQ2"  //CHANGE TO YOUR TEST/OR LIVE API KEY: https://dashboard.stripe.com/account/apikeys 
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

