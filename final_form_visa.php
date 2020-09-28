<?php
session_start();

$abc=$_SESSION['username'];

include_once('db_connect.php');
$query="SELECT * FROM visa_1 WHERE username='$abc'";
$result=mysqli_query($connection, $query);

$query1="SELECT * FROM visa_2 WHERE username='$abc'";
$result1=mysqli_query($connection, $query1);

$query2="SELECT * FROM visa_3 WHERE username='$abc'";
$result2=mysqli_query($connection, $query2);

$query3="SELECT * FROM visa_4 WHERE username='$abc'";
$result3=mysqli_query($connection, $query3);

$query4="SELECT * FROM visa_4 WHERE username='$abc'";
$result4=mysqli_query($connection, $query4);

?>


<!DOCTYPE html>
<html>
<head>
       <link rel="shortcut icon" href="assets\img\brand1.png" type="image/x-icon">
    

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
       
	<title>Form_Print</title>


	<style>
		th
        {
            padding: 20px;
        }
		

		 td
        {
        	padding-bottom: 8px;
        	padding-top: 8px;
        	padding-left: 20px;
        }
	</style>
</head>
<body>

	<table align="center" border="1px" style="width: 800px ">
		<tr>
            
			<th  colspan="3" style="padding: 20px"><center><img src="assets/img/brandw.png"> </center></th>
           
		</tr>

		

		





      <tr>
      	<th   colspan="3" style="padding: 17px;">Personal Information</th>
      </tr>


      
        <tr>

        	<th>First Name</th>
        	<th>Middle Name</th>
        	<th>Last Name</th>
        </tr>

        <?php

    while ($pass=mysqli_fetch_assoc($result)) 
    {
    
    ?>

        <tr>
			
			<td><?php echo $pass['f_nm']; ?></td>
			<td><?php echo $pass['m_nm']; ?></td>
			<td><?php echo $pass['l_nm']; ?></td>
		</tr>

		 <tr>

        	<th>Date of Birth</th>
        	<th>Gender</th>
        	<th>Married</th>
        </tr>

         <tr>
			
			<td><?php echo $pass['dob']; ?></td>
			<td><?php echo $pass['gender']; ?></td>
			<td><?php echo $pass['married']; ?></td>
		</tr>


		<tr>

        	<th>Email</th>
        	<th>Phone</th>
        	<th>Alternate Phone</th>
        </tr>

         <tr>
			
			<td><?php echo $pass['email']; ?></td>
			<td><?php echo $pass['phn']; ?></td>
			<td><?php echo $pass['a_phn']; ?></td>
		</tr>

		<tr>

        	<th>City</th>
        	<th colspan="2">Country</th>
        	
        </tr>

         <tr>
			
			<td><?php echo $pass['city']; ?></td>
			<td  colspan="2"><?php echo $pass['country']; ?></td>
			
		</tr>


		<tr>

        	<th>Religion</th>
        	<th>Identification Mark</th>
        	<th>Qualification</th>
        	

        </tr>

         <tr>
			
			<td ><?php echo $pass['religion']; ?></td>
			<td ><?php echo $pass['iden_mark']; ?></td>
			<td ><?php echo $pass['qualification']; ?></td>
			
		
		</tr>

		




		<?php
         }

        ?>

        
        <!--visa2-->

		<tr>
			<th colspan="3" style="padding: 17px">Address Information</th>
		</tr>

		<tr>
			<th colspan="3" align="left" style="padding-left: 20px; padding-top: 7px; padding-bottom: 7px;">Residential Address</th>
		</tr>
		
		<tr>
			<th >Address</th>
			<th colspan="2">City/Town</th>

			
		</tr>

          <?php

		 while ($pass=mysqli_fetch_assoc($result1)) 
        {
    
         ?>

		<tr>
			<td ><?php echo $pass['r_address']; ?></td>
			<td colspan="2"><?php echo $pass['r_city']; ?></td>
		</tr>
		

		<tr>
			<th>District</th>
			<th>State</th>
			<th>Pincode</th>
		</tr>

		<tr>
			<td ><?php echo $pass['r_dist']; ?></td>
			<td ><?php echo $pass['r_state']; ?></td>
			<td ><?php echo $pass['r_zip']; ?></td>
		</tr>




        <tr>
			<th colspan="3" align="left" style="padding-left: 20px; padding-top: 7px; padding-bottom: 7px; ">Permanent Address</th>
		</tr>
		
		<tr>
			<th >Address</th>
			<th colspan="2">City/Town</th>

			
		</tr>

		<tr>
			<td ><?php echo $pass['p_address']; ?></td>
			<td  colspan="2"><?php echo $pass['p_city']; ?></td>
		</tr>
		

		<tr>
			<th>District</th>
			<th>State</th>
			<th>Pincode</th>
		</tr>

		<tr>
			<td ><?php echo $pass['p_dist']; ?></td>
			<td ><?php echo $pass['p_state']; ?></td>
			<td ><?php echo $pass['p_zip']; ?></td>
		</tr>

		<tr>
			<th>Father's Name</th>
			<th colspan="2">Nationality</th>
		</tr>
        
        <tr>
        	
        	<td><?php echo $pass['father_nm']; ?></td>
        	<td colspan="2"><?php echo $pass['f_nationality']; ?></td>
        </tr>

		<tr>
			<th>Mother's Name</th>
			<th colspan="2">Nationality</th>
		</tr>


		<tr>
        	
        	<td><?php echo $pass['mother_nm']; ?></td>
        	<td colspan="2"><?php echo $pass['m_nationality']; ?></td>
        </tr>

		 <?php
         }

        ?>


        <tr>
        	<th colspan="3" style="padding: 15px">Passport Details</th>
        </tr>
		<tr>
			<th>Passport No.</th>
			<th colspan="2">Issue Place</th>
		
		</tr>


         
         <?php

         while ($pass=mysqli_fetch_array($result2)) 
        {
    
        ?>
		<tr>
			<td ><?php echo $pass['passport_no']; ?></td>
			<td  colspan="2"><?php echo $pass['issue_place']; ?></td>
			
		</tr>


		<tr>
			
			<th>Issue Date</th>
			<th colspan="2">Expiry Date</th>
		</tr>

		<tr>
			 
			 <td><?php echo $pass['issue_date']; ?></td>
			 <td colspan="2"><?php echo $pass['expiry_date']; ?></td>

		</tr>

	<?php }  ?>

	 <tr>
        	<th colspan="3" style="padding: 15px">Visa Details</th>
        </tr>

		<tr>
			<th>Applying Country</th>
			<th colspan="2">Indian Embassy</th>
		</tr>


