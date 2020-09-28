<?php
include_once('db_connect.php');

$query = "SELECT * FROM passport_details WHERE username='himesh' and status='pending'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);



?>

<!DOCTYPE html>

<html>
<head>
	<title>trial</title>
</head>
<body>


<h1>Trail Page</h1>

<div id="dis" style="display:


  <?php 

  if($count==1)

  {
  	echo "block";
  }

  else
  {
  	echo "none";
  }

  ?>

"><p>Hey its working</p></div>
</body>
</html>