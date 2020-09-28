<?php  

session_start();
 require('db_connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username']=$username;


/*$mp="SELECT name FROM login WHERE username='$username' and password='$password'";
$mp2=mysqli_query($connection, $mp) or die(mysqli_error($connection));


$_SESSION['name']=$mp2;*/


// CHECK FOR THE RECORD FROM TABLE







$query = "SELECT * FROM login WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "Login Credentials verified";


if($username=='admin' && $password=='admin')
{
	header('Location: a_dashboard.php');
}

else
{

$sql="SELECT * FROM login WHERE username='$username' and nationality='citizen'";
$result1 = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count1 = mysqli_num_rows($result1);

    
 if($count1 == 1)
 {   


 /*$app="SELECT application_no FROM login WHERE username='$username'";
 $res=mysqli_query($connection,$app);

 $_SESSION['application_no']=$res;	*/
 header('Location: citizen_dash.php');

}

else
{


 header('Location: f_dashboard.php');
}

}

}

else{

header('Location: signin1.html');
//echo "Invalid Login Credentials";
}
    // header('Location: index2.html');
}
?>