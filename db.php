<?php

$host     = "localhost";
$user     = "root";
$password = "";
$db       = "web";

$con = mysqli_connect($host, $user, $password, $db) or die("Error");

if($con){
    
    
}else{
    
    echo 'Not Connected';
    
}
?>