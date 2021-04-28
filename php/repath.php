<?php
  session_start();
  $user = $_SESSION['uname'];


if ($user == "admin") {
  header ('Location: logout.php' );
} else {
  header ('Location: login.php' );
}

 ?>
