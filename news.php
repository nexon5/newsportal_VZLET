<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/news-style.css">
    <title>Новости</title>
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

        $result=mysqli_query($connection, "SELECT * FROM news ORDER BY datee DESC");
        $count = mysqli_num_rows($result);
      //  $arrResult=mysqli_fetch_assoc($result);



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
        <h1>Новости</h1>
<?php


    echo "<table class='newsTable'>";


    while ( $row1 = mysqli_fetch_row($result)) {

    for ($j = 1 ; $j < 7 ; ++$j) {
      if ($j == 1){
     echo "<tr>";
       echo "<td class='newsZagolovok'><span class='authorSpan'><a href='newsBig.php?id_news=$row1[0]'>$row1[1]</span></td><td class='newsZagolovok' >Автор:<i> $row1[4]</i></td>";
       echo "</tr>";
     }
      if ($j==2){
        echo "<tr>";
        echo "<td class='news-style' colspan='2'><span='SPUN'>$row1[2]</span></td>";
        echo "</tr>";
      }
      if ($j==5) {
       echo "<tr class='dateTR'>";
       echo "<td class='dateNews'><i> Дата написания: $row1[5]</i></td>";
       echo "</tr>";

    }

    }


 }
 echo "</table>";
 ?>

 <?php
  if ($user=='admin'){
    $today = date("m.d.y");

    echo "<div class='conainerForm'>
      <form class='news-adding' action='php/addNews.php'  method='POST'>
        <fieldset>
          <legend><i>Добавить Новость:</i></legend>

          <input type='text' name='title' placeholder='ЗАГОЛОВОК'  required>
          <br>

          <input type='text' class='fch' name='news' placeholder='Аннотация' required>
          <br>

          <textarea type='text' name='fullText' placeholder='Полный текст'  required></textarea>
          <br>


          <input type='date' name='date'>
          <br> <input type='text' name='author' value='admin'>

        <br>
          <button class='c-button' type='submit'>Добавить</button>
                      <br>
        </fieldset>

      </form></div>";
  }

 ?>

      </div>
    </article>
  </body>
</html>
