<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "betmystro";


$db_connect = mysqli_connect($host,$user,$pass,$db_name);
if ($db_connect) {
    // echo "connection Successful";
}else{
    echo "connection Failed";
    // die(mysqli_error($db_connect));
}
?>