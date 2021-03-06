<!--<?php
session_start();
include('login.php');

include_once('db_connect.php');

$query="SELECT * FROM visa_1 where f_nm!=''";
$result=mysqli_query($connection, $query);

?>-->
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

                                        

                
                                      
                                              <form class="needs-validation" novalidate>



                                                <label><h3>Visa Applications (Verification Pending)</h3></label>
                                                <br><br>
                                                <table border="2px" width="70%" >
                                                    

                                                <tr>
                                                   
                                                    <th>Sl. No.</th>
 
                                                   <th  style="text-align: center " >Username</th>
                                                   <th style="text-align: center">Application No.</th>

                                                   <th style="text-align: center  ">Verify Details</th>
                                                  

                                                </tr>

                                                <?php
                                                 

                                                $count=0;
                                                

                                                while ($rows=mysqli_fetch_assoc($result)) 
                                               {
                                                   $count++;
                                                    
                                                ?>


                                                <tr >

                                                   
                                                    <td align="center"><?php echo $count ?></td>
                                                    <td align="center"><?php  echo $rows['username']; ?></td>
                                                    <td align="center"><?php  echo $rows['application_no']; ?></td>
                                                    <td align="center" ><a href="pending_visa_users.php?uname=<?php echo $rows['username']; ?> " class="btn btn-primary">Verify</a></td>

                                                    
                                                    


                                                </tr>


                                                <?php
                                                 
                                                 }

                                                ?>
                                                
                                                </table>

                                                

                                                <br><br>
                                                  
                                
                                                                                                  
                                             
                                                <button class="btn btn-primary" type="submit"><a href="passport_applications.php" style="color: white">Show Passport Applications</a></button>
                                                  <button class="btn btn-primary" type="submit">Show Visa Applications</button>
                                            </form>  


                                           <!-- <script type="text/javascript">
                                                
                                                function identify() 

                                                {         
                                                          
                                                         if(document.getElementById('1').onclick)
                                                         {
                                                            console.log('button 1 is preesed');
                                                            alert('button 1 pressed');

                                                         }


                                                         if(document.getElementById('2').onclick)
                                                         {
                                                            console.log('button2 is preesed');
                                                            alert('button 2 pressed');

                                                         }


                                                    



                                            }

                                             </script>  -->


                                             <script>
                                            $(document).ready(function(){
                                              $('1').click(function(){
                                                     $('2').hide();
                                                          });
                                                       });
                                                        </script>                                
                                         

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