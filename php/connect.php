<?php
//$connection = mysqli_connect ('localhost', 'root', 'root');
//$select_db = mysqli_select_db($connection, 'owndatabase');


$connection = false;

 function connectDB() {
   global $connection;
   $connection = new mysqli("localhost", "root", "root", "owndatabase");
   //$connection->query("SET NAMES 'utf-8'");
 }



 function closeDB(){
   global $connection;
   $connection->close();
 }
?>
