<?php 
session_start();

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$amount = $_SESSION["amount"];
$service = $_SESSION["service"];
$signupid = $_SESSION["signupid"];


$services = $signupid;

/*
Author: Mohammad Kaleem
Website: https://www.mohammadkaleem.com/
*/
//Stripe Credentials Configuration
define("STRIPE_SECRET_API_KEY", "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");
define("STRIPE_PUBLISHABLE_KEY", "pk_live_51Ng2BqKf4SeJUQvXiqbkgP6VsdN3UyYuBheTcOdTxmcPPh2zZoL71SNLUJyVOp6kMzScV7PB680it8ng9ZtLR2GR00DJFq9eCU");

//Sample Product Details
// define('CURRENCY', 'USD');
// define('AMOUNT', '1');
// define('DESCRIPTION', 'Laptop Bag');

define('CURRENCY', 'EUR');
define('AMOUNT', $amount);
define('DESCRIPTION', $signupid);


// Database Credentials Configuration 
define('DB_HOST', 'localhost');
define('DB_NAME', 'carbonre_CarBon_DAta');
define('DB_USERNAME', 'carbonre_CarBon_DAta');
define('DB_PASSWORD', 'CarBon_DAta@9585!@#');

?>