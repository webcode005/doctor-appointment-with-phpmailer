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


$id = $_GET["id"];
 $sql = "SELECT * FROM book INNER JOIN book_time ON book.btime = book_time.bid WHERE book.id='$id'";
$result = $conn->query($sql);

    // output data of each row
   $row = $result->fetch_assoc();
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
                            <div class="card-header">Free Consultation Data</div>
                                
                            <div class="card-body detail-client">
                                <div class="add-packages">
                                    <a href="dashboard.php"><button class="btn pull-right btn-primary" type="button">Go Back</button></a>
                                    <br>
                                    <br>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <p><b>Client Basic Detail</b></p>
                                    <hr>
                                    <p><b>Contact Name:</b> <?php echo $row['name'];?></p>
                                    <p><b>Company Name:</b> <?php echo $row['comp_name'];?></p>
                                    <p><b>Website:</b> <?php echo $row['website'];?></p>
                                    <p><b>Phone No:</b> <?php echo $row['phone'];?></p>
                                    <p><b>Email Id:</b> <?php echo $row['email'];?></p>
                                    
                                    </div>
                                    <div class="col-md-6">
                                    <p><b>Preferable Contact Time</b></p>
                                        <hr>
                                    <p><b>Date:</b> <?php echo date("d/m/Y", strtotime($row['bdate']));?></p>
                                    <p><b>Time</b> <?php echo $row['booking_time'];?></p>
                                    </div>
                                    
                                    <div class="col-md-12 border-main">
                                    <p><b>How can we help us?</b></p>
                                    <p><?php echo $row['remarks'];?> </p>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </main>
                <?php
include 'include/footer.php';
?>