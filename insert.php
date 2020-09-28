<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$nationality = $_POST['acc_type'];



if (!empty($username) || !empty($email) || !empty($password) || !empty($nationality)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "immigration_system";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From login Where email = ? Limit 1";
     $SELECT1 = "SELECT username From login Where username = ? Limit 1";
     $INSERT = "INSERT Into login (username,email, password, nationality,name) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
        
     $stmt = $conn->prepare($SELECT1);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum1 = $stmt->num_rows;
     if ($rnum1==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $username, $email, $password, $nationality, $name);
      $stmt->execute();



    


      



      if($nationality == 'citizen')

      {
                 

        do{
  
     $a=rand(100001,199999);

     $sql="SELECT * from login where application_no='$a'";
     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
     $count = mysqli_num_rows($result);

     if($count==0)
     { 

      $add="UPDATE login SET application_no = '$a' where username='$username'";
      if($conn->query($add)===TRUE)
      {
        
        break;
      }
    }
    }while($a>100000);



      
      

      $sql1="INSERT INTO passport_1(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql1);

      $sql2="INSERT INTO passport_2(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql2);


      $sql4="INSERT INTO passport_4(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql4);

       $sql3="INSERT INTO passport_3(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql3);

      $sql5="INSERT INTO passport_details(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql5);




    }


    else

    {



      do{
  
     $a=rand(100001,199999);

     $sql="SELECT * from login where application_no='$a'";
     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
     $count = mysqli_num_rows($result);

     if($count==0)
     { 

      $add="UPDATE login SET application_no = '$a' where username='$username'";
      if($conn->query($add)===TRUE)
      {
        
        break;
      }
    }
    }while($a>100000);




      $sql6="INSERT INTO visa_1(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql6);

      $sql7="INSERT INTO visa_2(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql7);

      $sql8="INSERT INTO visa_3(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql8);

      $sql9="INSERT INTO visa_4(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql9);

      $sql10="INSERT INTO visa_details(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql10);


      $sql11="INSERT INTO visa_renewal1(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql11);

      $sql12="INSERT INTO visa_renewal2(username,application_no) VALUES ('$username','$a')";
      mysqli_query($conn,$sql12);


    }

  
    header('Location: signin2.html');


     } 

     else {

      header('Location: signin1.html');  
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>