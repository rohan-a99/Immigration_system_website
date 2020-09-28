<?php  

session_start();

$x=$_POST['type'];
$y=$_POST['category'];
$z=$_POST['n_ecr'];
$v=$_POST['book_type'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="immigration_system";

$abc=$_SESSION['username'];

$edit=$_SESSION['edit'];


$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql="UPDATE passport_1 SET type='$x',category='$y',n_ecr='$z',b_type='$v' WHERE username='$abc'";
if($conn->query($sql) === TRUE)
{

	if($edit == 'false')
	{
	header('Location: new-passport2.php');
    }


    else if($edit == 'true')
    {
    	header('Location: passport2_edit.php');
    }
}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}





$conn->close();

?>