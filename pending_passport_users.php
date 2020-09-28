<?php
session_start();
include_once('db_connect.php');

$uname=$_GET['uname'];



$query="SELECT * FROM passport_1 WHERE username='$uname'";
$result=mysqli_query($connection, $query);


$query1="SELECT * FROM passport_2 WHERE username='$uname'";
$result1=mysqli_query($connection, $query1);

$query2="SELECT * FROM passport_3 WHERE username='$uname'";
$result2=mysqli_query($connection, $query2);


$query3="SELECT * FROM passport_4 WHERE username='$uname'";
$result3=mysqli_query($connection, $query3);

$query4="SELECT application_no FROM passport_details WHERE username='$uname'";
$result4=mysqli_query($connection, $query4);


$query5="UPDATE passport_details set status='under verification' where username='$uname'";
mysqli_query($connection,$query5);



?>


<!DOCTYPE html>
    <html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Kout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
 

    

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
        <link rel="shortcut icon" href="assets\img\brand1.png" type="image/x-icon">


        <style type="text/css">
            
            th,td
            {
                padding-left: 10px;
                padding-bottom: 5px;
                padding-top: 5px;
            }
        </style>
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
                        
                        <li class="side-nav-title side-nav-item">Indian Citizens Details</li>

                          <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Passport </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="newvisa.html">New Applications</a>
                                </li>
                                <li>
                                    <a href="passport_renewal.html">Renewal Applications</a>
                                </li>

                            </ul>
                        </li>
                        

                       
                                  <li class="side-nav-title side-nav-item">Foreigner Details</li>

                          <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Visa </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="newvisa.html">New Applications</a>
                                </li>
                                <li>
                                    <a href="passport_renewal.html">Renewal Applications</a>
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
                                                <small class="text-muted">Passport shipped to your registered address</small>
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
                                        <img src="assets/img/adarsh.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"><?php echo $_SESSION['username'];?></span>
                                        <span class="account-position">Admin</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                  

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                    <h4 class="page-title">Good Morning, <?php echo $_SESSION['username'];?></h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                            </div> <!-- end col -->

                    
                <!-- Start Content-->
                <div class="container-fluid">
                    
                 <div class="row">
                         
      
                    
                    
                    
                    <!-- END CHART-->
                     
                     
                     
                     
                     
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">





                                        <h4 class="header-title text-primary">Application No.  : <?php


                                          while ($rows=mysqli_fetch_assoc($result4)) 
                                                 {


                                                 echo $rows['application_no'];
                                                 } 


                                        ?></h4>
                                        

                                        <br>

                                        <label class="header-title text-primary">Personal details</label>

                                        <br>

                                        <table border="1px" width="100%">


                                            <tr>
                                                 
                                                 <th>First Name</th>
                                                 <th>Second Name</th>
                                                 <th>Last Name</th>

                                            </tr>


                                            <?php

                                          while ($rows=mysqli_fetch_assoc($result1)) 
                                                 {
    
                                                    ?>

                                            <tr>
                                                <td><?php echo $rows['f_nm']; ?></td>
                                                <td><?php echo $rows['m_nm']; ?></td>
                                                <td><?php echo $rows['l_nm']; ?></td>
                                            </tr>

                                            <tr>
                                                 
                                                 <th>Father's Name</th>
                                                 <th>Mother's Name</th>
                                                 <th>Date of Birth</th>

                                            </tr>

                                            <tr>
                                                <td><?php echo $rows['father_nm']; ?></td>
                                                <td><?php echo $rows['mother_nm']; ?></td>
                                                <td><?php echo $rows['dob']; ?></td>
                                            </tr>


                                            <tr>
                                                 
                                                 <th>Gender</th>
                                                 <th>Email</th>
                                                 <th>Married</th>

                                            </tr>

                                            <tr>
                                                <td><?php echo $rows['gender']; ?></td>
                                                <td><?php echo $rows['email']; ?></td>
                                                <td><?php echo $rows['married']; ?></td>
                                            </tr>


                                            <tr>
                                                 
                                                 <th>Phone</th>
                                                 <th colspan="2">Alternate Phone</th>
                                                 

                                            </tr>

                                            <tr>
                                                <td><?php echo $rows['phn']; ?></td>
                                                <td colspan="2"><?php echo $rows['a_phn']; ?></td>
                                                
                                            </tr>

                                            
                                             
                                            </table>
                                            <br><br>
                                             <label class="header-title text-primary">Place of Birth</label>


                                             <table border="1px" width="100%">
                                                <tr>
                                                   <th>City/Town</th>
                                                   <th>District</th> 
                                                </tr>

                                                <tr>
                                                    <td><?php echo $rows['vil_to']; ?></td>
                                                   <td><?php echo $rows['dist']; ?></td> 
                                                </tr>

                                                <tr>
                                                    
                                                 <th>State</th>
                                                   <th>Pincode</th> 
                                                </tr>


                                                <tr>
                                                    
                                                    <td><?php echo $rows['state']; ?></td>
                                                   <td><?php echo $rows['zip']; ?></td> 
                                                </tr>
                                                 
                                                <?php

                                        }

                                        ?>

                                             </table>

                                              <br><br>
                                             <label class="header-title text-primary">Address</label>


                                             <table border="1px" width="100%">

                                              <tr><th colspan="2"><label class="header-title text-primary">Residential Address</label></th></tr>


                                              <tr>
                                                  <th colspan="2">Address</th>
                                              </tr>

                                              <?php

                                          while ($rows=mysqli_fetch_assoc($result2)) 
                                                 {
    
                                                    ?>

                                              <tr>
                                                  <td colspan="2"><?php echo $rows['r_address']; ?></td>
                                              </tr>


                                              <tr>
                                                  <th>City/Town</th>
                                                  <th>District</th>
                                              </tr>

                                              <tr>
                                                  <td><?php echo $rows['r_city']; ?></td>
                                                  <td><?php echo $rows['r_dist']; ?></td>
                                              </tr>


                                              <tr>
                                                  <th>State</th>
                                                  <th>Pincode</th>
                                              </tr>


                                              <tr>
                                                  <td><?php echo $rows['r_state']; ?></td>
                                                  <td><?php echo $rows['r_zip']; ?></td>
                                              </tr>

                                              <tr><th colspan="2"><label class="header-title text-primary">Permanent Address</label></th></tr>


                                              <tr>
                                                  <th colspan="2">Address</th>
                                              </tr>

                                              <tr>
                                                  <td colspan="2"><?php echo $rows['p_address']; ?></td>
                                              </tr>


                                              <tr>
                                                  <th>City/Town</th>
                                                  <th>District</th>
                                              </tr>

                                              <tr>
                                                  <td><?php echo $rows['p_city']; ?></td>
                                                  <td><?php echo $rows['p_dist']; ?></td>
                                              </tr>


                                              <tr>
                                                  <th>State</th>
                                                  <th>Pincode</th>
                                              </tr>


                                              <tr>
                                                  <td><?php echo $rows['p_state']; ?></td>
                                                  <td><?php echo $rows['p_zip']; ?></td>
                                              </tr>


                                              <?php

                                          }

                                          ?>
                                             </table>

                                             <br><br>


                                             <label class="header-title text-primary">Proof details</label>
                                             <table  border="1px" width="100%">
                                                 
                                               <tr>
                                                   <th>Qualification</th>
                                                   <th>Pan No.</th>
                                               </tr>

                                               <?php

                                          while ($rows=mysqli_fetch_assoc($result3)) 
                                                 {
    
                                                    ?>

                                                <tr>
                                                   <td><?php echo $rows['qualification']; ?></td>
                                                   <td><?php echo $rows['pan_no']; ?></td>
                                               </tr>

                                               <tr>
                                                   <th>Aadhar No.</th>
                                                   <th>Aadhar Picture</th>
                                               </tr>

                                                <tr >
                                                   <th style="padding-bottom: 40px; padding-top: 40px;" ><?php echo $rows['aadhar_no']; ?></th>
                                                   <th style="padding-top: 40px; padding-bottom: 40px; padding-left: 50px"><?php 




        
            echo '<img height="200" width="500" src=" data:image;base64,'.$rows['aadhar_pic'].' ">';
        
        


             ?></th>
                                               </tr>


                                               <tr>

                                                <th>Signature</th>
                                                <th>Picture</th>
                                               </tr>


                                                <tr >
                                                   <th style="padding-bottom: 40px; padding-top: 40px; padding-left: 30px;" ><?php 




        
            echo '<img height="200" width="500" src=" data:image;base64,'.$rows['signature'].' ">';
        
        


             ?></th>
                                                   <th style="padding-left: 50px"><?php 




        
            echo '<img height="200" width="500" src=" data:image;base64,'.$rows['photo'].' ">';
        
        


             ?></th>
                                               </tr>
                                               

                                               <?php
                                           }

                                           ?>





                                             </table>

                                            
                                       


                                        <br>
                                        <br>

                
                                      
                                              <form class="needs-validation" novalidate>
                                                  
                                
                                                                                                  
                                             
                                                <button class="btn btn-primary" type="submit"><a href="passport_applications.php" style="color: white">Update Status</a></button>
                                                  <button class="btn btn-primary" type="submit">Reject Application</button>
                                            </form>                                    
                                         

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
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

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="apexcharts.com/samples/assets/stock-prices.js"></script>
        <script src="apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="assets/js/pages/demo.apex-line.js"></script>
        
        <!-- end demo js-->
        
        
        


    </body>

</html>