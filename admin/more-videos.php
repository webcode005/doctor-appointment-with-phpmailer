<?php
require('../include/config.php');
if(!isset($_SESSION['user']))
{
  header("location:index.php"); 
}

if(isset($_POST['subm']))
{
      
 
        $cid=mysqli_real_escape_string($conn,$_POST['cid']); 
        $up_date=mysqli_real_escape_string($conn,$_POST['udate']);
      
        move_uploaded_file($_FILES['pdf']['tmp_name'],"udata/pdf/".$pdf);
        
        
        $video=time().'_'.mysqli_real_escape_string($conn,$_FILES['video']['name']);
        
        
         move_uploaded_file($_FILES['video']['tmp_name'],"udata/video/".$video);


        $added_on=date('d/m/Y');
        
        
        $sql = "INSERT INTO `uvideos` ( `consultation_id`, `videos`, `up_date`) VALUES ( '$cid',  '$video','$up_date')";
        
        if ($conn->query($sql) === TRUE) {

            
             echo'<script> alert("Uploaded!");window.location ="record-data-view.php?id='.$cid.'"; </script>';
            
             
            exit();
        
        }

        
        else
        {
            echo"failed";
        }
        
}


?>