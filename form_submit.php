<?php
session_start();
include('db_connect.php');

$abc=$_SESSION['username'];
$sql="UPDATE passport_details SET status='application received' WHERE username='$abc'";

if($connection->query($sql) == TRUE)
{
	echo "status successfully changed";
	header('Location: citizen_dash.php');
}

else

{
	echo "Error: " . $sql. "<br>" .$connection->error;
}

?>