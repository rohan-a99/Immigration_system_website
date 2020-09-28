<?php
session_start();


$c=$_POST['r_address'];
$d=$_POST['r_city'];
$e=$_POST['r_dist'];
$f=$_POST['r_state'];
$g=$_POST['r_zip'];

$i=$_POST['p_address'];
$j=$_POST['p_city'];
$k=$_POST['p_dist'];
$l=$_POST['p_state'];
$m=$_POST['p_zip'];





$servername = "localhost";
$username = "root";
$password = "";
$dbname="immigration_system";

$abc=$_SESSION['username'];


$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if($i == "" && $j == "" && $k == "" && $l == "" && $m == "")
{
	
	$i=$c;
	$j=$d;
	$k=$e;
	$l=$f;
	$m=$g;
}


$sql="UPDATE passport_3 SET r_address='$c',r_city='$d',r_dist='$e',r_state='$f',r_zip='$g',p_address='$i',p_city='$j',p_dist='$k',p_state='$l',p_zip='$m'  WHERE username='$abc'";

if($conn->query($sql) === TRUE)
{
	header('Location: new-passport4.php');
}


else
{
	echo "Error :" .$sql. "<br>" . $conn->error;
}

$conn->close();
?>