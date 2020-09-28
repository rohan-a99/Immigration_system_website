<?php  

session_start();

$x=$_POST['f_nm'];
$y=$_POST['m_nm'];
$z=$_POST['l_nm'];
$v=$_POST['phn'];
$a=$_POST['a_phn'];
$b=$_POST['p_nm'];
$c=$_POST['idate'];
$d=$_POST['edate'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="immigration_system";

$abc=$_SESSION['username'];
$abcd= $_SESSION['application_no'];


$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$sql="UPDATE visa_renewal1 SET f_nm='$x',m_nm='$y',l_nm='$z',phn='$v',a_phn='$a',passport_no='$b',issue_date='$c',expiry_date='$d' WHERE username='$abc'";
if($conn->query($sql) === TRUE)
{
	header('Location: visa_ren2.php');

}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}





$conn->close();

?>