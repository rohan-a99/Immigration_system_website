<?php  

session_start();

$a=$_POST['p_no'];
$b=$_POST['issue_place'];
$c=$_POST['issue_date'];
$d=$_POST['exp_date'];
$e=$_POST['passport_pic'];


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


$sql="UPDATE visa_3 SET passport_no='$a',issue_place='$b',issue_date='$c',expiry_date='$d',passport_pic='$e' WHERE username='$abc'";

if($conn->query($sql) === TRUE)
{
	header('Location: newvisa4.html');


}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>