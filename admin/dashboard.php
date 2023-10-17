<?php
require('../include/config.php');
$pagetitle='Dashboard';
if(!isset($_SESSION['user']))
{
  header("location:index.php"); 
}

include 'include/header.php';
if (isset($_GET["id"]) && !empty($_GET["id"])) {
     $id =  $_GET["id"];

    $sql = "DELETE FROM `book` WHERE id='$id'"; 

    if ($conn->query($sql) === TRUE) {
              
         echo'<script> alert("Record Deleted!");window.location ="dashboard.php"; </script>';
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
                            <div class="card-header">Free Consultation Data</div>
                               
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
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                                    $sql = "SELECT * FROM book INNER JOIN book_time ON book.btime = book_time.bid ORDER BY book.id DESC";
                                                    $result = $conn->query($sql);
                                                    $k=1;
                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {

                                                        ?>
                                                        
                                                            <tr>
                                                                <td><?php echo $k++;?></td>
                                                                <td><?php echo $row['name'];?></td>
                                                                <td><?php echo $row['comp_name'];?></td>
                                                                <td><?php echo $row['phone'];?></td>
                                                                <td><?php echo date("d/m/Y", strtotime($row['bdate']));?></td>
                                                                <td><?php echo $row['booking_time'];?></td>

                                                                <td>
                                                                
                                                                    <a href="free-consultation-data.php?id=<?php echo $row['id'];?>"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button></a>
                                                                    
                                                                    <a href="?id=<?php echo $row['id'];?>"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button></a>
                                                                    
                                                                </td>
                                                                
                                                            </tr>
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
                <?php
include 'include/footer.php';
?>