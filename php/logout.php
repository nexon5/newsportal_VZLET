<?php
  session_start();
  session_destroy();
//  unset($_SESSION['uname']);
  $_SESSION['uname']="Гость";
  header ('Location: ../index.php' );
 ?>
