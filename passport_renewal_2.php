<!--<?php
session_start();
include('login.php');
?>-->
<!DOCTYPE html>
    <html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Kout Immigration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Shitty Platform" name="description" />
        <meta content="Justin" name="author" />
        <!-- App favicon -->
     
    <link rel="shortcut icon" href="assets\img\brand1.png" type="image/x-icon">
    

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>
        
        <body class="loading">
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu" id="left-side-menu-container">

                    <!-- LOGO -->
                    <a href="#" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="18" id="side-main-logo">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo_sm.png" alt="" height="16" id="side-sm-main-logo">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-item">
                            <a href="c_dashboard.html" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        

                        
                        <li class="side-nav-title side-nav-item">Citizen</li>
                        
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Passport </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="new-passport.php">New Passport</a>
                                </li>
                                <li>
                                    <a href="passport_renewal.php">Passport Extension</a>
                                </li>
                                <li>
                                    <a href="missing-passport.html">Missing Passport</a>
                                </li>
                            </ul>
                        </li>

                
                    
            
                    </ul>

                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Visa Application</p>
                                            
                                            <p class="text-muted mb-0 user-msg">
                                                <small class="text-muted">Shitty Passport shipped to your registered address</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning">
                                                <i class="mdi mdi-alert-circle"></i>
                                            </div>
                                            <p class="notify-details">Visa Application rejected.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger">
                                               <i class="mdi mdi-account-alert"></i>
                                            </div>
                                            <p class="notify-details">Update Profile!</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Update Account from Setting to become a verified user</small>
                                            </p>
                                        </a>

                                    </div>
                                </div>
                                
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="assets/images/users/avatar-5.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"><?php echo $_SESSION['username'];?></span>
                                        <span class="account-position">Citizen</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                  

                                    <!-- item-->
                                    <a href="settings.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Passport Renewal</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                            </div> <!-- end col -->

                    
                <!-- Start Content-->
                <div class="container-fluid">
                    
                 <div class="row">
                         
                     <!--IMMIGRATION CHART START-->
                            
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-3">Passport Renewal Application</h4>

                                            <div id="rootwizard">
                                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                                    <li class="nav-item" data-target-form="#accountForm">
                                                        <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-account-circle mr-1"></i>
                                                            <span class="d-none d-sm-inline">Personal Info</span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>

                                                <div class="tab-content mb-0 b-0">

                                                    <div class="tab-pane" id="first">
                                                        <!-- Form BY ROWS -->
                                                        <form id="accountForm" method="post" action="passren_2.php" class="form-horizontal">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Firstname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="f_nm" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Midname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="m_nm" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Lastname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="l_nm" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                       
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                           
                                                            
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Birth date</label>
                                                                        <div class="col-md-9">
                                                                            <input class="form-control" id="example-date" type="date" name="dob" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="col mb-3">
                                                                    <div class="form-group mt-3">
                                                                    <label class="col-sm-2 col-form-label" for="userName3">Gender :</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio3" name="sex" class="custom-control-input" required>
                                                                    <label class="custom-control-label" for="customRadio3">Male</label>
                                                                </div> 
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio4" name="sex" class="custom-control-input" required>
                                                                    <label class="custom-control-label" for="customRadio4">Female</label>
                                                                </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio5" name="sex" class="custom-control-input" required>
                                                                    <label class="custom-control-label" for="customRadio5">Others</label>
                                                                </div>
                                                                    </div>
                                                            </div>
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Email</label>
                                                                        <div class="col-md-12">
                                                                            <input type="email" class="form-control" id="userName3" name="email" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Mobile no</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00 0000-0000" name="phn" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-8 col-form-label" for="userName3">Alternate no</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00 0000-0000" name="a_phn" >
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                      <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                
                                                                
                                                                 <div class="col">
                                                                <div class="form-group mb-3">
                                                                    <label class="col-md-3 col-form-label" for="userName3">Visible Identification Mark</label>
                                                                    <div class="col-md-12">
                                                                            <input type="text" class="form-control" name="vim" required>
                                                                        </div>
                                                                </div>
                                                                </div>
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                   <div class="col mb-3">
                                                                    <div class="form-group mt-3">
                                                                    <label class="col-sm-2 col-form-label" for="userName3">Marital Status</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio6" name="ms" value="no" class="custom-control-input" required>
                                                                    <label class="custom-control-label" for="customRadio6">Single</label>
                                                                </div> 
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio7" name="ms" value="yes" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio7">Married</label>
                                                                </div>
                                                                    </div>
                                                            </div>
                                                                                                                    
                                                                
                                                            </div> <!-- end row -->
                                                        </form>
                                                    </div>

                                                    
                                                    
                                                    <ul class="list-inline wizard mb-0">
                                                        
                                                        <li class="next list-inline-item float-right"><a href="passport_renewal_3.php"><button class="btn btn-info" type="submit">Next</button></a></li>
                                                    </ul>

                                                </div> <!-- tab-content -->
                                            </div> <!-- end #rootwizard-->
                                        

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                    
                    
                    
                  
             
       
                        </div>
                    
                    
                    </div>
   

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2020 - 2021 © Kout Sov
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
        

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

   
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>


        <!-- demo app -->
       <script src="assets/js/pages/demo.form-wizard.js"></script>
        
        <!-- end demo js-->
        
    </body>
    
    </html>