<?php
session_start();

$abc=$_SESSION['username'];

include_once('db_connect.php');
$query="SELECT * FROM passport_1 WHERE username='$abc'";
$result=mysqli_query($connection, $query);

$query1="SELECT * FROM passport_2 WHERE username='$abc'";
$result1=mysqli_query($connection, $query1);

$query2="SELECT * FROM passport_3 WHERE username='$abc'";
$result2=mysqli_query($connection, $query2);

$query3="SELECT * FROM passport_4 WHERE username='$abc'";
$result3=mysqli_query($connection, $query3);

$query4="SELECT * FROM passport_4 WHERE username='$abc'";
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
		
	</style>
</head>
<body>

	<table align="center" border="1px" style="width: 800px ">
		<tr>
            
			<th  colspan="3" style="padding: 20px"><center><img src="assets/img/brandw.png"> </center></th>
           
		</tr>

		<tr>
			
			<th>Application category</th>
			<th>Citizen category</th>
            <th rowspan="4" >

<center>
            	<?php 


            while($rows=mysqli_fetch_array($result4))
      	{
      		echo '<img height="45%" width="200px"  src=" data:image;base64,'.$rows['photo'].' ">';
      	
      	}


             ?>

</center>
         </th>
		</tr>

		<?php

    while ($rows=mysqli_fetch_assoc($result)) 
    {
    
    ?>

		<tr>
			
			<td align="center"><?php echo $rows['type']; ?></td>
			<td align="center"><?php echo $rows['category']; ?></td>
		</tr>






		<tr>
			<th>Book type</th>
			<th>Non-ECR</th>
		</tr>

		<tr>
			
			<td align="center"><?php echo $rows['b_type']; ?></td>
			<td align="center"><?php echo $rows['n_ecr']; ?></td>
		</tr>

		<?php
       }

        ?>





      <tr>
      	<th colspan="3"  style="padding: 17px;">Personal Information</th>
      </tr>


      
        <tr>

        	<th>First Name</th>
        	<th>Middle Name</th>
        	<th>Last Name</th>
        </tr>

        <?php

    while ($pass=mysqli_fetch_assoc($result1)) 
    {
    
    ?>

        <tr>
			
			<td align="center"><?php echo $pass['f_nm']; ?></td>
			<td align="center"><?php echo $pass['m_nm']; ?></td>
			<td align="center"><?php echo $pass['l_nm']; ?></td>
		</tr>

		 <tr>

        	<th>Father's Name</th>
        	<th>Mother's Name</th>
        	<th>Gender</th>
        </tr>

         <tr>
			
			<td align="center"><?php echo $pass['father_nm']; ?></td>
			<td align="center"><?php echo $pass['mother_nm']; ?></td>
			<td align="center"><?php echo $pass['gender']; ?></td>
		</tr>


		<tr>

        	<th>Date of Birth</th>
        	<th>Email</th>
        	<th>Phone</th>
        </tr>

         <tr>
			
			<td align="center"><?php echo $pass['dob']; ?></td>
			<td align="center"><?php echo $pass['email']; ?></td>
			<td align="center"><?php echo $pass['phn']; ?></td>
		</tr>

		<tr>

        	<th>Alternate Phone</th>
        	<th colspan="2">Marital Status</th>
        	
        </tr>

         <tr>
			
			<td align="center"><?php echo $pass['a_phn']; ?></td>
			<td align="center" colspan="2"><?php echo $pass['married']; ?></td>
			
		</tr>


		<tr>

        	<th>City/Town</th>
        	<th colspan="2">District</th>
        	

        </tr>

         <tr>
			
			<td align="center"><?php echo $pass['vil_to']; ?></td>
			<td align="center" colspan="2"><?php echo $pass['dist']; ?></td>
			
		
		</tr>
        
<tr>
        	<th>State</th>
        	<th colspan="2">Pincode</th>
        	

        </tr>

         <tr>
			
			<td align="center"><?php echo $pass['state']; ?></td>
			<td align="center" colspan="2"><?php echo $pass['zip']; ?></td>
		
		
		</tr>


		<?php
         }

        ?>


		<tr>
			<th colspan="3" style="padding: 17px">Address Information</th>
		</tr>

		<tr>
			<th colspan="3" align="left" style="padding: 7px">Residential Address</th>
		</tr>
		
		<tr>
			<th >Address</th>
			<th colspan="2">City/Town</th>

			
		</tr>

          <?php

		 while ($pass=mysqli_fetch_assoc($result2)) 
        {
    
         ?>

		<tr>
			<td align="center"><?php echo $pass['r_address']; ?></td>
			<td  align="center" colspan="2"><?php echo $pass['r_city']; ?></td>
		</tr>
		

		<tr>
			<th>District</th>
			<th>State</th>
			<th>Pincode</th>
		</tr>

		<tr>
			<td align="center"><?php echo $pass['r_dist']; ?></td>
			<td align="center"><?php echo $pass['r_state']; ?></td>
			<td align="center"><?php echo $pass['r_zip']; ?></td>
		</tr>




        <tr>
			<th colspan="3" align="left" style="padding: 7px">Permanent Address</th>
		</tr>
		
		<tr>
			<th >Address</th>
			<th colspan="2">City/Town</th>

			
		</tr>

		<tr>
			<td align="center"><?php echo $pass['p_address']; ?></td>
			<td  align="center" colspan="2"><?php echo $pass['p_city']; ?></td>
		</tr>
		

		<tr>
			<th>District</th>
			<th>State</th>
			<th>Pincode</th>
		</tr>

		<tr>
			<td align="center"><?php echo $pass['p_dist']; ?></td>
			<td align="center"><?php echo $pass['p_state']; ?></td>
			<td align="center"><?php echo $pass['p_zip']; ?></td>
		</tr>

		 <?php
         }

        ?>


        <tr>
        	<th colspan="3" style="padding: 15px">Proofs</th>
        </tr>
		<tr>
			<th>Qualification</th>
			<th>Aadhar Number</th>
			<th>Pan Number</th>
		</tr>


         
         <?php

         while ($pass=mysqli_fetch_array($result3)) 
        {
    
        ?>
		<tr>
			<td align="center"><?php echo $pass['qualification']; ?></td>
			<td align="center"><?php echo $pass['aadhar_no']; ?></td>
			<td align="center" style="padding-right: 10px"><?php echo $pass['pan_no']; ?></td>
		</tr>

		<tr>
			<th>Date : 14-02-2020</th>
			<th colspan="2" style="padding: 0px;"><center><?php echo '<img height="80" width="350" src=" data:image;base64,'.$pass['signature'].' ">'; ?></center></th>
		</tr>

		<?php
         }

        ?>
   

        <tr>

        	  
        	    <th colspan="3">
        	
        	
        		
        	<a class="btn btn-info float-right" href="form_submit.php?username=<?php echo $_SESSION['username']; ?>" style="padding: 2px 35px">Submit</a>
        	</th>
        </tr>

            
	</table>

</body>
</html>