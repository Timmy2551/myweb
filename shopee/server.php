<?php
if($open_connect !=1){
    die(header("Location: form-login.php"));
    
}
$hostname = 'localhost';  
$username = 'root';
$password ='';
$database = 'programming';
$port = NULL;
$socket = NULL;

$connect = mysqli_connect($hostname, $username, $password, $database, $port, $socket);

if (!$connect) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
} else {
    mysqli_set_charset($connect, 'utf8');  
}
?>
