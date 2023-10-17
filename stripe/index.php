<?php
session_start();
require_once 'config.php'; 


?>
<html>
<head>
<title>Stripe Payment Gateway </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>

<div style="width:700px; margin:50 auto;">
<h1> Integrate Stripe Payment Gateway</h1>

<!-- Display status message -->
<div id="stripe-payment-message" class="hidden"></div>

<!--<p><strong>Charge $10.00 with Stripe Demo Payment</strong></p>-->

<form id="stripe-payment-form" class="hidden">
	<input type='hidden' id='publishable_key' value='<?php echo STRIPE_PUBLISHABLE_KEY;?>'>
	<div class="form-group">
		<label><strong>Full Name</strong></label>
		<input type="text" id="fullname" class="form-control" maxlength="50" required autofocus>
	</div>
	<div class="form-group">
		<label><strong>E-Mail</strong></label>
		<input type="email" id="email" class="form-control" maxlength="50" required>
	</div>
	<h3>Enter Credit Card Information</h3>
	<div id="stripe-payment-element">
        <!--Stripe.js will inject the Payment Element here to get card details-->
	</div>

	<button id="submit-button" class="pay">
		<div class="spinner hidden" id="spinner"></div>
		<span id="submit-text">Pay Now</span>
	</button>
</form>

<!-- Display the payment processing -->
<div id="payment_processing" class="hidden">
	<span class="loader"></span> Please wait! Your payment is processing...
</div>

<!-- Display the payment reinitiate button -->
<div id="payment-reinitiate" class="hidden">
	<button class="btn btn-primary" onclick="reinitiateStripe()">Reinitiate Payment</button>
</div>


</div>    
<script src="https://js.stripe.com/v3/"></script>
<script src="js/stripe-checkout.js" defer></script>
</body>
</html>