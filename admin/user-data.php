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

    $sql = "DELETE FROM `UDatarecords` WHERE udrid='$id'"; 

    if ($conn->query($sql) === TRUE) {
              
         echo'<script> alert("Record Deleted!");window.location ="user-data.php"; </script>';
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
                            <div class="card-header">User Data Records</div>
                                
                            <div class="card-body">
                                <form class="row" method="post" action="udata.php" enctype="multipart/form-data">
                                    
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select Company Name</label>
                                        <select class="custom-select" name="comp_name" required>
                                          <option selected>Select Company</option>
                                           <?php 
                                                    $sql = "SELECT DISTINCT(comp_name) FROM `book` ORDER BY comp_name ASC";
                                                    $result = $conn->query($sql);
                                                    $k=1;
                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {

                                                        ?>
                                                        
                                                         <option value="<?php echo ucfirst($row['comp_name']);?>"><?php echo ucfirst($row['comp_name']);?></option>
                                          
                                          
                                            
                                                        <?php 
                                                     } 
                                            }
                                              
                                        ?>
                                        
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Upload PDF File</label>
                                    <input type="file" class="form-control" id="customFile"  name="pdf" required/>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Upload Meeting Video</label>
                                    <input type="file" class="form-control" id="customFile" name="video" required />
                                    </div>
                                    </div>
                                    
                                    
                                    <!-- Save changes button-->
                                    <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit" name="subm">Submit</button>
                                    </div>
                                        </form>
                                <br>
                                
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Company Name</th>
                                                <th>Upload Date</th>
                                                <th>PDF</th>
                                                <th>Video</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                             <?php 
                                                    $sql = "SELECT * FROM UDatarecords ORDER BY udrid DESC";
                                                    $result = $conn->query($sql);
                                                    $k=1;
                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {

                                                        ?>
                                                        
                                            
                                                        
                                                            <tr>
                                                                <td><?php echo $k++;?></td>
                                                                <td><?php echo $row['comp_name'];?></td>
                                                                  <td><?php echo $row['udate'];?></td>
                                                              
                                                
                                                <td class="pdf-main text-center"><a href="udata/pdf/<?php echo $row['pdf'];?>" target="_blank">
                                                    <img src="images-main/pdf.png">
                                                    </a></td>
                                                <td class="video-main text-center"><a href="udata/video/<?php echo $row['video'];?>" target="_blank">
                                                    <img src="images-main/video.png">
                                                    </a></td>
                                                
                                                <td>
                                                
                                                    <a href="record-data-view.php?id=<?php echo $row['udrid'];?>"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="eye"></i></button></a>
                                                    
                                                    <a onclick="if((confirm('ok'))){window.location.href='?id=<?php echo $row['udrid'];?>';return true;}" href="#"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button></a>
                                                    
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