 <?php
 require_once 'config.php';
 require_once 'dbclass.php';

    $db = new DB;
   
 
 ?>
 
 
    <!--Send User Login Email-->
  <?php  
            $email = 'basant.mallick@digiclawmedia.com';
            
            $to = 'mohammadkaleem61@gmail.com,basant.mallick@digiclawmedia.com,sumit12362ur@gmail.com';
          
          
            $from = 'info@haldiramrestaurant.in'; 
            $fromName = 'TITAN GLOBAL SERVICES'; 
             
            $subject = "Email From TITAN GLOBAL SERVICES"; 
            
             // Fetch the transaction details from DB using Transaction ID
                $db->query("SELECT * FROM `signup` WHERE email=:email");
                $db->bind(":email", $email);
                $udetails = $db->result();
             
             
                   $fullname = $udetails['name'];
             
                   $phone = $udetails['phone'];
                 
             
            
             
             
            $htmlContent = ' 
                <html> 
                <head> 
                    <title>Welcome to TITAN GLOBAL SERVICES</title> 
                </head> 
                <body> 
                     <h2><strong>Dear </strong> '. $fullname.',</h2>
                    <h3>Thanks you for joining with us!</h3> 
                    <p> Visit Url <b><a href="https://haldiramrestaurant.in/titan-website/user/">https://haldiramrestaurant.in/titan-website/user/</a></b> For login :</p>
                
                    <p>  Use Username:<b> '. $email.'</b> and Password: <b>'.$phone.'</b> </p>
                    <p> Thanks.</p>
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
    
    