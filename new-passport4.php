<!--<?php
session_start();
include('login.php');
$abc=$_SESSION['username'];
$query1="SELECT image FROM login WHERE username='$abc' and image!=''";
$result1=mysqli_query($connection, $query1);
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
                                    <a class="disabled">New Passport</a>
                                </li>
                                <li>
                                    <a class="disabled">Passport Extension</a>
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
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                          <?php

                                          if($result1->num_rows >0)
                                          {
                                            while($rows=mysqli_fetch_array($result1))
                                            
                                            {
                                           echo '<img height="300" alt="user-image" width="300"  class="rounded-circle" src=" data:image;base64,'.$rows['image'].' ">';
                                             
                                                  
                                               }

                                          }


                                         else
                                         {

                                          echo '<img height="300" alt="user" width="300"  class="rounded-circle" src="assets/img/profile_picture.jpg">';
                                            
                                            }



                                        
                                           

                                           ?>
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
                                    <a href="index.html" class="dropdown-item notify-item">
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
                                    <h4 class="page-title">New Passport</h4>
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

                                        <h4 class="header-title mb-3">New Passport Application</h4>

                                            <div id="rootwizard">
                                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                              
                                                    <li class="nav-item" data-target-form="#otherForm">
                                                        <a href="#fourth" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                            <span class="d-none d-sm-inline">Credentials</span>
                                                        </a>
                                                    </li>
                                                   
                                                </ul>

                                                <div class="tab-content mb-0 b-0">
                                             
                                                    
                                                        <div class="tab-pane fade" id="fourth">
                                                        <form id="otherForm" method="post" action="Passport4.php" enctype="multipart/form-data"  class="form-horizontal">
                                                            <div class="row">
                                                                <div class="col">
                                                                <div class="form-group mb-3">
                                                                    <label class="col-md-8 col-form-label" for="userName3">Qualification Level</label>
                                                                    <div class="col-md-8">
                                                                    <select class="form-control" name="qualification" required>
                                                                        <option value="">Choose</option>
                                                                        <option >College Degree</option>
                                                                        <option >Associate Degree</option>
                                                                        <option >Vocational Degree</option>
                                                                        <option >Graduate</option>
                                                                        <option >Doctorate</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- end col -->
                                                                
                                                              <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-8 col-form-label" for="userName3">Aadhar Number*</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000-0000-0000" name="aadhar_no" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-8 col-form-label" for="userName3">Pan Number</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000000000" name="pan_no" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                             <div class="col">   
                                                            <div class="form-group mb-3">
                                                                <label class="col-md-8 col-form-label" for="example-fileinput">Signature</label>
                                                                <div class="col-md-12">
                                                                <input type="file" id="example-fileinput" class="form-control-file" name="image" required>
                                                                </div>
                                                            </div>
                                                                </div>
                                                                
                                                                <div class="col">   
                                                            <div class="form-group mb-3">
                                                                <label class="col-md-8 col-form-label" for="example-fileinput">Aadhar Card</label>
                                                                <div class="col-md-12">
                                                                <input type="file" id="example-fileinput" class="form-control-file" name="aadhar_pic" required>
                                                                </div>
                                                            </div>
                                                                </div>
                                                                
                                                                <div class="col">   
                                                            <div class="form-group mb-3">
                                                                <label class="col-md-8 col-form-label" for="example-fileinput">Current Picture</label>
                                                                <div class="col-md-12">
                                                                <input type="file" id="example-fileinput" class="form-control-file" name="photo" required>
                                                                </div>
                                                            </div>
                                                                </div>

                                                            
                                                                
                                                            </div>
                                                            <!-- end row -->
                                                              <ul class="list-inline wizard mb-0">
                                                        
                                                     
                                                        <li class="next list-inline-item float-right"><button class="btn btn-info" type="submit">Next</button></li>
                                                    </ul>
                                                        </form>
                                                    </div>
                                                    
                                                    

                                                

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

      

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>


        <!-- demo app -->
       <script src="assets/js/pages/demo.form-wizard.js"></script>
        
        <!-- end demo js-->
        
        
        
        


    </body>

</html>