<?php  

session_start();

$a=$_POST['f_nm'];
$b=$_POST['m_nm'];
$c=$_POST['l_nm'];
$d=$_POST['dob'];

$e=$_POST['gender'];
$f=$_POST['email'];
$g=$_POST['phn'];
$h=$_POST['a_phn'];

$i=$_POST['city'];
$j=$_POST['country'];
$k=$_POST['religion'];
$l=$_POST['iden_mark'];
 
$m=$_POST['qualification'];
$n=$_POST['married'];


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


$sql="UPDATE visa_1 SET f_nm='$a',m_nm='$b',l_nm='$c',dob='$d',gender='$e',email='$f',phn='$g',a_phn='$h',city='$i',country='$j',religion='$k',iden_mark='$l',qualification='$m',married='$n' WHERE username='$abc'";

if($conn->query($sql) === TRUE)
{
	header('Location: newvisa2.html');


}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>