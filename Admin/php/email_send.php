<?php 
        require("database.php");
        session_start();

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            $Name = $_POST["name"]; 
            $Email = $_POST["email"];
            $Subject = $_POST["subject"]; 
            $Message = $_POST["message"]; 

            $retval = mail ($Email, $Subject, $Message, $Name);
            if( $retval == true ) {
                echo "Message sent successfully...";
             }else {
                echo "Message could not be sent...";
             }

        
        }



?>