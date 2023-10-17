<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $pagetitle; ?></title>
<meta name="description" content="<?php echo $description ?>">  
<meta name="keyword" content="<?php echo $keywords ?>"> 
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="googlebot" content="noindex" />
    <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    
</head>
<body>
<!-- header area start -->
<body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a class="navbar-brand" href="index.php"><img src="images-main/titan-logo.png"></a>
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
            
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <div class="sidenav-menu-heading">Dashboard View</div>

                            <a class="nav-link" href="dashboard.php">
                                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                  Free Consultation
                            </a>
                            <a class="nav-link" href="signup-data.php">
                                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                  Signup's Data
                            </a>
                            <a class="nav-link" href="user-data.php">
                                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                  User Data Records
                            </a>
                            
                            <div class="sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="change-password.php">
                                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                                Change Password
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                                Logout
                            </a>
                            
                        </div>
                    </div>
                    
                </nav>
            </div>