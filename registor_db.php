<?php
    session_start();
    include("server.php");

    $error = array();

    if (isset($_POST["reg-user"])){
        $username = mysql_real_escape_string($c);
        $email = mysql_real_escape_string($email);
        $password = mysql_real_escape_string($password_1);
        $password = mysql_real_escape_string($password_2);

        if (empty($username)) {
            array_push($error,"usrname is required")

        }
        if (empty($email)) {
            array_push($error,"email is required")
        }
        if (empty($password_1)) {
            array_push($error,"password is required")
        }
        if ($password_1 != $password_2){
            array_push($error , "the tow passwords do not match")
        }
        $user_check_query = "SELECT * FROM user WHERE username ='$username' OR email = '$email' " ;
        $puery = mysql_query($conn , $user_check_query);
        $result = mysql_fetch_assoc($query);

        
    }   
            


?>
