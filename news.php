<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Главная страница</title>
  </head>
  <body>



        <?php

      session_start();
        $user = $_SESSION['uname'];
        if ($user == ''){
          $user = "Гость";
        }

        include 'php/connect.php';

        connectDB();

        $result=mysqli_query($connection, "SELECT * FROM news");

        $arrResult=mysqli_fetch_assoc($result);



        ?>


    <header>
      <img class="logo" src="attach/1.jpg" >
<a href="php/login.php"><img class="exitpic" src="attach/exit.png"></a>
    </header>
    <article class="main">
      <div class="menu">
        <ul class="navbar">
          <li><a href="index.php">Главная</a></li>
          <li><a href="news.php">Новости</a></li>
          <li><a href="party.php">Состав</a></li>
          <li><a href="collection.php">Выпуски</a></li>
          <li><a href="contact.php">Набор</a></li>
          <li><a href="personal.php">Личный кабинет</a></li>
            <li id="222">Добро пожаловать, <?php  echo $user ?> </li>

      </ul>
      </div>
<style>
</style>
      <div class="content">
<?php
    print_r($arrResult);
    echo "<table>";

      while ($row = mysqli_fetch_row($result)) {
        // echo "<tr>"
      for ($j = 1 ; $j < 4 ; ++$j) {
     echo "<tr> <td>$row[1]</td> <td>$row[3]</td></tr>";} }

     echo "</table>";


 ?>
      </div>
    </article>
  </body>
</html>
