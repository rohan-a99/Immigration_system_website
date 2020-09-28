<?php

require('db_connect.php');
$username = $_POST['username'];
$password = $_POST['password'];


$sql="SELECT * from login WHERE username='$username'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);


if($count == 1)
{
	$sql="UPDATE login SET password='$password' WHERE username='$username' ";

	if($connection->query($sql) === TRUE)
	{
		header('Location: signin.html'); 
	}
}


else

{
	header('Location: forgetpass1.html');
}

?>