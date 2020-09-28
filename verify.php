<?php
include_once('db_connect.php');
$uname=$_GET['uname'];

$sql="SELECT * FROM passport_1 where username='$uname'";
$result=mysqli_query($connection,$sql);




echo $uname;





?>