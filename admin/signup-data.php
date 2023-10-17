<?php
include '../include/config.php';
if(!isset($_SESSION['user']))
{
  header("location:index.php"); 
}
$pagetitle = 'Tital Global Services Ltd';
$description='';
$keywords = '';
include 'include/header.php';

if (isset($_GET["id"]) && !empty($_GET["id"])) {
     $id =  $_GET["id"];

    $sql = "DELETE FROM `signup` WHERE id='$id'"; 

    if ($conn->query($sql) === TRUE) {
              
         echo'<script> alert("Record Deleted!");window.location ="signup-data.php"; </script>';
        exit();
    
    }
    else
    {
        echo"failed";
    }
}

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
                            <div class="card-header">Signup Data</div>
                                
                            <div class="card-body">
                                <style>
                                    .bottom-10
                                    {
                                        margin-bottom:10px;
                                        font-size:14px;
                                    }
                                </style>
                                <button class="btn btn-primary bottom-10" onclick="ExportToExcel('xlsx')">Export Data to Excel</button>
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Name</th>
                                                <th>Company Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Service</th>
                                                <th>Payment Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php 
                                                    $sql = "SELECT * FROM signup ORDER BY id DESC";
                                                    $result = $conn->query($sql);
                                                    $k=1;
                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {
                                                            
                                                            $sid = $row['id'];
                                                        
                                                           $payment_row = mysqli_fetch_assoc(mysqli_query($conn,"select * from stripe_payment where item_description ='$sid' order by id desc"));
                                                           
                                                            
                                                              $payment_status = $payment_row['payment_status'];
                                                        ?>
                                                        
                                                            <tr>
                                                                <td><?php echo $k++;?></td>
                                                                <td><?php echo $row['name'];?></td>
                                                                <td><?php echo $row['comp_name'];?></td>
                                                                <td><?php echo $row['phone'];?></td>
                                                                <td><?php echo $row['email'];?></td>
                                                                <td><?php echo $row['service'];?></td>
                                                                <td><?php 
                                                                             if (!empty($payment_status) && $payment_status =="succeeded") {
                                                                                echo '<span class="green"><b> Success</b></span>';
                                                                            } else {
                                                                                echo '<span class="payment"><b> Failed</b></span>';
                                                                            }
                                                                        
                                                                        ?>
                                                                </td>

                                                                <td>
                                                                
                                                                <button data-toggle="modal" data-target="#exampleModal_<?php echo $row['id'];?>_" class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button>
                                                    
                                                                    <a href="?id=<?php echo $row['id'];?>&del=1"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button></a>
                                                                    
                                                                </td>
                                                                
                                                            </tr>
                                                                
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal_<?php echo $row['id'];?>_" tabindex="-1" aria-labelledby="exampleModal_<?php echo $row['id'];?>_Label" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModal_<?php echo $row['id'];?>_Label">Singup Detail</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p><b>Contact Name:</b> <?php echo $row['name'];?></p>
                                                                        <p><b>Company Name:</b> <?php echo $row['comp_name'];?></p>
                                                                        <p><b>Website:</b> <?php echo $row['website'];?></p>
                                                                        <p><b>Phone No:</b> <?php echo $row['phone'];?></p>
                                                                        <p><b>Email Id:</b> <?php echo $row['email'];?></p>
                                                                        <p><b>Service: </b> <?php echo $row['service'];?></p>
                                                                        <?php 
                                                                             if (!empty($payment_status) && $payment_status =="succeeded") {
                                                                                echo '<span class="green"><b> Success</b></span>';
                                                                            } else {
                                                                                echo '<span class="payment"><b> Failed</b></span>';
                                                                            }
                                                                        
                                                                        ?>
                                                                        
                                                                    </div>
                                                                    
                                                                    </div>
                                                                </div>





                                                        <?php 
                                                     } 
                                            }
                                                else 
                                                {
                                                    echo "0 results";
                                                }
                                                $conn->close(); 
                                        ?>
                                   
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                    </div>
                </main>
            
</div>
                <?php
include 'include/footer.php';
?>