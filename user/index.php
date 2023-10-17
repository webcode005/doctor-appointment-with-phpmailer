 <?php
require('../include/config.php');
if(isset($_SESSION['user']))
{
  header("location:dashboard.php"); 
}
					if(isset($_POST['login']))
					{
							$user  = $_POST['user'];
							$password = $_POST['password'];
	
							 $login = "select * from signup where email ='$user' AND phone='$password'";

                           

							$run  = mysqli_query($conn,$login);
							
							
	
						if(mysqli_num_rows($run)>0)
						{
						        $srow = $run->fetch_assoc();
						        
						         $cname = $srow["comp_name"];
						        
						       
						        $_SESSION['cname'] = $cname;
						        
								$_SESSION['user'] = $user;
								
								
								
								echo "<script>window.open('dashboard.php' , '_self')</script>";
						}
						else
						{
						echo "<script>alert('user or password is invalid')</script>";
						}
				}		
?>



<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title> User </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                                <!-- Social login form-->
                                <div class="card my-5">
                                    <div class="card-body card-main text-center">
                                        <div class="logo-main-admin">
                                        <img src="images-main/titan-logo.png">
                                        </div>
                                       
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body p-5">
                                        <!-- Login form-->
                                         <form method="post">
                                            <!-- Form Group (email address)-->
                                            <div class="form-group">
                                                <label class="text-gray-600 small" for="emailExample">Username</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="Enter Here" aria-label="Email Address" aria-describedby="emailExample"  name="user" required/>
                                            </div>
                                            <!-- Form Group (password)-->
                                            <div class="form-group">
                                                <label class="text-gray-600 small" for="passwordExample">Password</label>
                                                <input class="form-control form-control-solid" type="password" placeholder="Enter Here" aria-label="Password" aria-describedby="passwordExample" name="password" required />
                                            </div>                                            
                                            <!-- Form Group (login box)-->
                                            <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                                <button name="login" class="btn btn-primary">Login Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <style>
                                .btn-primary
                                    {
                                        color: #fff!important;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script src="js/sb-customizer.js"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
    </body>
</html>
