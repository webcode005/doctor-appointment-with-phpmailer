<?php

// Include the DB config & class files
require_once 'config.php';
require_once 'dbclass.php';

// If transaction ID is not empty 
if(!empty($_GET['tid'])){
    $transaction_id  = $_GET['tid'];

    $db = new DB;
    // Fetch the transaction details from DB using Transaction ID
    $db->query("SELECT * FROM `stripe_payment` WHERE transaction_id=:transaction_id");
    $db->bind(":transaction_id", $transaction_id);
    $row = $db->result();
   // $db->close();
    if(!empty($row)){
        $fullname = $row['fullname'];
        $email = $row['email'];
        $item_description = $row['item_description'];
        $currency = $row['currency'];
        $amount = $row['amount'];
    }
}else{ 
    header("Location: index.php"); 
    exit(); 
} 
?>
<html>
<head>
<title>Success Stripe Payment </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>

<div style="width:700px; margin:50 auto;">
<h1>Success! Stripe Payment </h1>

<?php if(!empty($row)){ ?>
    <h2 style="color: #327e00;">Success! Your payment has been received successfully.</h2>
    <h3>Payment Receipt:</h3>
    <p><strong>Dear:</strong> <?php echo $fullname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Transaction ID:</strong> <?php echo $transaction_id; ?></p>
    <p><strong>Amount:</strong> <?php echo $amount.' '.$currency; ?></p>
    <p><strong>Item Description:</strong> <?php echo $item_description; ?></p>
    
    
    <!--Send Email-->
  <?php  
            $to = 'info@carbon-reduction.co.uk';
            $to = $email;
            $from = 'info@carbon-reduction.co.uk'; 
            $fromName = 'Titan Global Services'; 
             
            $subject = "Email From Titan Global Services"; 
             
            $htmlContent = ' 
                <html> 
                <head> 
                    <title>Welcome to Titan Global Services</title> 
                </head> 
                <body> 
                    <h2><strong>Dear </strong> '. $fullname.',</h2>
                    <p>We are pleased that you signed up with Titan Global Services. We appreciate your choice of service and extend a warm welcome to you.</p>
                    <p>We will be sending you the formal invoice through email along with a set of terms and conditions. </p>
                    <p>Feel open to reach out and communicate with us whenever needed.</p>
                    <br>
                    <p>Kind Regards</p>
                    <p>Titan Global Services</p>
                    <p>21 Councilor Lane, Cheadle, Stockport, United Kingdom, SK8 2HU</p>
                    <p>+44(0)845 220 2565</p>
                    <p>info@carbon-reduction.co.uk</p>
                </body> 
                </html>'; 
             
            // Set content-type header for sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
             
            // Additional headers 
            $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
            
             
            // Send email 
            if(mail($to, $subject, $htmlContent, $headers)){ 
                echo 'Email has sent successfully.'; 
            }else{ 
               echo 'Email sending failed.'; 
            }
    ?>
    <!--End Sending Email-->
    
    
  
    <!--Send User Login Email-->
  <?php  
          //  $email = 'basant.mallick@digiclawmedia.com';
            
          //  $to = 'mohammadkaleem61@gmail.com,basant.mallick@digiclawmedia.com,sumit12362ur@gmail.com';
          
            $to = $email;
            $from = 'info@carbon-reduction.co.uk'; 
            $fromName = 'Titan Global Services'; 
             
            $subject = "Email From Titan Global Services"; 
            
             // Fetch the transaction details from DB using Transaction ID
                $db->query("SELECT * FROM `signup` WHERE email=:email");
                $db->bind(":email", $email);
                $udetails = $db->result();
             
             
                   $fullname = $udetails['name'];
             
                   $phone = $udetails['phone'];
                 
             
            
             
             
            $htmlContent = ' 
                <html> 
                <head> 
                    <title>Welcome to Titan Global Services</title> 
                </head> 
                <body> 
                    <h2><strong>Dear </strong> '. $fullname.',</h2>
                    <h4>Thank you for your payments.</h4> 
                    <p>Your Login details are as follows :<b></p>
                    <p>Login Url: 
                    <a href="https://carbon-reduction.co.uk/user/">
                    https://carbon-reduction.co.uk/user/</a></b></p>
                    <br>
                    <p> Username:<b> '. $email.'</b> </p>
                    <p> Password: <b>'.$phone.'</b> </p>
                    <br>
                    <p>Kind Regards</p>
                    <p>Titan Global Services</p>
                    <p>21 Councilor Lane, Cheadle, Stockport, United Kingdom, SK8 2HU</p>
                    <p>+44(0)845 220 2565</p>
                    <p>info@carbon-reduction.co.uk</p>
                </body> 
                </html>'; 
                
               
             
            // Set content-type header for sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
             
            // Additional headers 
            $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
            
             
            // Send email 
            if(mail($to, $subject, $htmlContent, $headers)){ 
                echo 'Email has sent successfully.'; 
            }else{ 
               echo 'Email sending failed.'; 
            }
    ?>
    <!--End Sending User Login Email-->
    
    
    
<?php }else{ ?>
    <h1>Error! Your transaction has been failed.</h1>
<?php } ?>



</div>
</body>
</html>