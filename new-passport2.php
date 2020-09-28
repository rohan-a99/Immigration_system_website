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
                                    <a href="new-passport.php">New Passport</a>
                                </li>
                                <li>
                                    <a href="passport_renewal.php">Passport Extension</a>
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
                                                                        <label class="col-md-7 col-form-label" for="userName3">Firstname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="f_nm" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-7 col-form-label" for="userName3">Midname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="m_nm" >
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-7 col-form-label" for="userName3">Lastname</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="l_nm" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                       
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                           
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Father's name</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="ff_nm" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                
                                                                 <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Mother's name</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="userName3" name="mm_nm" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Birth date</label>
                                                                        <div class="col-md-9">
                                                                            <input class="form-control" id="example-date" type="date"  name="dob" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="col mb-3">
                                                                    <div class="form-group mt-3">
                                                                    <label class="col-sm-2 col-form-label" for="userName3">Gender:</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio2" name="sex" class="custom-control-input" value="Male" required>
                                                                    <label class="custom-control-label" for="customRadio2">Male</label>
                                                                </div> 
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio13" name="sex" class="custom-control-input" value="Female" required>
                                                                    <label class="custom-control-label" for="customRadio13">Female</label>
                                                                </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio8" name="sex" class="custom-control-input" value="Others" required>
                                                                    <label class="custom-control-label" for="customRadio8">Others</label>
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
                                                                        <label class="col-md-7 col-form-label" for="userName3">Mobile no</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000000000" name="phn" required>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                <div class="col">
                                                                    <div class="form-group mb-3">
                                                                        <label class="col-md-8 col-form-label" for="userName3">Alternate no</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000000000" name="a_phn" >
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                
                                                                      <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                
                                                                <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-7 col-form-label" for="userName3">City/Town</label>
                                                                    <div class="col-md-12">
                                                                            <input type="text" class="form-control"  name="vil_to" required>
                                                                        </div>
                                                                </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-4 col-form-label" for="userName3">State</label>
                                                                    <div class="col-md-12">
                                                                    <select id="inputState" class="form-control" name="r_state" onchange="check()" required>
                                                                        <option value="">Choose</option>
                                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                        <option value="Assam">Assam</option>
                                                                        <option value="Bihar">Bihar</option>
                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                        <option value="Goa">Goa</option>
                                                                        <option value="Gujarat ">Gujarat </option>
                                                                        <option value="Haryana">Haryana</option>
                                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                        <option value="Jharkhand ">Jharkhand </option>
                                                                        <option value="Karnataka">Karnataka</option>
                                                                        <option value="Kerela">Kerala</option>
                                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                        <option value="Manipur">Manipur</option>
                                                                        <option value="Meghalaya">Meghalaya </option>
                                                                        <option value="Mizoram">Mizoram</option>
                                                                        <option value="Nagaland">Nagaland</option>
                                                                        <option value="Odisha">Odisha</option>
                                                                        <option value="Punjab">Punjab</option>
                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                        <option value="Sikkim ">Sikkim </option>
                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                        <option value="Telangana">Telangana</option>
                                                                        <option value="Tripura ">Tripura </option>
                                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                                        <option value="West Bengal">West Bengal</option>
                                                                        
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                                <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-4 col-form-label" for="userName3">District</label>
                                                                    <div class="col-md-12">

                                                                    <select id="inputdist" class="form-control" name="r_dist" required>
                                                                        <option value="">Choose</option>

                                                                        

                                                                        <!-- Tamil Nadu (a)-->

                                                                        <option id="tamil_nadu" style="display: none">Ariyalur</option>
                                                                        <option id="tamil_nadu" style="display: none">Chennai</option>
                                                                        <option id="tamil_nadu" style="display: none">Coimbatore</option>
                                                                        <option id="tamil_nadu" style="display: none">Cuddalore</option>
                                                                        <option id="tamil_nadu" style="display: none">Dharmapuri</option>
                                                                        <option id="tamil_nadu" style="display: none">Dindigul</option>
                                                                        <option id="tamil_nadu" style="display: none">Erode</option>
                                                                        <option id="tamil_nadu" style="display: none">Kancheepuram</option>
                                                                        <option id="tamil_nadu" style="display: none">Kanyakumari</option>
                                                                        <option id="tamil_nadu" style="display: none">Karur</option>
                                                                        <option id="tamil_nadu" style="display: none">Krishnagiri</option>
                                                                        <option id="tamil_nadu" style="display: none">Madurai</option>
                                                                        <option id="tamil_nadu" style="display: none">Nagapattinam</option>
                                                                        <option id="tamil_nadu" style="display: none">Namakkal</option>
                                                                        <option id="tamil_nadu" style="display: none">Perambalur</option>
                                                                        <option id="tamil_nadu" style="display: none">Pudukottai</option>
                                                                        <option id="tamil_nadu" style="display: none">Ramanathapuram</option>
                                                                        <option id="tamil_nadu" style="display: none">Salem</option>
                                                                        <option id="tamil_nadu" style="display: none">Sivaganga</option>
                                                                        <option id="tamil_nadu" style="display: none">Thanjavur</option>
                                                                        <option id="tamil_nadu" style="display: none">The Nilgiris</option>
                                                                        <option id="tamil_nadu" style="display: none">Theni</option>
                                                                        <option id="tamil_nadu" style="display: none">Thiruvallur</option>
                                                                        <option id="tamil_nadu" style="display: none">Thiruvannamalai</option>
                                                                        <option id="tamil_nadu" style="display: none">Thiruvarur</option>
                                                                        <option id="tamil_nadu" style="display: none">Thirunelveli</option>
                                                                        <option id="tamil_nadu" style="display: none">Tiruppur</option>
                                                                        <option id="tamil_nadu" style="display: none">Trichirappalli</option>
                                                                        <option id="tamil_nadu" style="display: none">Uticorin</option>
                                                                        <option id="tamil_nadu" style="display: none">Vellore</option>
                                                                        <option id="tamil_nadu" style="display: none">Villupuram</option>
                                                                        <option id="tamil_nadu" style="display: none">Virudhunagar</option>




                                                                        <!--kerala (b)-->

                                                                        <option id="kerela" style="display: none">Thiruvananthapuram</option>
                                                                        <option id="kerela" style="display: none">Kollam</option>
                                                                        <option id="kerela" style="display: none">Alappuzha</option>
                                                                        <option id="kerela" style="display: none">Pathanamthitta</option>
                                                                        <option id="kerela" style="display: none">Kottayam</option>
                                                                        <option id="kerela" style="display: none">Idukki</option>
                                                                        <option id="kerela" style="display: none">Ernakulam</option>
                                                                        <option id="kerela" style="display: none">Thrissur</option>
                                                                        <option id="kerela" style="display: none">Palakkad</option>
                                                                        <option id="kerela" style="display: none">Malappuram</option>
                                                                        <option id="kerela" style="display: none">Kozhikode</option>
                                                                        <option id="kerela" style="display: none">Wayanadu</option>
                                                                        <option id="kerela" style="display: none">Kannur</option>
                                                                        <option id="kerela" style="display: none">Kasaragod</option>


                                                                        <!--punjab(c)-->

                                                                        <option id="punjab" style="display: none">Amritsar</option>
                                                                        <option id="punjab" style="display: none">Barnala</option>
                                                                        <option id="punjab" style="display: none">Bathinda</option>
                                                                        <option id="punjab" style="display: none">Fazilka</option>
                                                                        <option id="punjab" style="display: none">Faridkot</option>
                                                                        <option id="punjab" style="display: none">Fatehgarh Sahib</option>
                                                                        <option id="punjab" style="display: none">Firozpur</option>
                                                                        <option id="punjab" style="display: none">Gurdaspur</option>
                                                                        <option id="punjab" style="display: none">Hoshiapur</option>
                                                                        <option id="punjab" style="display: none">Jalandhar</option>
                                                                        <option id="punjab" style="display: none">Kapurthala</option>
                                                                        <option id="punjab" style="display: none">Ludhiana</option>
                                                                        <option id="punjab" style="display: none">Mansa</option>
                                                                        <option id="punjab" style="display: none">Moga</option>
                                                                        <option id="punjab" style="display: none">Mohali</option>
                                                                        <option id="punjab" style="display: none">Muktsar</option>
                                                                        <option id="punjab" style="display: none">Pathankot</option>
                                                                        <option id="punjab" style="display: none">Patiala</option>
                                                                        <option id="punjab" style="display: none">Rupnagar</option>
                                                                        <option id="punjab" style="display: none">Sangrur</option>
                                                                        <option id="punjab" style="display: none">Shahid Bhagat Singh Nagar</option>
                                                                        <option id="punjab" style="display: none">Tarn Taran</option>
                                                                        

                                                                        
                                                                        <!--rajasthan(d)-->

                                                                        <option id="rajasthan" style="display: none">Ajmer</option>
                                                                        <option id="rajasthan" style="display: none">Alwer</option>
                                                                        <option id="rajasthan" style="display: none">Banswara</option>
                                                                        <option id="rajasthan" style="display: none">Baran</option>
                                                                        <option id="rajasthan" style="display: none">Barmer</option>
                                                                        <option id="rajasthan" style="display: none">Bharatpur</option>
                                                                        <option id="rajasthan" style="display: none">Bhilwara</option>
                                                                        <option id="rajasthan" style="display: none">Bikaner</option>
                                                                        <option id="rajasthan" style="display: none">Bundi</option>
                                                                        <option id="rajasthan" style="display: none">Chittorgarh</option>
                                                                        <option id="rajasthan" style="display: none">Churu</option>
                                                                        <option id="rajasthan" style="display: none">Dausa</option>
                                                                        <option id="rajasthan" style="display: none">Dholpur</option>
                                                                        <option id="rajasthan" style="display: none">Dungarpur</option>
                                                                        <option id="rajasthan" style="display: none">Hanumangarh</option>
                                                                        <option id="rajasthan" style="display: none">Jaipur</option>
                                                                        <option id="rajasthan" style="display: none">Jaisalmer</option>
                                                                        <option id="rajasthan" style="display: none">Jalor</option>
                                                                        <option id="rajasthan" style="display: none">Jhalawar</option>
                                                                        <option id="rajasthan" style="display: none">Jhunjhunu</option>
                                                                        <option id="rajasthan" style="display: none">Jodhpur</option>
                                                                        <option id="rajasthan" style="display: none">Karauli</option>
                                                                        <option id="rajasthan" style="display: none">Kota</option>
                                                                        <option id="rajasthan" style="display: none">Nagaur</option>
                                                                        <option id="rajasthan" style="display: none">Pali</option>
                                                                        <option id="rajasthan" style="display: none">Pratapgarh</option>
                                                                        <option id="rajasthan" style="display: none">Rajsamand</option>
                                                                        <option id="rajasthan" style="display: none">Sawai Madhopur</option>
                                                                        <option id="rajasthan" style="display: none">Sikar</option>
                                                                        <option id="rajasthan" style="display: none">Sirohi</option>
                                                                        <option id="rajasthan" style="display: none">Sri Ganganagar</option>
                                                                        <option id="rajasthan" style="display: none">Tonk</option>
                                                                        <option id="rajasthan" style="display: none">Udaipur</option>



                                                                        <!--Andhra Pradesh(e)-->

                                                                        <option id="andhra" style="display: none">Anantapur</option>
                                                                        <option id="andhra" style="display: none">Chittoor</option>
                                                                        <option id="andhra" style="display: none">East Godavari</option>
                                                                        <option id="andhra" style="display: none">Guntur</option>
                                                                        <option id="andhra" style="display: none">Cuddapah</option>
                                                                        <option id="andhra" style="display: none">Krishna</option>
                                                                        <option id="andhra" style="display: none">Kurnool</option>
                                                                        <option id="andhra" style="display: none">Prakasam</option>
                                                                        <option id="andhra" style="display: none">Nellore</option>
                                                                        <option id="andhra" style="display: none">Srikakulam</option>
                                                                        <option id="andhra" style="display: none">Vishakhapatnam</option>
                                                                        <option id="andhra" style="display: none">Vizianagaram</option>
                                                                        <option id="andhra" style="display: none">West Godavari</option>


                                                                        
                                                                        <!--Arunachal Pradesh (f)-->


                                                                        <option id="arunachal" style="display: none">Changlang</option>
                                                                        <option id="arunachal" style="display: none">Upper Dibang Vally</option>
                                                                        <option id="arunachal" style="display: none">East Kameng</option>
                                                                        <option id="arunachal" style="display: none">East Siang</option>
                                                                        <option id="arunachal" style="display: none">Lohit</option>
                                                                        <option id="arunachal" style="display: none">Lower Subansiri</option>
                                                                        <option id="arunachal" style="display: none">Papum-Pare</option>
                                                                        <option id="arunachal" style="display: none">Tawang</option>
                                                                        <option id="arunachal" style="display: none">Tirap</option>
                                                                        <option id="arunachal" style="display: none">Upper Siang</option>
                                                                        <option id="arunachal" style="display: none">Upper Subansiri</option>
                                                                        <option id="arunachal" style="display: none">West Kameng</option>
                                                                        <option id="arunachal" style="display: none">West Siang</option>
                                                                        <option id="arunachal" style="display: none">Anjaw</option>
                                                                        <option id="arunachal" style="display: none">Lower Dibang Vally</option>
                                                                        <option id="arunachal" style="display: none">Kurung Kumey</option>


                                                                       

                                                                        <!--Assam(g)-->

                                                                        <option id="assam" style="display: none">Baksa</option>
                                                                        <option id="assam" style="display: none">Barpeta</option>
                                                                        <option id="assam" style="display: none">Biswanath</option>
                                                                        <option id="assam" style="display: none">Bongaigaon</option>
                                                                        <option id="assam" style="display: none">Cachar</option>
                                                                        <option id="assam" style="display: none">Charaideo</option>
                                                                        <option id="assam" style="display: none">Chirang</option>
                                                                        <option id="assam" style="display: none">Darrang</option>
                                                                        <option id="assam" style="display: none">Dhemaji</option>
                                                                        <option id="assam" style="display: none">Dhubri</option>
                                                                        <option id="assam" style="display: none">Dibrugarh</option>
                                                                        <option id="assam" style="display: none">Dima Hasao</option>
                                                                        <option id="assam" style="display: none">Goalpara</option>
                                                                        <option id="assam" style="display: none">Golaghat</option>
                                                                        <option id="assam" style="display: none">Hailakandi</option>
                                                                        <option id="assam" style="display: none">Hojai</option>
                                                                        <option id="assam" style="display: none">Jorhat</option>
                                                                        <option id="assam" style="display: none">Kamrup Metropolitan</option>
                                                                        <option id="assam" style="display: none">Kamrup</option>
                                                                        <option id="assam" style="display: none">Karbi Anglong</option>
                                                                        <option id="assam" style="display: none">Karimganj</option>
                                                                        <option id="assam" style="display: none">Kokrajhar</option>
                                                                        <option id="assam" style="display: none">Lakhimpur</option>
                                                                        <option id="assam" style="display: none">Majuli</option>
                                                                        <option id="assam" style="display: none">Morigaon</option>
                                                                        <option id="assam" style="display: none">Nagaon</option>
                                                                        <option id="assam" style="display: none">Nalbari</option>
                                                                        <option id="assam" style="display: none">Sivasagar</option>
                                                                        <option id="assam" style="display: none">Sonitpur</option>
                                                                        <option id="assam" style="display: none">South Salmara-Mankachar</option>
                                                                        <option id="assam" style="display: none">Tinsukia</option>
                                                                        <option id="assam" style="display: none">Udalguri</option>
                                                                        <option id="assam" style="display: none">West Karbi Anglong</option>
                                                                        
                                                                        
                                                                         <!--Goa(h)-->
                                                                        
                                                                        <option id="goa" style="display: none">North Goa</option>
                                                                        <option id="goa" style="display: none">South Goa</option>

                                                                        <!--Maharashtra(ii)-->
                                                                        
                                                                        <option id="maharashtra" style="display: none">Ahmednagar</option>
                                                                        <option id="maharashtra" style="display: none">Akola</option>
                                                                        <option id="maharashtra" style="display: none">Amravati</option>
                                                                        <option id="maharashtra" style="display: none">Aurangabad</option>
                                                                        <option id="maharashtra" style="display: none">Beed</option>
                                                                        <option id="maharashtra" style="display: none">Bhandra</option>
                                                                        <option id="maharashtra" style="display: none">Buldhana</option>
                                                                        <option id="maharashtra" style="display: none">Chandrapur</option>
                                                                        <option id="maharashtra" style="display: none">Dhule</option>
                                                                        <option id="maharashtra" style="display: none">Gadchiroli</option>
                                                                        <option id="maharashtra" style="display: none">Gondia</option>
                                                                        <option id="maharashtra" style="display: none">Jalgaon</option>
                                                                        <option id="maharashtra" style="display: none">Jalna</option>
                                                                        <option id="maharashtra" style="display: none">Kolhapur</option>
                                                                        <option id="maharashtra" style="display: none">Latur</option>
                                                                        <option id="maharashtra" style="display: none">Mumbai City</option>
                                                                        <option id="maharashtra" style="display: none">Mumbai Suburban</option>
                                                                        <option id="maharashtra" style="display: none">Nagpur</option>
                                                                        <option id="maharashtra" style="display: none">Nanded</option>
                                                                        <option id="maharashtra" style="display: none">Nandurbar</option>
                                                                        <option id="maharashtra" style="display: none">Nashik</option>
                                                                        <option id="maharashtra" style="display: none">Osmanabad</option>
                                                                        <option id="maharashtra" style="display: none">Parbhani</option>
                                                                        <option id="maharashtra" style="display: none">Pune</option>
                                                                        <option id="maharashtra" style="display: none">Raigad</option>
                                                                        <option id="maharashtra" style="display: none">Ratnagiri</option>
                                                                        <option id="maharashtra" style="display: none">Sangali</option>
                                                                        <option id="maharashtra" style="display: none">Satara</option>
                                                                        <option id="maharashtra" style="display: none">Sindhudurg</option>
                                                                        <option id="maharashtra" style="display: none">Solapur</option>
                                                                        <option id="maharashtra" style="display: none">Thane</option>
                                                                        <option id="maharashtra" style="display: none">Wardha</option>
                                                                        <option id="maharashtra" style="display: none">Washim</option>
                                                                        <option id="maharashtra" style="display: none">Yavatmal</option>
                                                                        <option id="maharashtra" style="display: none">Palghar</option>
                                                                        
                                                                         <!--Chattisgarh(j)-->
                                                                        
                                                                        <option id="Chattisgarh" style="display: none">Balod</option>
                                                                        <option id="Chattisgarh" style="display: none">Baloda Bazar</option>
                                                                        <option id="Chattisgarh" style="display: none">Balrampur</option>
                                                                        <option id="Chattisgarh" style="display: none">Bastar</option>
                                                                        <option id="Chattisgarh" style="display: none">Bemetara</option>
                                                                        <option id="Chattisgarh" style="display: none">Bijapur</option>
                                                                        <option id="Chattisgarh" style="display: none">Bilaspur</option>
                                                                        <option id="Chattisgarh" style="display: none">Dantewada</option>
                                                                        <option id="Chattisgarh" style="display: none">Dhamtari</option>
                                                                        <option id="Chattisgarh" style="display: none">Durg</option>
                                                                        <option id="Chattisgarh" style="display: none">Gariaband</option>
                                                                        <option id="Chattisgarh" style="display: none">Janjgir-Champa</option>
                                                                        <option id="Chattisgarh" style="display: none">Jashpur</option>
                                                                        <option id="Chattisgarh" style="display: none">Kabirdham</option>
                                                                        <option id="Chattisgarh" style="display: none">Kanker</option>
                                                                        <option id="Chattisgarh" style="display: none">Kondagaon</option>
                                                                        <option id="Chattisgarh" style="display: none">Korba</option>
                                                                        <option id="Chattisgarh" style="display: none">Koriya</option>
                                                                        <option id="Chattisgarh" style="display: none">Mahasamund</option>
                                                                        <option id="Chattisgarh" style="display: none">Mungeli</option>
                                                                        <option id="Chattisgarh" style="display: none">Narayanpur</option>
                                                                        <option id="Chattisgarh" style="display: none">Raigarh</option>
                                                                        <option id="Chattisgarh" style="display: none">Raipur</option>
                                                                        <option id="Chattisgarh" style="display: none">Rajnandgaon</option>
                                                                        <option id="Chattisgarh" style="display: none">Sukma</option>
                                                                        <option id="Chattisgarh" style="display: none">Surajpur</option>
                                                                        <option id="Chattisgarh" style="display: none">Surguja</option>
                                                                        
                                                                        <!--Orissa(k)-->
                                                                        
                                                                        <option id="orissa" style="display: none">Angul</option>
                                                                        <option id="orissa" style="display: none">Boudh</option>
                                                                        <option id="orissa" style="display: none">Balangir</option>
                                                                        <option id="orissa" style="display: none">Bargarh</option>
                                                                        <option id="orissa" style="display: none">Balasore</option>
                                                                        <option id="orissa" style="display: none">Bhadrak</option>
                                                                        <option id="orissa" style="display: none">Cuttack</option>
                                                                        <option id="orissa" style="display: none">Deogarh</option>
                                                                        <option id="orissa" style="display: none">Dhenkanal</option>
                                                                        <option id="orissa" style="display: none">Ganjam</option>
                                                                        <option id="orissa" style="display: none">Gajapati</option>
                                                                        <option id="orissa" style="display: none">Jharsuguda</option>
                                                                        <option id="orissa" style="display: none">Jajpur</option>
                                                                        <option id="orissa" style="display: none">Jagatsinghapur</option>
                                                                        <option id="orissa" style="display: none">Khordha</option>
                                                                        <option id="orissa" style="display: none">Keonjhar </option>
                                                                        <option id="orissa" style="display: none">Kalahandi</option>
                                                                        <option id="orissa" style="display: none">Kandhamal</option>
                                                                        <option id="orissa" style="display: none">Koraput</option>
                                                                        <option id="orissa" style="display: none">Kendrapara</option>
                                                                        <option id="orissa" style="display: none">Malkangiri</option>
                                                                        <option id="orissa" style="display: none">Mayurbhanj</option>
                                                                        <option id="orissa" style="display: none">Nabarangpur</option>
                                                                        <option id="orissa" style="display: none">Nuapada</option>
                                                                        <option id="orissa" style="display: none">Nayagarh</option>
                                                                        <option id="orissa" style="display: none">Puri</option>
                                                                        <option id="orissa" style="display: none">Rayagada</option>
                                                                        <option id="orissa" style="display: none">Sambalpur</option>
                                                                        <option id="orissa" style="display: none">Subarnapur </option>
                                                                        <option id="orissa" style="display: none">Sundargarh</option>
                                                                        
                                                                        <!--Gujarat(l)-->
                                                                        
                                                                        <option id="gujarat" style="display: none">Ahmedabad</option>
                                                                        <option id="gujarat" style="display: none">Amreli</option>
                                                                        <option id="gujarat" style="display: none">Anand</option>
                                                                        <option id="gujarat" style="display: none">Aravalli</option>
                                                                        <option id="gujarat" style="display: none">Banaskantha</option>
                                                                        <option id="gujarat" style="display: none">Bharuch</option>
                                                                        <option id="gujarat" style="display: none">Bhavnagar</option>
                                                                        <option id="gujarat" style="display: none">Botad</option>
                                                                        <option id="gujarat" style="display: none">Chhota Udaipur</option>
                                                                        <option id="gujarat" style="display: none">Dahod</option>
                                                                        <option id="gujarat" style="display: none">Dang</option>
                                                                        <option id="gujarat" style="display: none">Devbhoomi Dwarka</option>
                                                                        <option id="gujarat" style="display: none">Gandhinagar</option>
                                                                        <option id="gujarat" style="display: none">Gir Somnath</option>
                                                                        <option id="gujarat" style="display: none">Jamnagar</option>
                                                                        <option id="gujarat" style="display: none">Junagadh</option>
                                                                        <option id="gujarat" style="display: none">Kutch</option>
                                                                        <option id="gujarat" style="display: none">Kheda</option>
                                                                        <option id="gujarat" style="display: none">Mahisagar</option>
                                                                        <option id="gujarat" style="display: none">Mehsana</option>
                                                                        <option id="gujarat" style="display: none">Morbi</option>
                                                                        <option id="gujarat" style="display: none">Narmada</option>
                                                                        <option id="gujarat" style="display: none">Navsari</option>
                                                                        <option id="gujarat" style="display: none">Panchmahal</option>
                                                                        <option id="gujarat" style="display: none">Patan</option>
                                                                        <option id="gujarat" style="display: none">Porbandar</option>
                                                                        <option id="gujarat" style="display: none">Rajkot</option>
                                                                        <option id="gujarat" style="display: none">Sabarkantha</option>
                                                                        <option id="gujarat" style="display: none">Surat</option>
                                                                        <option id="gujarat" style="display: none">Surendranagar</option>
                                                                        <option id="gujarat" style="display: none">Tapi</option>
                                                                        <option id="gujarat" style="display: none">Vadodara</option>
                                                                        <option id="gujarat" style="display: none">Valsad</option>
                                                                        
                                                                        <!--Haryana(m)-->
                                                                        <option id="haryana" style="display: none">Ambala</option>
                                                                        <option id="haryana" style="display: none">Bhiwani</option>
                                                                        <option id="haryana" style="display: none">Charkhi Dadri</option>
                                                                        <option id="haryana" style="display: none">Faridabad</option>
                                                                        <option id="haryana" style="display: none">Fatehabad</option>
                                                                        <option id="haryana" style="display: none">Gurugram</option>
                                                                        <option id="haryana" style="display: none">Hisar</option>
                                                                        <option id="haryana" style="display: none">Jhajjar</option>
                                                                        <option id="haryana" style="display: none">Jind</option>
                                                                        <option id="haryana" style="display: none">Kaithal</option>
                                                                        <option id="haryana" style="display: none">Karnal</option>
                                                                        <option id="haryana" style="display: none">Kurukshetra</option>
                                                                        <option id="haryana" style="display: none">Mahendragarh</option>
                                                                        <option id="haryana" style="display: none">Nuh</option>
                                                                        <option id="haryana" style="display: none">Palwal</option>
                                                                        <option id="haryana" style="display: none">Panchkula</option>
                                                                        <option id="haryana" style="display: none">Panipat</option>
                                                                        <option id="haryana" style="display: none">Rewari</option>
                                                                        <option id="haryana" style="display: none">Rohtak</option>
                                                                        <option id="haryana" style="display: none">Sirsa</option>
                                                                        <option id="haryana" style="display: none">Sonipat</option>
                                                                        <option id="haryana" style="display: none">Yamunanagar</option>
                                                                        
                                                                        <!--Uttarakand(n)-->
                                                                        
                                                                        <option id="uttarakand" style="display: none">Almora</option>
                                                                        <option id="uttarakand" style="display: none">Bageshwar</option>
                                                                        <option id="uttarakand" style="display: none">Chamoli</option>
                                                                        <option id="uttarakand" style="display: none">Champawat</option>
                                                                        <option id="uttarakand" style="display: none">Dehradun</option>
                                                                        <option id="uttarakand" style="display: none">Haridwar</option>
                                                                        <option id="uttarakand" style="display: none">Nainital</option>
                                                                        <option id="uttarakand" style="display: none">Pauri Garhwal</option>
                                                                        <option id="uttarakand" style="display: none">Pithoragarh</option>
                                                                        <option id="uttarakand" style="display: none">Rudraprayag</option>
                                                                        <option id="uttarakand" style="display: none">Tehri Garhwal</option>
                                                                        <option id="uttarakand" style="display: none">Udham Singh Nagar</option>
                                                                        <option id="uttarakand" style="display: none">Uttarkashi</option>
                                                                        
                                                                        <!--Himachal Pradesh(o)-->
                                                                        
                                                                        <option id="himachal_pradesh" style="display: none">Bilaspur</option>
                                                                        <option id="himachal_pradesh" style="display: none">Chamba</option>
                                                                        <option id="himachal_pradesh" style="display: none">Hamirpur</option>
                                                                        <option id="himachal_pradesh" style="display: none">Kangra</option>
                                                                        <option id="himachal_pradesh" style="display: none">Kinnaur</option>
                                                                        <option id="himachal_pradesh" style="display: none">Kullu</option>
                                                                        <option id="himachal_pradesh" style="display: none">Lahaul and Spiti</option>
                                                                        <option id="himachal_pradesh" style="display: none">Mandi</option>
                                                                        <option id="himachal_pradesh" style="display: none">Shimla</option>
                                                                        <option id="himachal_pradesh" style="display: none">Sirmaur</option>
                                                                        <option id="himachal_pradesh" style="display: none">Solan</option>
                                                                        <option id="himachal_pradesh" style="display: none">Una</option>
                                                                        
                                                                        <!--Jammu and Kashmir(p)-->
                                                                        
                                                                        <option id="jammu_kashmir" style="display: none">Doda</option>
                                                                        <option id="jammu_kashmir" style="display: none">Jammu</option>
                                                                        <option id="jammu_kashmir" style="display: none">Kathua</option>
                                                                        <option id="jammu_kashmir" style="display: none">Poonch</option>
                                                                        <option id="jammu_kashmir" style="display: none">Kishtwar</option>
                                                                        <option id="jammu_kashmir" style="display: none">Rajouri</option>
                                                                        <option id="jammu_kashmir" style="display: none">Ramban</option>
                                                                        <option id="jammu_kashmir" style="display: none">Reasi</option>
                                                                        <option id="jammu_kashmir" style="display: none">Samba</option>
                                                                        <option id="jammu_kashmir" style="display: none">Udhampur</option>
                                                                        <option id="jammu_kashmir" style="display: none">Anantnag</option>
                                                                        <option id="jammu_kashmir" style="display: none">Bandipora</option>
                                                                        <option id="jammu_kashmir" style="display: none">Baramulla</option>
                                                                        <option id="jammu_kashmir" style="display: none">Budgam</option>
                                                                        <option id="jammu_kashmir" style="display: none">Ganderbal</option>
                                                                        <option id="jammu_kashmir" style="display: none">Kulgam</option>
                                                                        <option id="jammu_kashmir" style="display: none">Kupwara</option>
                                                                        <option id="jammu_kashmir" style="display: none">Pulwama</option>
                                                                        <option id="jammu_kashmir" style="display: none">Shopian</option>
                                                                        <option id="jammu_kashmir" style="display: none">Srinagar</option>
                                                                        <option id="jammu_kashmir" style="display: none">Kargil</option>
                                                                        <option id="jammu_kashmir" style="display: none">Leh</option>
                                                                        
                                                                        <!--Uttar Pradesh(q)-->
                                                                        
                                                                        <option id="uttar_pradesh" style="display: none">Agra</option>
                                                                        <option id="uttar_pradesh" style="display: none">Aligarh</option>
                                                                        <option id="uttar_pradesh" style="display: none">PrayagRaj</option>
                                                                        <option id="uttar_pradesh" style="display: none">Ambedkar Nagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Amroha</option>
                                                                        <option id="uttar_pradesh" style="display: none">Auraiya</option>
                                                                        <option id="uttar_pradesh" style="display: none">Azamgarh</option>
                                                                        <option id="uttar_pradesh" style="display: none">Badaun</option>
                                                                        <option id="uttar_pradesh" style="display: none">Bahraich</option>
                                                                        <option id="uttar_pradesh" style="display: none">Ballia</option>
                                                                        <option id="uttar_pradesh" style="display: none">Balrampur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Banda District</option>
                                                                        <option id="uttar_pradesh" style="display: none">Barabanki</option>
                                                                        <option id="uttar_pradesh" style="display: none">Bareilly</option>
                                                                        <option id="uttar_pradesh" style="display: none">Bijnor</option>
                                                                        <option id="uttar_pradesh" style="display: none">Bulandshahr</option>
                                                                        <option id="uttar_pradesh" style="display: none">Chandauli</option>
                                                                        <option id="uttar_pradesh" style="display: none">Chitrakoot</option>
                                                                        <option id="uttar_pradesh" style="display: none">Deoria</option>
                                                                        <option id="uttar_pradesh" style="display: none">Etah</option>
                                                                        <option id="uttar_pradesh" style="display: none">Etawah</option>
                                                                        <option id="uttar_pradesh" style="display: none">Faizabad</option>
                                                                        <option id="uttar_pradesh" style="display: none">Farrukhabad</option>
                                                                        <option id="uttar_pradesh" style="display: none">Fatehpur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Firozabad</option>
                                                                        <option id="uttar_pradesh" style="display: none">Gautam Buddha Nagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Ghaziabad</option>
                                                                        <option id="uttar_pradesh" style="display: none">Ghazipur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Gonda</option>
                                                                        <option id="uttar_pradesh" style="display: none">Gorakhpur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Hamirpur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Hapur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Hardoi</option>
                                                                        <option id="uttar_pradesh" style="display: none">Hathras</option>
                                                                        <option id="uttar_pradesh" style="display: none">Jaunpur </option>
                                                                        <option id="uttar_pradesh" style="display: none">Jhansi</option>
                                                                        <option id="uttar_pradesh" style="display: none">Kannauj</option>
                                                                        <option id="uttar_pradesh" style="display: none">Kanpur Dehat</option>
                                                                        <option id="uttar_pradesh" style="display: none">Kanpur Nagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Kasganj</option>
                                                                        <option id="uttar_pradesh" style="display: none">Kaushambi</option>
                                                                        <option id="uttar_pradesh" style="display: none">Kushinagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Lakhimpur Kheri</option>
                                                                        <option id="uttar_pradesh" style="display: none">Lalitpur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Lucknow</option>
                                                                        <option id="uttar_pradesh" style="display: none">Maharajganj</option>
                                                                        <option id="uttar_pradesh" style="display: none">Mahoba</option>
                                                                        <option id="uttar_pradesh" style="display: none">Mainpuri</option>
                                                                        <option id="uttar_pradesh" style="display: none">Mathura</option>
                                                                        <option id="uttar_pradesh" style="display: none">Mau</option>
                                                                        <option id="uttar_pradesh" style="display: none">Meerut</option>
                                                                        <option id="uttar_pradesh" style="display: none">Mirzapur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Moradabad</option>
                                                                        <option id="uttar_pradesh" style="display: none">Muzaffarnagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Pilibhit</option>
                                                                        <option id="uttar_pradesh" style="display: none">Pratapgarh</option>
                                                                        <option id="uttar_pradesh" style="display: none">Rae Bareli</option>
                                                                        <option id="uttar_pradesh" style="display: none">Rampur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Saharanpur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Sant Kabir Nagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Sant Ravidas Nagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Sambhal</option>
                                                                        <option id="uttar_pradesh" style="display: none">Shahjahanpur</option>
                                                                        <option id="uttar_pradesh" style="display: none">ShamliShravasti</option>
                                                                        <option id="uttar_pradesh" style="display: none">Shravasti</option>
                                                                        <option id="uttar_pradesh" style="display: none">Siddharthnagar</option>
                                                                        <option id="uttar_pradesh" style="display: none">Sitapur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Sonbhadra</option>
                                                                        <option id="uttar_pradesh" style="display: none">Sultanpur</option>
                                                                        <option id="uttar_pradesh" style="display: none">Unnao</option>
                                                                        <option id="uttar_pradesh" style="display: none">Varanasi (Kashi)</option>
                                                                        <option id="uttar_pradesh" style="display: none">Allahabad</option>
                                                                        <option id="uttar_pradesh" style="display: none">Amethi</option>
                                                                        <option id="uttar_pradesh" style="display: none">Bagpat</option>
                                                                        
                                                                        <!--Mizoram(r)-->
                                                                        
                                                                        <option id="mizoram" style="display: none">Aizawl</option>
                                                                        <option id="mizoram" style="display: none">Kolasib</option>
                                                                        <option id="mizoram" style="display: none">Lawngtlai</option>
                                                                        <option id="mizoram" style="display: none">Lunglei</option>
                                                                        <option id="mizoram" style="display: none">Mamit</option>
                                                                        <option id="mizoram" style="display: none">Saiha</option>
                                                                        <option id="mizoram" style="display: none">Serchhip</option>
                                                                        <option id="mizoram" style="display: none">Champhai</option>
                                                                        
                                                                        <!--Meghalaya(s)-->
                                                                        
                                                                        <option id="meghalaya" style="display: none">East Garo Hills</option>
                                                                        <option id="meghalaya" style="display: none">East Khasi Hills</option>
                                                                        <option id="meghalaya" style="display: none">Jaintia Hills</option>
                                                                        <option id="meghalaya" style="display: none">Ri Bhoi</option>
                                                                        <option id="meghalaya" style="display: none">South Garo Hills </option>
                                                                        <option id="meghalaya" style="display: none">West Garo Hills</option>
                                                                        <option id="meghalaya" style="display: none">West Khasi Hills</option>



                                                                        <!--West Bengal(t)-->

                                                                        <option id="west_bengal" style="display: none">Alipurduar</option>
                                                                        <option id="west_bengal" style="display: none">Bankura</option>
                                                                        <option id="west_bengal" style="display: none">Birbhum</option>
                                                                        <option id="west_bengal" style="display: none">Cooch Behar</option>
                                                                        <option id="west_bengal" style="display: none">Dakshin Dinajpur</option>
                                                                        <option id="west_bengal" style="display: none">Darjeeling</option>
                                                                        <option id="west_bengal" style="display: none">Hooghly</option>
                                                                        <option id="west_bengal" style="display: none">Howrah</option>
                                                                        <option id="west_bengal" style="display: none">Jalpaiguri</option>
                                                                        <option id="west_bengal" style="display: none">Jhargram</option>
                                                                        <option id="west_bengal" style="display: none">Kalimpong</option>
                                                                        <option id="west_bengal" style="display: none">Kolkata</option>
                                                                        <option id="west_bengal" style="display: none">Malda</option>
                                                                        <option id="west_bengal" style="display: none">Murshidabad</option>
                                                                        <option id="west_bengal" style="display: none">Nadia</option>
                                                                        <option id="west_bengal" style="display: none">North 24 Parganas</option>
                                                                        <option id="west_bengal" style="display: none">Paschim Bardhaman</option>
                                                                        <option id="west_bengal" style="display: none">Paschim Medinipur</option>
                                                                        <option id="west_bengal" style="display: none">Purba Bardhaman</option>
                                                                        <option id="west_bengal" style="display: none">Purba Medinipur</option>
                                                                        <option id="west_bengal" style="display: none">Purulia</option>
                                                                        <option id="west_bengal" style="display: none">South 24 Parganas</option>
                                                                        <option id="west_bengal" style="display: none">Uttar Dinajpur</option>
                                                                        

                                                                        <!--Tripura(u)-->

                                                                        <option id="tripura" style="display: none">Dhalai</option>
                                                                        <option id="tripura" style="display: none">North Tripura</option>
                                                                        <option id="tripura" style="display: none">South Tripura</option>
                                                                        <option id="tripura" style="display: none">West Tripura</option>


                                                                        <!--Nagaland(v)-->

                                                                        <option id="nagaland" style="display: none">Dimapur</option>
                                                                        <option id="nagaland" style="display: none">Kiphire</option>
                                                                        <option id="nagaland" style="display: none">Kohima</option>
                                                                        <option id="nagaland" style="display: none">Longleng</option>
                                                                        <option id="nagaland" style="display: none">Mokokchung</option>
                                                                        <option id="nagaland" style="display: none">Mon</option>
                                                                        <option id="nagaland" style="display: none">Peren</option>
                                                                        <option id="nagaland" style="display: none">Phek</option>
                                                                        <option id="nagaland" style="display: none">Tuensang</option>
                                                                        <option id="nagaland" style="display: none">Wokha</option>
                                                                        <option id="nagaland" style="display: none">Zunheboto</option>
                                                                        <option id="nagaland" style="display: none">Noklak</option>


                                                                        <!--Jharkhand(w)-->


                                                                        <option id="jharkhand" style="display: none">Bokaro</option>
                                                                        <option id="jharkhand" style="display: none">Chatra</option>
                                                                        <option id="jharkhand" style="display: none">Deoghar</option>
                                                                        <option id="jharkhand" style="display: none">Dhanbad</option>
                                                                        <option id="jharkhand" style="display: none">Dumka</option>
                                                                        <option id="jharkhand" style="display: none">East Singhbhum</option>
                                                                        <option id="jharkhand" style="display: none">Garhwa</option>
                                                                        <option id="jharkhand" style="display: none">Giridih</option>
                                                                        <option id="jharkhand" style="display: none">Godda</option>
                                                                        <option id="jharkhand" style="display: none">Gumla</option>
                                                                        <option id="jharkhand" style="display: none">Hazaribagh</option>
                                                                        <option id="jharkhand" style="display: none">Jamtara</option>
                                                                        <option id="jharkhand" style="display: none">Khunti</option>
                                                                        <option id="jharkhand" style="display: none">Koderma</option>
                                                                        <option id="jharkhand" style="display: none">Latehar</option>
                                                                        <option id="jharkhand" style="display: none">Lohardaga</option>
                                                                        <option id="jharkhand" style="display: none">Pakur</option>
                                                                        <option id="jharkhand" style="display: none">Palamu</option>
                                                                        <option id="jharkhand" style="display: none">Ramgarh</option>
                                                                        <option id="jharkhand" style="display: none">Ranchi</option>
                                                                        <option id="jharkhand" style="display: none">Sahebganj</option>
                                                                        <option id="jharkhand" style="display: none">Seraikela</option>
                                                                        <option id="jharkhand" style="display: none">Simdega</option>
                                                                        <option id="jharkhand" style="display: none">West Singhbhum</option>


                                                                        <!--Karnataka(x)-->

                                                                        <option id="karnataka" style="display: none">Bagalkote</option>
                                                                        <option id="karnataka" style="display: none">Bangalore Rural</option>
                                                                        <option id="karnataka" style="display: none">Bangalore Urban</option>
                                                                        <option id="karnataka" style="display: none">Belagavi</option>
                                                                        <option id="karnataka" style="display: none">Bellary</option>
                                                                        <option id="karnataka" style="display: none">Bidar</option>
                                                                        <option id="karnataka" style="display: none">Bijapur</option>
                                                                        <option id="karnataka" style="display: none">Chamarajanagar</option>
                                                                        <option id="karnataka" style="display: none">Chikkamagaluru</option>
                                                                        <option id="karnataka" style="display: none">Chitradurga</option>
                                                                        <option id="karnataka" style="display: none">Dakshina Kannada</option>
                                                                        <option id="karnataka" style="display: none">Davanagere </option>
                                                                        <option id="karnataka" style="display: none">Dharwad</option>
                                                                        <option id="karnataka" style="display: none">Gadag</option>
                                                                        <option id="karnataka" style="display: none">Gulbarga</option>
                                                                        <option id="karnataka" style="display: none">Hassan</option>
                                                                        <option id="karnataka" style="display: none">Haveri</option>
                                                                        <option id="karnataka" style="display: none">Kodagu</option>
                                                                        <option id="karnataka" style="display: none">Kolar</option>
                                                                        <option id="karnataka" style="display: none">Koppal</option>
                                                                        <option id="karnataka" style="display: none">Mandya</option>
                                                                        <option id="karnataka" style="display: none">Mysore</option>
                                                                        <option id="karnataka" style="display: none">Raichur</option>
                                                                        <option id="karnataka" style="display: none">Shimoga</option>
                                                                        <option id="karnataka" style="display: none">Tumkur</option>
                                                                        <option id="karnataka" style="display: none">Udupi</option>
                                                                        <option id="karnataka" style="display: none">Uttara Kannada</option>


                                                                        <!--Bihar(y)-->

                                                                        <option id="bihar" style="display: none">Araria</option>
                                                                        <option id="bihar" style="display: none">Madhepura</option>
                                                                        <option id="bihar" style="display: none">Arwal</option>
                                                                        <option id="bihar" style="display: none">Madhubani</option>
                                                                        <option id="bihar" style="display: none">Aurangabad</option>
                                                                        <option id="bihar" style="display: none">Monghyr</option>
                                                                        <option id="bihar" style="display: none">Banka</option>
                                                                        <option id="bihar" style="display: none">Muzaffarpur</option>
                                                                        <option id="bihar" style="display: none">Begusarai</option>
                                                                        <option id="bihar" style="display: none">Nalanda</option>
                                                                        <option id="bihar" style="display: none">Bhagalpur</option>
                                                                        <option id="bihar" style="display: none">Nawada</option>
                                                                        <option id="bihar" style="display: none">Bhojpur</option>
                                                                        <option id="bihar" style="display: none">Patna</option>
                                                                        <option id="bihar" style="display: none">Buxar</option>
                                                                        <option id="bihar" style="display: none">Purnea</option>
                                                                        <option id="bihar" style="display: none">Darbhanga</option>
                                                                        <option id="bihar" style="display: none">Rohtas</option>
                                                                        <option id="bihar" style="display: none">East Champaran</option>
                                                                        <option id="bihar" style="display: none">Saharsa</option>
                                                                        <option id="bihar" style="display: none">Gaya</option>
                                                                        <option id="bihar" style="display: none">Samastipur</option>
                                                                        <option id="bihar" style="display: none">Gopalganj</option>
                                                                        <option id="bihar" style="display: none">Saran</option>
                                                                        <option id="bihar" style="display: none">Jamui</option>
                                                                        <option id="bihar" style="display: none">Shiekhpura</option>
                                                                        <option id="bihar" style="display: none">Jehanabad</option>
                                                                        <option id="bihar" style="display: none">Sheohar</option>
                                                                        <option id="bihar" style="display: none">Kaimur</option>
                                                                        <option id="bihar" style="display: none">Sitamarhi</option>
                                                                        <option id="bihar" style="display: none">Katihar</option>
                                                                        <option id="bihar" style="display: none">Siwan</option>
                                                                        <option id="bihar" style="display: none">Khagaria</option>
                                                                        <option id="bihar" style="display: none">Supaul</option>
                                                                        <option id="bihar" style="display: none">Kishanganj</option>
                                                                        <option id="bihar" style="display: none">Vaishali</option>
                                                                        <option id="bihar" style="display: none">Lakhisarai</option>
                                                                        <option id="bihar" style="display: none">West Champaran</option>

                                                                        <!--Manipur(z)-->

                                                                        <option  id="manipur" style="display: none">Bishnupur</option>
                                                                        <option  id="manipur" style="display: none">Chandel Chandel</option>
                                                                        <option  id="manipur" style="display: none">Churachandpur</option>
                                                                        <option  id="manipur" style="display: none">Imphal East</option>
                                                                        <option  id="manipur" style="display: none">Imphal West</option>
                                                                        <option  id="manipur" style="display: none">Senapati</option>
                                                                        <option  id="manipur" style="display: none">Tamenglong</option>
                                                                        <option  id="manipur" style="display: none">Thoubal</option>
                                                                        <option  id="manipur" style="display: none">Ukhrul</option>
                                                                        <option  id="manipur" style="display: none">Jiribam</option>
                                                                        <option  id="manipur" style="display: none">Kangpokpi</option>
                                                                        <option  id="manipur" style="display: none">Kakching</option>
                                                                        <option  id="manipur" style="display: none">Tengnoupal</option>
                                                                        <option  id="manipur" style="display: none">Kamjong</option>
                                                                        <option  id="manipur" style="display: none">Noney</option>
                                                                        <option  id="manipur" style="display: none">Pherzawl</option>

                                                                        <!--Sikkim(aa)-->
                                                                        
                                                                        <option id="sikkim" style="display: none">East Sikkim</option>
                                                                        <option id="sikkim" style="display: none">North Sikkim</option>
                                                                        <option id="sikkim" style="display: none">South Sikkim</option>
                                                                        <option id="sikkim" style="display: none">West Sikkim</option>

                                                                        <!--Telangana(bb)-->
                                                                        
                                                                        <option id="telangana" style="display: none">Adilabad</option>
                                                                        <option id="telangana" style="display: none">Bhadradri Kothagudem</option>
                                                                        <option id="telangana" style="display: none">Hyderabad</option>
                                                                        <option id="telangana" style="display: none">Jagtial</option>
                                                                        <option id="telangana" style="display: none">Jangaon</option>
                                                                        <option id="telangana" style="display: none">Jayashankar Bhupalpally</option>
                                                                        <option id="telangana" style="display: none">Jogulamba Gadwal</option>
                                                                        <option id="telangana" style="display: none">Kamareddy</option>
                                                                        <option id="telangana" style="display: none">Karimnagar</option>
                                                                        <option id="telangana" style="display: none">Khammam</option>
                                                                        <option id="telangana" style="display: none">Kumuram Bheem</option>
                                                                        <option id="telangana" style="display: none">Mahabubabad</option>
                                                                        <option id="telangana" style="display: none">Mahabubnagar</option>
                                                                        <option id="telangana" style="display: none">Mancherial</option>
                                                                        <option id="telangana" style="display: none">Medak</option>
                                                                        <option id="telangana" style="display: none">Medchal</option>
                                                                        <option id="telangana" style="display: none">Mulugu</option>
                                                                        <option id="telangana" style="display: none">Nagarkurnool</option>
                                                                        <option id="telangana" style="display: none">Nalgonda</option>
                                                                        <option id="telangana" style="display: none">Narayanpet</option>
                                                                        <option id="telangana" style="display: none">Nirmal</option>
                                                                        <option id="telangana" style="display: none">Nizamabad</option>
                                                                        <option id="telangana" style="display: none">Peddapalli</option>
                                                                        <option id="telangana" style="display: none">Rajanna Sircilla</option>
                                                                        <option id="telangana" style="display: none">Rangareddy</option>
                                                                        <option id="telangana" style="display: none">Sangareddy</option>
                                                                        <option id="telangana" style="display: none">Siddipet</option>
                                                                        <option id="telangana" style="display: none">Suryapet</option>
                                                                        <option id="telangana" style="display: none">Vikarabad</option>
                                                                        <option id="telangana" style="display: none">Wanaparthy</option>
                                                                        <option id="telangana" style="display: none">Warangal (Rural)</option>
                                                                        <option id="telangana" style="display: none">Warangal (Urban)</option>
                                                                        <option id="telangana" style="display: none">Yadadri Bhuvanagiri</option>

                                                                        <!--Madhya Pradesh(cc)-->

                                                                        <option id="madhya_pradesh" style="display: none">Agar Malwa</option>
                                                                        <option id="madhya_pradesh" style="display: none">Alirajpur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Anuppur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Ashoknagar</option>
                                                                        <option id="madhya_pradesh" style="display: none">Balaghat</option>
                                                                        <option id="madhya_pradesh" style="display: none">Barwan</option>
                                                                        <option id="madhya_pradesh" style="display: none">Betul</option>
                                                                        <option id="madhya_pradesh" style="display: none">Bhind</option>
                                                                        <option id="madhya_pradesh" style="display: none">Bhopal</option>
                                                                        <option id="madhya_pradesh" style="display: none">Burhanpur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Chhatarpur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Chhindwara</option>
                                                                        <option id="madhya_pradesh" style="display: none">Damoh</option>
                                                                        <option id="madhya_pradesh" style="display: none">Datia</option>
                                                                        <option id="madhya_pradesh" style="display: none">Dewas</option>
                                                                        <option id="madhya_pradesh" style="display: none">Dhar</option>
                                                                        <option id="madhya_pradesh" style="display: none">Dindori</option>
                                                                        <option id="madhya_pradesh" style="display: none">East Nimar</option>
                                                                        <option id="madhya_pradesh" style="display: none">Guna</option>
                                                                        <option id="madhya_pradesh" style="display: none">Gwalior</option>
                                                                        <option id="madhya_pradesh" style="display: none">Harda</option>
                                                                        <option id="madhya_pradesh" style="display: none">Hoshangabad</option>
                                                                        <option id="madhya_pradesh" style="display: none">Indore</option>
                                                                        <option id="madhya_pradesh" style="display: none">Jabalpur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Jhabua</option>
                                                                        <option id="madhya_pradesh" style="display: none">Katni</option>
                                                                        <option id="madhya_pradesh" style="display: none">Mandla</option>
                                                                        <option id="madhya_pradesh" style="display: none">Mandsaur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Morena</option>
                                                                        <option id="madhya_pradesh" style="display: none">Narsinghpur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Neemuch</option>
                                                                        <option id="madhya_pradesh" style="display: none">Niwari</option>
                                                                        <option id="madhya_pradesh" style="display: none">Panna</option>
                                                                        <option id="madhya_pradesh" style="display: none">Raisen</option>
                                                                        <option id="madhya_pradesh" style="display: none">Rajgarh</option>
                                                                        <option id="madhya_pradesh" style="display: none">Ratlam</option>
                                                                        <option id="madhya_pradesh" style="display: none">Rewa</option>
                                                                        <option id="madhya_pradesh" style="display: none">Sagar</option>
                                                                        <option id="madhya_pradesh" style="display: none">Satna</option>
                                                                        <option id="madhya_pradesh" style="display: none">Sehore</option>
                                                                        <option id="madhya_pradesh" style="display: none">Seoni</option>
                                                                        <option id="madhya_pradesh" style="display: none">Shahdol</option>
                                                                        <option id="madhya_pradesh" style="display: none">Shajapur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Sheopur</option>
                                                                        <option id="madhya_pradesh" style="display: none">Shivpuri</option>
                                                                        <option id="madhya_pradesh" style="display: none">Sidhi</option>
                                                                        <option id="madhya_pradesh" style="display: none">Singrauli</option>
                                                                        <option id="madhya_pradesh" style="display: none">Tikamgarh</option>
                                                                        <option id="madhya_pradesh" style="display: none">Ujjain</option>
                                                                        <option id="madhya_pradesh" style="display: none">Umaria</option>
                                                                        <option id="madhya_pradesh" style="display: none">Vidisha</option>
                                                                        <option id="madhya_pradesh" style="display: none">West Nimar</option>

                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                <script type="text/javascript">
                                                                function check () 
                                                                     {
                                                                        var che = document.getElementById("inputState").value;
                                                                        var a = document.querySelectorAll("[id='tamil_nadu']");
                                                                        var b = document.querySelectorAll("[id='kerela']");
                                                                        var c = document.querySelectorAll("[id='punjab']");
                                                                        var d = document.querySelectorAll("[id='rajasthan']");
                                                                        var e =document.querySelectorAll("[id='andhra']");
                                                                        var f = document.querySelectorAll("[id='arunachal']");
                                                                        var g = document.querySelectorAll("[id='assam']");
                                                                        var h = document.querySelectorAll("[id='goa']");
                                                                        var ii = document.querySelectorAll("[id='maharashtra']");
                                                                        var j = document.querySelectorAll("[id='Chattisgarh']");
                                                                        var k = document.querySelectorAll("[id='orissa']");
                                                                        var l = document.querySelectorAll("[id='gujarat']");
                                                                        var m = document.querySelectorAll("[id='haryana']");
                                                                        var n = document.querySelectorAll("[id='uttarakand']");
                                                                        var o = document.querySelectorAll("[id='himachal_pradesh']");
                                                                        var p = document.querySelectorAll("[id='jammu_kashmir']");
                                                                        var q = document.querySelectorAll("[id='uttar_pradesh']");
                                                                        var r = document.querySelectorAll("[id='mizoram']");
                                                                        var s = document.querySelectorAll("[id='meghalaya']");
                                                                        var t = document.querySelectorAll("[id='west_bengal']");
                                                                        var u = document.querySelectorAll("[id='tripura']");
                                                                        var v = document.querySelectorAll("[id='nagaland']");
                                                                        var w = document.querySelectorAll("[id='jharkhand']");
                                                                        var x = document.querySelectorAll("[id='karnataka']");
                                                                        var y = document.querySelectorAll("[id='bihar']");
                                                                        var z = document.querySelectorAll("[id='manipur']");
                                                                        var aa = document.querySelectorAll("[id='sikkim']");
                                                                        var bb = document.querySelectorAll("[id='telangana']");
                                                                        var cc = document.querySelectorAll("[id='madhya_pradesh']");



                                                                    
                                                                        switch(che)
                                                                        {
                                                                         case "Tamil Nadu":
                                                                              
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < a.length; i++) 
                                                                                      a[i].style.display='block';   
                                                                                
                                                                                break;

                                                                                
                                                                          case "Kerela":
                                                                                
                                                                              
                                                                     
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < b.length; i++) 
                                                                                      b[i].style.display='block';   
                                                                            break;


                                                                            case "Punjab":
                                                                                
                                                                               
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < c.length; i++) 
                                                                                      c[i].style.display='block';
                                                                        
                                                                              break;



                                                                            case "Rajasthan":
                                                                                
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='block';   
                                                                              break;

                                                                            case "Andhra Pradesh":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                      e[i].style.display='block';
                                                                                         
                                                                                break;
                                                                                
                                                                                
                                                                            case "Arunachal Pradesh":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < f.length; i++) 
                                                                                      f[i].style.display='block';
                                                                                         
                                                                                break;
                                                                                
                                                                                
                                                                            case "Assam":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < g.length; i++) 
                                                                                      g[i].style.display='block';
                                                                                         
                                                                                break;
                                                              
                                                                            case "Goa":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < h.length; i++) 
                                                                                      h[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Maharashtra":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                      ii[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Chhattisgarh":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < j.length; i++) 
                                                                                      j[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Orissa":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < k.length; i++) 
                                                                                      k[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Gujarat":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < l.length; i++) 
                                                                                      l[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Haryana":
                                                                                
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < m.length; i++) 
                                                                                      m[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Uttarakand":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < n.length; i++) 
                                                                                      n[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Himachal Pradesh":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < o.length; i++) 
                                                                                      o[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Jammu and Kashmir":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < p.length; i++) 
                                                                                      p[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Uttar Pradesh":
                                                                                
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < q.length; i++) 
                                                                                      q[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Mizoram":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < r.length; i++) 
                                                                                      r[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Meghalaya":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < s.length; i++) 
                                                                                      s[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "West Bengal":
                                                                                
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < t.length; i++) 
                                                                                      t[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Tripura":
                                                                                
                                                                                
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < u.length; i++) 
                                                                                      u[i].style.display='block';
                                                                        
                                                                                break;
                                                                                
                                                                            case "Nagaland":
                                                                                
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < v.length; i++) 
                                                                                      v[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Jharkand":
                                                                                
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < w.length; i++) 
                                                                                      w[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Karnataka":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                      x[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Bihar":
                                                                                
                                                                                
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < y.length; i++) 
                                                                                      y[i].style.display='block';   
                                                                                break; 
                                                                                
                                                                            case "Manipur":
                                                                                
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                 for(var i = 0; i < z.length; i++) 
                                                                                      z[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            case "Sikkim":
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                      aa[i].style.display='block';
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                      aa[i].style.display='block';
                                                                        
                                                                                break;
                                                                                
                                                                            case "Telangana":
                                                                                
                                                                            
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';

                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                      bb[i].style.display='block';
                                                                        
                                                                                break;
                                                                                
                                                                            case "Madhya Pradesh":
                                                                               
                                                                               
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                       a[i].style.display='none';

                                                                                 for(var i = 0; i < cc.length; i++) 
                                                                                      cc[i].style.display='block';   
                                                                                break;
                                                                                
                                                                            default:
                                                                                for(var i = 0; i < a.length; i++) 
                                                                                      a[i].style.display='none';
                                                                     
                                                                                for(var i = 0; i < b.length; i++) 
                                                                                       b[i].style.display='none';

                                                                                for(var i = 0; i < c.length; i++) 
                                                                                       c[i].style.display='none';
                                                                                                                                            
                                                                                for(var i = 0; i < d.length; i++) 
                                                                                      d[i].style.display='none' ;                           

                                                                                for(var i = 0; i < e.length; i++) 
                                                                                       e[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < f.length; i++) 
                                                                                       f[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < g.length; i++) 
                                                                                       g[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < h.length; i++) 
                                                                                       h[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < ii.length; i++) 
                                                                                       ii[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < j.length; i++) 
                                                                                       j[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < k.length; i++) 
                                                                                       k[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < l.length; i++) 
                                                                                       l[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < m.length; i++) 
                                                                                       m[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < n.length; i++) 
                                                                                       n[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < o.length; i++) 
                                                                                       o[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < p.length; i++) 
                                                                                       p[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < q.length; i++) 
                                                                                       q[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < r.length; i++) 
                                                                                       r[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < s.length; i++) 
                                                                                       s[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < t.length; i++) 
                                                                                       t[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < u.length; i++) 
                                                                                       u[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < v.length; i++) 
                                                                                       v[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < w.length; i++) 
                                                                                       w[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < x.length; i++) 
                                                                                       x[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < y.length; i++) 
                                                                                       y[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < z.length; i++) 
                                                                                       z[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < aa.length; i++) 
                                                                                       aa[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < bb.length; i++) 
                                                                                       bb[i].style.display='none';
                                                                                
                                                                                for(var i = 0; i < cc.length; i++) 
                                                                                       cc[i].style.display='none';
                                                                        }
    

                                                                           
                                                                                       }
                                                                </script>
                                                               
                                                                    
                                                                    <div class="col">
                                                                <div class="form-group mb-4">
                                                                    <label class="col-md-7 col-form-label" for="userName3">Zip code</label>
                                                                    <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="zip" id="inputZip" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                
                                                                <div class="w-100"></div> <!----------------------  DIVIDE   ------------------------->
                                                                   <div class="col mb-3">
                                                                    <div class="form-group mt-3">
                                                                    <label class="col-sm-2 col-form-label" for="userName3">Marital Status</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio9" name="married" class="custom-control-input" value="n" required>
                                                                    <label class="custom-control-label" for="customRadio9">Single</label>
                                                                </div> 
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadio10" name="married" class="custom-control-input" value="y" required>
                                                                    <label class="custom-control-label" for="customRadio10">Married</label>
                                                                </div>
                                                                    </div>
                                                            </div>
                                                                
                                                                
                                                                                                                            
                                                             <!-- end row -->
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

      

        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>


        <!-- demo app -->
       <script src="assets/js/pages/demo.form-wizard.js"></script>
        
        <!-- end demo js-->
        
        
        
        


    </body>

</html>