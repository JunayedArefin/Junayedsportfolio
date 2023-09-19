<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "newsletter";
$con = mysqli_connect($host, $user, $password, $db);

if(!$con){
   echo "connection faild!";
}else{
   echo "connection successful";
}

?>