<?php

         while ($pass=mysqli_fetch_array($result3)) 
        {
    
        ?>

		<tr>
			
			<td><?php echo $pass['applying_country']; ?></td>
			<td colspan="2"><?php echo $pass['indian_embassy']; ?></td>
		</tr>


		<tr>
			<th>Nationality</th>
			<th colspan="2">Arrival Date</th>
		</tr>


		<tr>
			
			<td><?php echo $pass['nationality']; ?></td>
			<td colspan="2"><?php echo $pass['arrival_date']; ?></td>
		</tr>


		<tr>
			<th>Visa Type</th>
			<th colspan="2">Purpose of Visa</th>
		</tr>


		<tr>
			
			<td><?php echo $pass['visa_type']; ?></td>
			<td colspan="2"><?php echo $pass['purpose_of_visa']; ?></td>
		</tr>


     <?php  } ?>
		
   

        <tr>

        	  
        	    <th colspan="3">
        	
        	
        		<a class="btn btn-info float-left" href="passport1_edit.php?username=<?php echo $_SESSION['username']; ?>" style="padding: 2px 35px">Edit</a>
        	<a class="btn btn-info float-right" href="form_submit.php?username=<?php echo $_SESSION['username']; ?>" style="padding: 2px 35px">Submit</a>
        	</th>
        </tr>

            
	</table>

</body>
</html>