<?php
include '../include/config.php';
if(!isset($_SESSION['user']))
{
  header("location:index.php"); 
}

   if(isset($_POST["Update"])) {
    
        $oldpass=md5($_POST["oldpass"]);
        
        $pas=$_POST["newpass"];
        
        $newpass=md5($_POST["newpass"]);
        
        $rnewpass=md5($_POST["rnewpass"]);
        
          if($newpass!=$rnewpass)
            {
                 echo"<script>alert('New Password & Re Enter New Password not Matched'); window.location='change-password.php'</script>";
            }
       

         $show=$conn->query("select * from `main_admin` where id='1'");

         $row=$show->fetch_assoc();


        $pass=$row["password11"];;
        
      
       if($pass==$oldpass)
       {
           //echo "UPDATE `main_admin` SET `password11`='$newpass' , passwords='$pas' where id='1'";
             $conn->query("UPDATE `main_admin` SET `password11`='$newpass' , passwords='$pas' where id='1'");
             echo"<script>alert('Successfully Password Updated'); window.location='logout.php'</script>";
            // session_destroy();
       }
       else 
       {
         echo"<script>alert('Old Password not Matched'); window.location='change-password.php'</script>";
       }
    }




$pagetitle = 'Tital Global Services Ltd - Change Password';
$description='';
$keywords = '';
include 'include/header.php';
?>
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container">
                            <div class="page-header-content pt-4">
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container mt-n10">
                        <!-- Example Colored Cards for Dashboard Demo-->
                       
                            <div class="card mb-4">
                            <div class="card-header">Change Password</div>
                                
                            <div class="card-body">
                                <div class="add-packages">
                                <form class="row" method="post">
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Old Password" name="oldpass" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="New Password" name="newpass" required>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Re Enter New Password" name="rnewpass" required>
                                    </div>
                                    </div>
                                    
                                    <!-- Save changes button-->
                                    <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit" name="Update">Submit</button>
                                    </div>
                                        </form>
                                </div>
                                
                                
                                
                            </div>
                            </div>
                    </div>
                </main>
                <?php
include 'include/footer.php';
?>