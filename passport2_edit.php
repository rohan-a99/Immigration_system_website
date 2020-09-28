<!--<?php
session_start();
include('login.php');
include('db_connect.php');


$abc=$_SESSION['username'];


$query="SELECT * from passport_2 where username='$abc'";
$result=mysqli_query($connection,$query);

$query2="SELECT * from passport_2 where username='$abc' and married='y'";
$result2=mysqli_query($connection,$query2);
$count=mysqli_num_rows($result2);

$query3="SELECT * from passport_2 where username='$abc' and gender='Male'";
$result3=mysqli_query($connection,$query3);
$count2=mysqli_num_rows($result3);



$query4="SELECT * from passport_2 where username='$abc' and gender='Female'";
$result4=mysqli_query($connection,$query4);
$count3=mysqli_num_rows($result4);

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
                                               
                                                    <li class="nav-item" data-target-form="#accountForm">
                                                        <a href="#second" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-account-circle mr-1"></i>
                                                            <span class="d-none d-sm-inline">Personal Info</span>
                                                        </a>
                                                    </li>
                                     
                                                </ul>

                                                <div class="tab-content mb-0 b-0">
                                                     
                                                                
                                                                
                                                    <div class="tab-pane" id="second">
                                                        <!-- Form BY ROWS -->
                                                        <form id="accountForm" method="post" action="Passport2.php" class="form-horizontal">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mb-3">

                                                                        <?php

                                                                        while($rows=mysqli_fetch_assoc($result))

                                                                        {

                                                                            ?>
                                                                        <label class="col-md-7 col-form-label" for="userName3">Firstname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="f_nm" value="<?php echo $rows['f_nm']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-7 col-form-label" for="userName3">Midname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="m_nm" value="<?php echo $rows['m_nm']; ?>"  required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-7 col-form-label" for="userName3">Lastname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="l_nm" value="<?php echo $rows['l_nm']; ?>"  required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                       
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                           
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Father's name</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="ff_nm" value="<?php echo $rows['father_nm']; ?>"  required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Mother's name</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="mm_nm" value="<?php echo $rows['mother_nm']; ?>"  required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Birth date</label>
                                                                        <div class="col-md-9">
                                                                            <input class="form-control" id="example-date" type="date" name="dob" value="<?php echo $rows['dob']; ?>"  required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                  
                                                                <div class="col mb-3">
                                                                    <div class="form-group mt-3">
                                                                    <label class="col-sm-2 col-form-label" for="userName3">Gender:</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio2" name="sex" class="custom-control-input" value="Male"



                                                                     <?php


                                                                     if($count2 == 1)
                                                                     {
                                                                        echo "checked";
                                                                     }



                                                                     ?>


                                                                     required>
                                                                    <label class="custom-control-label" for="customRadio2">Male</label>
                                                                </div> 
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio13" name="sex" class="custom-control-input" value="Female" 



                                                                      <?php


                                                                     if($count3 == 1)
                                                                     {
                                                                        echo "checked";
                                                                     }



                                                                     ?>






                                                                    required>
                                                                    <label class="custom-control-label" for="customRadio13">Female</label>
                                                                </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio8" name="sex" class="custom-control-input" value="Others"


                                                                       <?php


                                                                     if($count2 != 1  && $count3 !=1)
                                                                     {
                                                                        echo "checked";
                                                                     }



                                                                     ?>





                                                                     required>
                                                                    <label class="custom-control-label" for="customRadio8">Others</label>
                                                                </div>
                                                                    </div>
                                                            </div>
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Email</label>
                                                                        <div class="col-md-12">
                                                                            <input type="email" class="form-control" id="userName3" name="email"   value="<?php echo $rows['email']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                

                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-7 col-form-label" for="userName3">Mobile no</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000000000" name="phn" value="<?php echo $rows['phn'];     ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-8 col-form-label" for="userName3">Alternate no</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000000000" name="a_phn" value="<?php echo $rows['a_phn']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                        
                                                                
                                                                      <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-7 col-form-label" for="userName3">City/Town</label>
                                                                    <div class="col-md-12">
                                                                            <input type="text" class="form-control"  name="vil_to" value="<?php echo $rows['vil_to']; ?>" required>
                                                                        </div>
                                                                </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-4 col-form-label" for="userName3">State</label>
                                                                    <div class="col-md-12">
                                                                    <select id="inputState" class="form-control" name="state" required>
                                                                        <option value="">Choose</option>
                                                                        <option >Karnataka</option>
                                                                        <option >Tamil Nadu</option>
                                                                        <option >Delhi</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                                <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-4 col-form-label" for="userName3">District</label>
                                                                    <div class="col-md-12">
                                                                    <select id="inputState" class="form-control" name="dist" required>
                                                                        <option value="">Choose</option>
                                                                        <option >Bangalore</option>
                                                                        <option >Chennai</option>
                                                                        <option >South Delhi</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                               
                                                                    <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-7 col-form-label" for="userName3">Zip code</label>
                                                                    <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="zip" id="inputZip" placeholder="<?php echo $rows['zip']; ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <?php }  ?>
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                   <div class="col mb-3">
                                                                    <div class="form-group mt-3">
                                                                    <label class="col-sm-2 col-form-label" for="userName3">Marital Status</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio9" name="married" class="custom-control-input" value="n" 




                                                                      <?php   


                                                                      if($count!=1)
                                                                      {
                                                                        echo "checked";
                                                                      }

                                                                      ?>

                                                                          

                                                                     required>
                                                                    <label class="custom-control-label" for="customRadio9">Single</label>
                                                                </div> 
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio10" name="married" class="custom-control-input" value="y"



                                                                     <?php   


                                                                      if($count ==1)
                                                                      {
                                                                        echo "checked";
                                                                      }

                                                                      ?>








                                                                     required>
                                                                    <label class="custom-control-label" for="customRadio10">Married</label>
                                                                </div>
                                                                    </div>
                                                            </div>
                                                                
                                                                
                                                                
                                                                
                                                            </div> <!-- end row -->
                                                              <ul class="list-inline wizard mb-0">
                                                        
                                                   
                                                        <li class="next list-inline-item float-right"><button class="btn btn-info" type="submit">Next</button></li>
                                                    </ul>
                                                        </form>
                                                    </div>


                                                    <div class="tab-pane fade" id="fifth">
                                                        <form id="otherForm" method="post" action="#" class="form-horizontal">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-center">
                                                                        <h2 class="mt-0">
                                                                            <i class="mdi mdi-check-all"></i>
                                                                        </h2>
                                                                        <h3 class="mt-0">Verify your Information!!</h3>
                                                        
                                                                        <p class="w-75 mb-2 mx-auto">I/We hereby confirm that the information provided herein is accurate, correct and complete and that the documents submitted along with this
                                                                        application form are genuine. I undertake to inform the Immigration service in writing of any changes to the information already
                                                                        provided and to update the information on this form whenever requested to do so by custom.</p>
                                                        
                                                                        <div class="mb-3">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck4" required>
                                                                                <label class="custom-control-label" for="customCheck4">I agree with the Terms and Conditions</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                              <ul class="list-inline wizard mb-0">
                                                        
                                                      <li class="previous list-inline-item"><button class="btn btn-info" type="submit">Previous</button>
                                                        </li>
                                                        <li class="next list-inline-item float-right"><button class="btn btn-info" type="submit">Save & Continue</button></li>
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