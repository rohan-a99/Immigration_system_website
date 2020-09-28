<?php  

session_start();

$x=$_POST['v_nm'];
$y=$_POST['vt'];
$z=$_POST['vidate'];
$v=$_POST['vedate'];
$a=$_POST['reason'];
$b=$_POST['veneeded'];

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





$sql="UPDATE visa_renewal2 SET visa_no='$x',type='$y',v_issue_date='$z',v_expiry_date='$v',reason='$a',extension_needed_till='$b' WHERE username='$abc'";

if($conn->query($sql) === TRUE)
{
	header('Location: final_form_visa_form.php');

}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}





$conn->close();

?>