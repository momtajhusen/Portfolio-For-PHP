<?php
 
 require("database.php");
 session_start();

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {


    $username = mysqli_real_escape_string($db,$_POST["username"]);
    $password = mysqli_real_escape_string($db,$_POST["password"]);
 

    $check_password = $db->prepare("SELECT user,pass From admin WHERE user = ? AND pass = ? ");

    $check_password->bind_param('ss',$username,$password);

    $check_password->execute();

    $check_password->store_result(); 

    if($check_password->num_rows != 0)
    {
      echo "correct";
      $_SESSION["username"] = $username;
      
    }

    else{
        echo "incrroct";
    }


 }

 ?>