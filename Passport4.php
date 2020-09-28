<?php 
require('db_connect.php');
session_start();

$a=$_POST['aadhar_no'];
$b=$_POST['pan_no'];
$c=$_POST['qualification'];
$f=$_POST['photo'];


$abc=$_SESSION['username'];

$image=addslashes($_FILES['image']['tmp_name']);
$image=file_get_contents($image);
$image=base64_encode($image);


$image2=addslashes($_FILES['aadhar_pic']['tmp_name']);
$image2=file_get_contents($image2);
$image2=base64_encode($image2);


$image3=addslashes($_FILES['photo']['tmp_name']);
$image3=file_get_contents($image3);
$image3=base64_encode($image3);


$sql="UPDATE passport_4 SET qualification='$c',aadhar_no='$a',pan_no='$b',signature='$image',photo='$image3',aadhar_pic='$image2' WHERE username='$abc'";

if($connection->query($sql))


{

	
	header('Location: final_form.php');

}

else

{
	echo "Error :" .$sql. "<br>" . $connection->error;
}

$conn->close();

?>
