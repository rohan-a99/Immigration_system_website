<!--<?php
session_start();

$abc=$_SESSION['username'];

include_once('db_connect.php');
$query="SELECT * FROM visa_renewal1 WHERE username='$abc'";
$result=mysqli_query($connection, $query);


$query2="SELECT * FROM visa_renewal2 WHERE username='$abc'";
$result2=mysqli_query($connection, $query2);


$query4="SELECT * FROM passport_4 WHERE username='$abc'";
$result4=mysqli_query($connection, $query4);

?>-->


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
			
			<th>First Name</th>
			<th>Middle Name</th>
            <th>Last Name</th>
		</tr>




		<?php

    while ($rows=mysqli_fetch_assoc($result)) 
    {
    
    ?>

		<tr>
			
			<td ><?php echo $rows['f_nm']; ?></td>
			<td ><?php echo $rows['m_nm']; ?></td>
			<td ><?php echo $rows['l_nm']; ?></td>
		</tr>






		<tr>
			<th>Passport No.</th>
			<th>Issue Date</th>
			<th>Expiry Date</th>
		</tr>

		<tr>
			
			<td ><?php echo $rows['passport_no']; ?></td>
			<td ><?php echo $rows['issue_date']; ?></td>
			<td ><?php echo $rows['expiry_date']; ?></td>
		</tr>


		<tr>
			<th>Phone No.</th>
			<th colspan="2">Alternate Phone</th>
		</tr>


		<tr>
			<td ><?php echo $rows['phn']; ?></td>
			<td  colspan="2"><?php echo $rows['a_phn']; ?></td>
		</tr>

		<?php
       }

        ?>





      <tr>
      	<th colspan="3"  style="padding: 17px;">Visa Information</th>
      </tr>


      
        <tr>

        	<th>Visa Number</th>
        	<th colspan="2">Visa Type</th>
        
        </tr>

        <?php

    while ($pass=mysqli_fetch_assoc($result2)) 
    {
    
    ?>

        <tr>
			
			<td ><?php echo $pass['visa_no']; ?></td>
			<td  colspan="2"><?php echo $pass['type']; ?></td>
		</tr>

		 <tr>

        	<th>Visa Issue Date</th>
        	<th colspan="2">Visa Expiry Date</th>
        </tr>

         <tr>
			
			<td ><?php echo $pass['v_issue_date']; ?></td>
			<td colspan="2"><?php echo $pass['v_expiry_date']; ?></td>
		</tr>


		<tr>

        	<th>Reason</th>
        	<th colspan="2">Extension Needed Till</th>
        </tr>

         <tr>
			
			<td ><?php echo $pass['reason']; ?></td>
			<td  colspan="2"><?php echo $pass['extension_needed_till']; ?></td>
		</tr>

		
		<?php
         }

        ?>
   

        <tr>

        	  
        	    <th colspan="3">
        	
        	
        		<a class="btn btn-info float-left" href="passport1_edit.php?username=<?php echo $_SESSION['username']; ?>" style="padding: 2px 35px">Edit</a>
        	<a class="btn btn-info float-right" href="form_submit.php?username=<?php echo $_SESSION['username']; ?>" style="padding: 2px 35px">Submit</a>
        	</th>
        </tr>

            
	</table>

</body>
</html>