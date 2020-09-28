<?php  

session_start();

$x=$_POST['add'];
$y=$_POST['c/t'];
$z=$_POST['st'];
$e=$_POST['dist'];
$m=$_POST['zip'];
$g=$_POST['padd'];
$v=$_POST['pc/t'];
$a=$_POST['pst'];
$b=$_POST['pdist'];
$c=$_POST['pzip'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="login/signup";

$abc=$_SESSION['username'];


$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql="UPDATE passport_renewal3 SET r_address='$x',r_city='$y',r_dist='$e',r_state='$z',r_zip='$m',p_address='$g',p_city='$v',p_dist='$b',p_state='$a',p_zip='$c' WHERE username='$abc'";


if($conn->query($sql) === TRUE)
{
	header('Location: final_form.php');

}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}





$conn->close();

?>