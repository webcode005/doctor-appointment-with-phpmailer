<?php
require('../include/config.php');
if(!isset($_SESSION['user']))
{
  header("location:index.php"); 
}
$pagetitle = 'Tital Global Services Ltd';
$description='';
$keywords = '';

include 'include/header.php';

 $user = $_SESSION['user']; 
 
 $cname = $_SESSION['cname'] ;

 $id = $_GET["id"];
 $sql = "SELECT * FROM UDatarecords WHERE comp_name='$cname'";
 $result = $conn->query($sql);

    // output data of each row
   $row = $result->fetch_assoc();
   $cname = $row['comp_name'];
   $id = $row['udrid'];
  $crow = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `book` WHERE comp_name='$cname' ORDER BY id DESC LIMIT 1")); 
   
   
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
                            <div class="card-header">Record Data Detail</div>
                                
                            <div class="card-body detail-client">
                                <div class="add-packages">
                                    <a href="logout.php"><button class="btn pull-right btn-primary" type="button">Logout</button></a>
                                    <br>
                                    <br>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <p><b>Client Basic Detail</b></p>
                                    <hr>
                                    <p><b>Contact Name:</b> <?php echo $crow['name'];?></p>
                                    <p><b>Company Name:</b> <?php echo $row['comp_name'];?></p>
                                    <p><b>Website:</b><?php echo $crow['website'];?></p>
                                    <p><b>Phone No:</b> <?php echo $crow['phone'];?></p>
                                    <p><b>Email Id:</b> <?php echo $crow['email'];?></p>
                                    <p><b>Upload Time:</b> <?php echo $row['udate'];?></p>
                                    <p class="pdf-main"><b>Uploaded PDF:</b> <a href="../admin/udata/pdf/<?php echo $row['pdf'];?>"><img src="images-main/pdf.png"></a></p>
                                    
                                    </div>
                                    <div class="col-md-6">
                                    <p><b>Uploaded Video</b></p>
                                        <hr>
                                            <video width="100%" height="240" controls>
                                              <source src="../admin/udata/video/<?php echo $row['video'];?>" type="video/mp4">
                                            
                                            </video>
                                            
                                            <hr>
                                            
                                              <?php 
                                                    $sql = "SELECT * FROM `uvideos` WHERE consultation_id='$id' ORDER BY vid DESC";
                                                    $vresult = $conn->query($sql);
                                                    $k=1;
                                                    if ($vresult->num_rows > 0) {
                                                        // output data of each row
                                                        while($vrow = $vresult->fetch_assoc()) {

                                                        ?>
                                                        
                                                            <hr>
                                                            <p><b>Upload Date: <?php echo $vrow['up_date'];?></b></p>
                                                                <video width="100%" height="240" controls>
                                                                  <source src="../admin/udata/video/<?php echo $vrow['videos'];?>" type="video/mp4">
                                                                
                                                                </video>
                                                            
                                                            <hr>     
                                                        
                                             <?php } } ?>           
                                            
                                            
                                    </div>
                                    
                                </div>
                               
                            </div>
                            </div>
                    </div>
                </main>
                <?php
include 'include/footer.php';
?>