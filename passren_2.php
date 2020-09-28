<?php  

session_start();

$x=$_POST['f_nm'];
$y=$_POST['m_nm'];
$z=$_POST['l_nm'];
$e=$_POST['dob'];
$f=$_POST['sex'];
$g=$_POST['email'];
$v=$_POST['phn'];
$a=$_POST['a_phn'];
$c=$_POST['vim'];
$d=$_POST['ms'];
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


$sql="UPDATE passport_renewal2 SET f_nm='$x',m_nm='$y',l_nm='$z',dob='$e',gender='$f',email='$g',phn='$v',a_phn='$a',identity_mark='$c',married='$d' WHERE username='$abc'";


if($conn->query($sql) === TRUE)
{
	header('Location: passport_renewal_3.php');

}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}





$conn->close();

?>