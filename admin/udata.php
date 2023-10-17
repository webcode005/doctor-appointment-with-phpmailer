<?php
require('../include/config.php');
if(!isset($_SESSION['user']))
{
  header("location:index.php"); 
}

if(isset($_POST['subm']))
{
      
 
        $comp_name=mysqli_real_escape_string($conn,$_POST['comp_name']); 
        // $email=mysqli_real_escape_string($conn,$_POST['cust_email']);
        // $mobile=mysqli_real_escape_string($conn,$_POST['cust_mobile']);
        // $website=mysqli_real_escape_string($conn,$_POST['website']);
        // $bdate=mysqli_real_escape_string($conn,$_POST['bdate']);

        $pdf=mysqli_real_escape_string($conn,$_FILES['pdf']['name']);
        
        move_uploaded_file($_FILES['pdf']['tmp_name'],"udata/pdf/".$pdf);
        
        
        $video=mysqli_real_escape_string($conn,$_FILES['video']['name']);
        
        
         move_uploaded_file($_FILES['video']['tmp_name'],"udata/video/".$video);


        $added_on=date('d/m/Y');
        
        
        $sql = "INSERT INTO `UDatarecords` (`comp_name`, `pdf`, `video`,`udate`) 
        VALUES ( '$comp_name', '$pdf', '$video','$added_on')";
        
        if ($conn->query($sql) === TRUE) {

            
             echo'<script> alert("Thank You!");window.location ="user-data.php"; </script>';
            
             
            exit();
        
        }

        
        else
        {
            echo"failed";
        }
        
}


?>