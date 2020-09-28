<?php
session_start();
include_once('db_connect.php');

$abc=$_SESSION['username'];




$a=$_POST['pass'];
$b=$_POST['c_pass'];
$c=$_POST['mail'];


if(isset($_POST['save2']))

{
    $sqll="UPDATE login set password='$a' where username='$abc'";
    mysqli_query($connection,$sqll);
    header('Location: settings.php');
}


if(isset($_POST['save1']))
{
    $sqll2="UPDATE login set email='$c' where username='$abc'";
    mysqli_query($connection,$sqll);
    header('Location: settings.php');

}


?>