<?php  

session_start();

$x=$_POST['p_nm'];
$y=$_POST['p_off'];
$z=$_POST['doi'];
$e=$_POST['doe'];

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


$sql="UPDATE passport_renewal1 SET passport_no='$x',passport_office='$y',issue_date='$z',expiry_date='$e' WHERE username='$abc'";
if($conn->query($sql) === TRUE)
{
	header('Location: passport_renewal_2.php');

}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}





$conn->close();

?>