<?php  

session_start();

$a=$_POST['applying_country'];
$b=$_POST['indian_embassy'];
$c=$_POST['nationality'];
$d=$_POST['arrival_date'];
$e=$_POST['visa_type'];
$f=$_POST['purpose'];


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


$sql="UPDATE visa_4 SET applying_country='$a',indian_embassy='$b',nationality='$c',arrival_date='$d',visa_type='$e',purpose_of_visa='$f' WHERE username='$abc'";

if($conn->query($sql) === TRUE)
{
	header('Location: final_form_visa.php');


}

else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>