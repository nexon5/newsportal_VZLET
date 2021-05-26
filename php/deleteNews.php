<?php
  include 'connect.php';
  connectDB();
  $id_n=$_GET['id_n'];
  mysqli_query($connection, "DELETE FROM `news` WHERE id_n = '$id_n'");
  header('Location: ../news.php');
?>
