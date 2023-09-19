<?php
include 'connect.php';

$usermail = $_POST['mail'];
$message = $_POST['message'];

$query = "INSERT INTO messages(mail, message)
            VALUES('$usermail', '$message')";

   $run = mysqli_query($con, $query);
   if(!$run){
      echo "submission failed";
   }else{
      echo "<br> submission successful";
      header('location: list.php');
   }
echo $usermail;
?>