<?php  

session_start();

$a=$_POST['r_add'];
$b=$_POST['r_city'];
$c=$_POST['r_state'];
$d=$_POST['r_dist'];
$e=$_POST['r_zip'];


$f=$_POST['p_add'];
$g=$_POST['p_city'];
$h=$_POST['p_state'];
$i=$_POST['p_dist'];
$j=$_POST['p_zip'];


$k=$_POST['f_nm'];
$l=$_POST['f_nationality'];
 
$m=$_POST['m_nm'];
$n=$_POST['m_nationality'];


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


if($f == "" && $g == "" && $h == "" && $i == "" && $j == "")
{
	
	$f=$a;
	$g=$b;
	$h=$c;
	$i=$d;
	$j=$e;
}


$sql="UPDATE visa_2 SET r_address='$a',r_state='$c',r_dist='$d',r_city='$b',r_zip='$e',p_address='$f',p_state='$h',p_dist='$i',p_city='$g',p_zip='$j',father_nm='$k',f_nationality='$l',mother_nm='$m',m_nationality='$n' WHERE username='$abc'";

if($conn->query($sql) === TRUE)
{
	header('Location: newvisa3.html');


}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>