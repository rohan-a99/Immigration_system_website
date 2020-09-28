<?php  


session_start();
$a=$_POST['f_nm'];
$b=$_POST['m_nm'];
$c=$_POST['l_nm'];
$d=$_POST['ff_nm'];
$h=$_POST['mm_nm'];
$j=$_POST['dob'];
$k=$_POST['sex'];
$l=$_POST['email'];
$n=$_POST['phn'];
$p=$_POST['a_phn'];
$q=$_POST['vil_to'];
$r=$_POST['r_dist'];
$s=$_POST['r_state'];
$u=$_POST['married'];
$v=$_POST['zip'];

$abc=$_SESSION['username'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="immigration_system";

$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$sql="UPDATE  passport_2 SET f_nm='$a',m_nm='$b',l_nm='$c',father_nm='$d',mother_nm='$h',dob='$j',gender='$k',email='$l',phn='$n',a_phn='$p',vil_to='$q',dist='$r',state='$s',zip='$v',married='$u' WHERE username='$abc'";


if($conn->query($sql) === TRUE)
{
	header('Location: new-passport3.php');

}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();


?>