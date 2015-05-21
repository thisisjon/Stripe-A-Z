<?php
  // ONCE PAYMENT IS SUCCESSFUL REDIRECT TO CUSTOM (PAGE) INDEX.HTML :)
  // header("Location: /stripe/paymentsuccess/index.html");

  require_once('./config.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 5100, //'ACTUAL' CHARGE AMOUNT IN CENTS- //CUSTOMISABLE
      'currency' => 'aud' //CUSTOMISABLE
  ));

  // FOR DEMO PURPOSES. YOU CAN REMOVE THIS ECHO COMMAND LATER. 
  echo '<h1>Successfully charged $51!</h1>';
?>
