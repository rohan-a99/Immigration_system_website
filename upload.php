<?php
session_start();
$abc=$_SESSION['username'];



        $dbHost= 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'immigration_system';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }




     if(isset($_POST["submit"])){
       
        
            $image=addslashes($_FILES['image']['tmp_name']);
            $image=file_get_contents($image);
            $image=base64_encode($image);
        
        
        //Insert image content into database
        
       $query="UPDATE login set image='$image' WHERE username='$abc'";
       

        if($db->query($query) == TRUE)
        {
            echo "File uploaded successfully.";
            header("Location:settings.php");
        }

        else{
            echo "File upload failed, please try again.";
        } 
    }


   
?>