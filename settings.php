<!--<?php
session_start();
include('login.php');

$abc=$_SESSION['username'];


include_once('db_connect.php');
$query="SELECT * FROM login WHERE username='$abc'";
$result=mysqli_query($connection, $query);

$query1="SELECT image FROM login WHERE username='$abc' and image!=''";
$result1=mysqli_query($connection, $query1);

$count=mysqli_num_rows($result1);


$query2="SELECT * FROM login where username='$abc' and nationality='citizen'";
$result2=mysqli_query($connection,$query2);

$count2=mysqli_num_rows($result2);

?>-->

<!DOCTYPE html>
    <html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Stupid Kout Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Shitty Platform" name="description" />
        <meta content="Justin" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

    

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .drop_target {
        
  background: hsl(0, 0%, 90%);
  border-color: transparent;
  border-radius: 100em;
  width: 100px;
  height: 100px;
  transition: all 0.2s;
}
.drop_target input[type="file"] {
  visibility: hidden;
}
.drop_target:before {
  content: '\f0ee';
  font-family: FontAwesome;
  position: absolute;
  display: block;
  width: 87px;
  line-height: 90px;
  text-align: center;
  font-size: 32px;
  color: rgba(0, 0, 0, 0.3);
  transition: color 0.2s;
}
.drop_target:hover,
.drop_target.dropping {
  background: #3688fc;
 
}
.drop_target:hover:before,
.drop_target.dropping:before {
  color: rgba(0, 0, 0, 0.6);
}
        
      .image_preview {
        background: no-repeat center;
        background-size: cover;
        border: none;
          width: 100%;
          height: 100%;
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

                        <li class="side-nav-item">
                            <a href="


                           <?php

                            
                          if($count2==1)

                          {
                            echo "citizen_dash.php";
                          }



                          else
                          {
                            echo "f_dashboard.php";
                          }


                           ?>






                            " class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                         

                         <div style="display: 

                            <?php


                            if($count2==1)
                            {
                                echo "none";
                            }

                            else
                            {
                                echo "block";
                            }


                            ?>


                         ">
                        <li class="side-nav-title side-nav-item">Foreigner</li>

                        <li class="side-nav-item">
                            <a href="resident-permit.html" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span>Residential Permit </span>
                            </a>
                        </li>
                        
                        <li class="side-nav-item">
                            <a href="visa-renewal.html" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span>Visa Renewal</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="support-center.html" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Support Center </span>
                            </a>
                        </li>
                        </div>



                        <div style="display: 

                            <?php


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
                        
                        <li class="side-nav-title side-nav-item">Citizen</li>
                        
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Passport </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="new-passport.html">New Passport</a>
                                </li>
                                <li>
                                    <a href="passport-extension.html">Passport Extension</a>
                                </li>
                                <li>
                                    <a href="missing-passport.html">Missing Passport</a>
                                </li>
                            </ul>
                        </li>

                         </div>
                        

            
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
                            

                                           <?php

                                          if($result1->num_rows >0)
                                          {
                                            while($rows=mysqli_fetch_array($result1))
                                            
                                            {
                                           echo '<img height="300" alt="user" width="300"  class="rounded-circle" src=" data:image;base64,'.$rows['image'].' ">';
                                             
                                                  
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
                                        <span class="account-position">Diplomat</span>
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
                                    <h4 class="page-title">My Account</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                            </div> <!-- end col -->

                    
                <!-- Start Content-->
                <div class="container-fluid">
                    
                 <div class="row">
                         
                     <!--SETTINGS START-->
                            
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                    Settings
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                
    
                                            <div class="tab-pane active" id="settings">
                                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                                    
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-camera mr-1"></i> Display Picture</h5>
                                          
                                                    
                                                    
                                                  <div class="row pb-3">
                                                        <div class="col-md-6">
                                                       <div class="form-group">
                                                           
                                                  <label class="drop_target img-thumbnail">
                                                    <div class="image_preview rounded-circle avatar-lg"></div>
                                                    <input id="inputFile" type="file" name="image"/>
                                                  </label>
                                                           
                                                  <br>
                                                        <li class="next list-inline-item px-1"><a class="btn btn-danger text-light" data-action="remove_current_image"><i class="mdi mdi-autorenew mr-1"></i>Clear </a></li>
                                                      
                                                    
                                              <!--    <div class="image_details">
                                                    
                                                   label.input_line.image_alt//input(type='text' placeholder='Alternative Text')
                                                   
                                                    a.confirm(data-action='confirm_image_details')//i.fa.fa-check-circle
                                                    
                                                  </div> -->
                                                           
                                                        </div>
                                                        </div> 
                                                    </div> <!-- end row -->
                                                    
                                                    

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>

                                                    <?php

                                                    while ($rows=mysqli_fetch_assoc($result))

                                                     {
                                            
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">Username</label>
                                                                <br>
                                                                <label><?php echo $rows['username']; ?></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">Name</label>
                                                                <br>
                                                                <label><?php echo $rows['name']; ?></label>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                   
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="useremail">Email Address</label>
                                                                <br>
                                                                <label><?php echo $rows['email']; ?></label>
                                                                <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="userpassword">Password</label>
                                                                <br>
                                                                <label><?php echo $rows['password']; ?></label>
                                                                <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span><?php } ?>


                                                              
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    
                                                    
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-success mt-2" name="submit"><i class="mdi mdi-content-save"></i> Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end settings content-->
    
                                        </div> <!-- end tab-content -->
                                    </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                    
                    
                                                        
                                                        
                  
             
       
                        </div>
                    
                    
                    </div>
   

                </div>



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
        
        <!-- Display Pics code -->
       <script src="assets/js/fileupload.js"></script>
        
        <!-- end demo js-->
     


    </body>

</html>