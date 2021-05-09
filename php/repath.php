<?php
  session_start();
  $user = $_SESSION['uname'];
  if ($user == ''){
    $user = "Гость";
  }


if ($user != "Гость") {
  header ('Location: logout.php' );
} else {
  header ('Location: login.php' );
}

 ?>
