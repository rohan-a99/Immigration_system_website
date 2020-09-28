<!--<?php
session_start();
include('login.php');
include('db_connect.php');

$abc=$_SESSION['username'];

$query="SELECT * from passport_details where username='$abc' and status='pending' ";
$result=mysqli_query($connection,$query);
$count = mysqli_num_rows($result);

$query2="SELECT * from passport_details where username='$abc' and status='under verification' ";
$result2=mysqli_query($connection,$query2);
$count2 = mysqli_num_rows($result2);

$query4="SELECT * from passport_details where username='$abc' and status='application received' ";
$result4=mysqli_query($connection,$query4);
$count4 = mysqli_num_rows($result4);


$query5="SELECT image FROM login WHERE username='$abc' and image=''";
$result5=mysqli_query($connection, $query5);
$count5 = mysqli_num_rows($result5);

$query6="SELECT * from passport_details where username='$abc' and status='verified' ";
$result6=mysqli_query($connection,$query6);
$count6 = mysqli_num_rows($result6);


$query1="SELECT image FROM login WHERE username='$abc' and image!=''";
$result1=mysqli_query($connection, $query1);


$query10="SELECT image FROM login WHERE username='$abc' and image=''";
$result10=mysqli_query($connection, $query10);
$count10=mysqli_num_rows($result10);


$query3="SELECT name FROM login WHERE username='$abc'";
$result3=mysqli_query($connection, $query3);
$count3 = mysqli_num_rows($result3);

?>-->


<!DOCTYPE html>
    <html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Kout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

    

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

                        <li class="side-nav-item">
                            <a href="citizen_dash.php" class="side-nav-link">
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

                                <div style="display: <?php 

                                   
                                   if($count4==1)
                                   {
                                    echo "none";
                                   }

                                   else
                                   {
                                    echo "block";
                                   }



                                   ?>">
                                <li>
                                    <a href="new-passport1.php">New Passport</a>
                                </li>
                               </div>


                               <div style="display: <?php 

                                   
                                   if($count2!=1)
                                   {
                                    echo "none";
                                   }

                                   else
                                   {
                                    echo "block";
                                   }



                                   ?>">

                                   <li>
                                       <a class="disabled">New Passport</a>
                                   </li>                                   
                               </div>

 

                                <li>
                                    <a href="passport_renewal_1.php">Passport Renewal</a>
                                </li>

                            </ul>
                        </li>

                

            
                    </ul>




    <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
<center>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
     
      </div>
      <div class="modal-body">
        <form method="post" id="form2">
            
            <p>You Have Already Filled your Passport Form.</p>

            <br>
            <div class="modal-footer">
        <button  class="btn btn-info" data-dismiss="modal" id="but1" name="save1">Ok</button>
    
      </div>
            
</form>

        
      </div>
      
    </div>
      </center>
  </div>
</div>


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

                                


                              

                                    <div class="slimscroll"  style="max-height: 230px; " >


                                        <!-- item-->

                                        <div style="display: <?php 

  if($count==1 && $count2!=1 && $count4 !=1 && $count5 !=1)
 
  {
    echo "block";
  }

  else
  {
    echo "none";
  }

  ?> ">

                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">No Notifications</p>
                                            
                                            <p class="text-muted mb-0 user-msg">
                                                <small class="text-muted"></small>
                                            </p>
                                        </a>


                                    </div>




                                   

                                        
                                        <div style="display: <?php 

  if($count4==1)

  {
    echo "block";
  }

  else
  {
    echo "none";
  }

  ?>

">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Passport Application Submitted</p>
                                            
                                            
                                        </a>

                                      </div>

                                        <!-- item-->


                                         <div style="display: <?php 

  if($count2==1)

  {
    echo "block";
  }

  else
  {
    echo "none";
  }

  ?>

">



                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning">
                                                <i class="mdi mdi-alert-circle"></i>
                                            </div>
                                            <p class="notify-details">Application under verification
                                            
                                            </p>
                                        </a>
                                      </div>

                                        <!-- item-->

                                         <div style="display: <?php 

  if($count5==1)

  {
    echo "block";
  }

  else
  {
    echo "none";
  }

  ?>

">
                                        <a href="settings.php" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger">
                                               <i class="mdi mdi-account-alert"></i>
                                            </div>
                                            <p class="notify-details">Update Profile!</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Update Account from Setting to become a verified user</small>
                                            </p>
                                        </a>

                                    
                                    
                                    </div>




 <div style="display: <?php 

  if($count6==1)

  {
    echo "block";
  }

  else
  {
    echo "none";
  }

  ?>

">











                                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger">
                                               <i class="mdi mdi-account-alert"></i>
                                            </div>
                                            <p class="notify-details">Application Verified</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Report to the nearest passport office.</small>
                                            </p>
                                        </a>

                                   </div>

                                </div>
                                
                            </li>




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
                                        <span class="account-user-name"> <?php echo $_SESSION['username'];?> </span>
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
                                    <h2 class="page-title">
                                        &nbsp 


                                        <?php
                                         if($count3 ==1)
                                          {
                                            while($rows=mysqli_fetch_array($result3))
                                            
                                            {
                                          
                                           echo "Welcome  " .$rows['name'];
                                             
                                                  
                                               }

                                          }


                                         else
                                         {

                                          echo $_SESSION['username'];
                                            
                                            }

                                            ?>

                                      
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                            </div> <!-- end col -->

                    
                <!-- Start Content-->
                <div class="container-fluid">
                    
                 <div class="row">
                         
     
                            <!-- end col-->
                    
                    
                    
                    <!-- END CHART-->
                     
                     
                     
                     
                     
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title text-primary">Track Application Progress</h4>
                                        <p class="text-muted font-14">
                                            Here’s the fastest way to check the status of your Application. No need to call Customer Service – our online results give you real-time, detailed progress as your Application.
                                        </p>

                
                                      
                                              
                                                                                                  
                                             
                                                <a href="track_status.php?username=<?php echo $abc;  ?>" class="btn btn-primary" type="submit">Track</a>
                                                                          
                                         

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