<?php
require('include/config.php');
include('smtp/smtp/PHPMailerAutoload.php');
if(isset($_POST['bdetails']))
{
      
        $name=mysqli_real_escape_string($conn,$_POST['cust_name']); 
        $comp_name=mysqli_real_escape_string($conn,$_POST['comp_name']); 
        $email=mysqli_real_escape_string($conn,$_POST['cust_email']);
        $mobile=mysqli_real_escape_string($conn,$_POST['cust_mobile']);
        $website=mysqli_real_escape_string($conn,$_POST['website']);
        $bdate=mysqli_real_escape_string($conn,$_POST['bdate']);

        $time=mysqli_real_escape_string($conn,$_POST['time']);
        $remarks=mysqli_real_escape_string($conn,$_POST['remarks']);
        
       
        $sql1 = "SELECT booking_time FROM `book_time` WHERE bid='$time'";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
          // output data of each row
          $time_row = $result1->fetch_assoc();
             $times = $time_row['booking_time'];
          
        } 
        
        
        $added_on=date('Y-m-d h:i:s');
        
        
        $sql = "INSERT INTO `book` ( `name`, `comp_name`, `email`, `phone`, `website`, `bdate`, `btime`, `remarks`, `rdate`) 
        VALUES ( '$name', '$comp_name', '$email', '$mobile', '$website', '$bdate', '$time', '$remarks', '$added_on')";
        
        if ($conn->query($sql) === TRUE) {

            $book_id = $conn->insert_id;

            mysqli_query($conn,"INSERT INTO `booked_slot` ( `book_time`, `book_date`, `status`, `book_id`, `crdate`) 
            VALUES ( '$time', '$bdate', '1', '$book_id', CURRENT_TIMESTAMP)");
            
            
            // send email
                  
            
            $to_email = 'info@carbon-reduction.co.uk'; 
     
 
            $Subject = "Free Consultation Enquiry - " .$name; 
         
            $htmlContent = ' 
                        <!doctype html>
                        <html>
                            <head>
                              <meta charset="UTF-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            </head>
                            <body>
                                <section class="lg:px-24 px-4 lg:pt-24 pt-4 ">
                                 
                                 <p class="mt-2 text-sm">Enquiries Details are as follows:</p>
                                
                                    
                                    
                                    		<p>Name: '.$name.'</p>
                                    		<p>Company Name: '.$comp_name.'</p>
                                            <p>Website: '.$website.'</p>
                                            <p>Phone Number: '.$mobile.'</p>
                                            <p>Email Address: '.$email.'</p>
                                            <p>Date: '.$bdate.'</p>
                                            <p>Time Slot: '.$times.'</p>
                                            <p>Message: '.$remarks.'</p> 
                                    
                                </section>
                            </body>
                        </html>';  

                    
                        smtp_mailer($to_email,$Subject,$htmlContent);
                        
                        
             
            // end here sending email 
            
              echo'<script> alert("Thank You!");window.location ="index.php"; </script>';
            
             
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