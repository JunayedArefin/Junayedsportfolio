<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, 
   initial-scale=1.0">
   <style>
      table, tr, th, td{
         border: 1px solid black;
         border-collapse: collapse;
         padding: 8px;}
      table {
         border-collapse: collapse;}
      tbody tr:nth-child(odd) {
         background: #eee;}
      caption {
         font-size: 0.8rem;}
   </style>
</head>
</html>
<?php
   include 'connect.php';
   $query = 'SELECT * FROM messages';
   $run = mysqli_query($con, $query);
   if(mysqli_num_rows($run)>0){
      echo '<table>
            <tr>
            <th>Mail</th>
            <th>Messages</th>
            </tr>';
   while($row = mysqli_fetch_assoc($run)){
      echo '<tr>
            <td>'
            .$row['mail'].'</td><td>'.$row
            ['message'].' </td></tr>';}
   echo '</table>';
   }
?>