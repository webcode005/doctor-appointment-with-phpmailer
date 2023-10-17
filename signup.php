<?php
require('include/config.php');

include('smtp/smtp/PHPMailerAutoload.php');

if(isset($_POST['bdetails']))
{
      
        $name=mysqli_real_escape_string($conn,$_POST['cust_name']); 
        $comp_name=ucfirst(mysqli_real_escape_string($conn,$_POST['comp_name'])); 
        $email=mysqli_real_escape_string($conn,$_POST['cust_email']);
        $mobile=mysqli_real_escape_string($conn,$_POST['cust_mobile']);
        $website=mysqli_real_escape_string($conn,$_POST['website']);

        $services=(explode(",",mysqli_real_escape_string($conn,$_POST['service'])));

        $service = $services[0];

        $price = $services[1];
        
         $price = $price*1.2;
      
        

        $added_on=date('Y-m-d h:i:s');


        // print_r($_POST);

        // die;
        


        $added_on=date('Y-m-d h:i:s');
        
        
        $sql = "INSERT INTO `signup` ( `name`, `comp_name`, `email`, `phone`, `website`, `service`,`price`,`txn_no`,`payment_status`, `rdate`) 
        VALUES ( '$name', '$comp_name', '$email', '$mobile', '$website','$service', '$price','','', '$added_on')";
        
        if ($conn->query($sql) === TRUE) {
                  
             //echo'<script> alert("Thank You!");window.location ="index.php"; </script>';
              $last_id = $conn->insert_id;
              
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["amount"] = $price;
                $_SESSION["service"] = $service;
                $_SESSION["signupid"] = $last_id;
                
                
                    $date=date_create(date("Y-m-d"));
                $submit_date = date_format($date,"jS-M-Y ");
            
            
            
            // send email
                  
            
            $to_email = 'info@carbon-reduction.co.uk'; 
     
 
            $Subject = "Signup Enquiry " .$name; 
         
            $htmlContent = ' 
                        <!doctype html>
                        <html>
                            <head>
                              <meta charset="UTF-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            </head>
                            <body>
                                <section class="lg:px-24 px-4 lg:pt-24 pt-4 ">
                                 
                                    		<p>Contact Name: '.$name.'</p>
                                    		<p>Company Name: '.$comp_name.'</p>
                                            <p>Website: '.$website.'</p>
                                            <p>Phone Number: '.$mobile.'</p>
                                            <p>Email Address: '.$email.'</p>
                                            <p>Service: '.$service .' (£'.$price.')</p>
                               
                                </section>
                            </body>
                        </html>';  

                        smtp_mailer($to_email,$Subject,$htmlContent);
                        
                        
             
            // end here sending email 
            
              
             header('location:https://carbon-reduction.co.uk/stripe/card.php');
             
             
            exit();
        
        }

        
        else
        {
            echo"failed";
        }
        
}
 function smtp_mailer($to,$subject, $msg){
                        	$mail = new PHPMailer(); 
                        	$mail->IsSMTP(); 
                        	$mail->SMTPAuth = true; 
                        	$mail->SMTPSecure = 'tls'; 
                        	$mail->Host = "mail.carbon-reduction.co.uk";
                        	$mail->Port = 587; 
                        	$mail->IsHTML(true);
                        	$mail->CharSet = 'UTF-8';
                            //$mail->SMTPDebug = 2; 
                        	$mail->Username = "no-reply@carbon-reduction.co.uk";
                        	$mail->Password = "Sh{wtOJJl_G!";
                        	$mail->SetFrom("no-reply@carbon-reduction.co.uk");
                        	$mail->Subject = $subject;
                        	$mail->Body =$msg;
                        	$mail->AddAddress($to);
                        	$mail->SMTPOptions=array('ssl'=>array(
                        		'verify_peer'=>false,
                        		'verify_peer_name'=>false,
                        		'allow_self_signed'=>false
                        	));
                        	$mail->Send();
                        }
                
?>