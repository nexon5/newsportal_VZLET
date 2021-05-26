<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/comm.css">
    <title>Новости</title>
    <style type="text/css">
        .newss {
          padding: 10px;
          text-align: justify;
          font-size: 18px;

        }
  </style>
  </head>
  <body>
        <?php

      session_start();
        $user = $_SESSION['uname'];
        if ($user == ''){
          $user = "Гость";
        }

        $id_n=$_GET['id_news'];

        include 'php/connect.php';

        connectDB();

        $result=mysqli_query($connection, "SELECT * FROM news WHERE id_n='$id_n'");

      $arrResult=mysqli_fetch_assoc($result);

      $result1 = mysqli_query($connection, "SELECT author, textcomm FROM commnews WHERE id_n='$id_n'");



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
        <div class="newss">
<?php

  echo "<h1>$arrResult[title]</h1><br>";

  $text=str_replace("\n","<br>", $arrResult['fullText']);

  echo $text;
  echo "<br><br>";


if($user == 'admin'){
  echo "<a href='php/deleteNews.php?id_n=$id_n'>Удалить новость</a>";

}

 ?>
</div>
      <h2 align="center" style="font-style: normal;"><i>- - - - - - - - - Коментарии  - - - - - - - - - - -</i></h2>
      <?php

      if ($result1){
        $rows1 = mysqli_num_rows($result1); // количество полученных строк

      //
         echo "<table class='comm'>";// ПОДКЛЮЧИТЬ СТИЛИ!!!!!
         while ( $row1 = mysqli_fetch_row($result1)) {

         for ($j = 0 ; $j < 2 ; ++$j) {
           if ($j == 0){
          echo "<tr>";
            echo "<td class='author'><span class='authorSpan'>$row1[0]</span></td>";
            echo "</tr>";
          } else {
            echo "<tr>";
            echo "<td class='comment'><span='SPUN'>$row1[1]</span></td>";
            echo "</tr>";

          }

         }


      }
      echo "</table>";

      }

      if(isset($_POST['nickname']) && !empty($_POST['text'])){
        $textcomm = $_POST['text'];
        mysqli_query($connection,"INSERT INTO commnews (id_n, author, textcomm) VALUES ('$id_n', '$user', '$textcomm')");
        header("Location: newsBig.php?id_news=$id_n");
      }

 ?>

 <form class="commForm" method="post">
<table class="commTable" cellspacing="0" cellpadding="4">
<tr>
<td align="right" width="100" >Имя</td>
<td><input type="text" name="nickname" maxlength="50" size="35" value="<? echo $user; ?>"></td>
</tr>
<tr>
<td align="right" valign="top">Комментарий</td>
<td><textarea name="text" cols="75" rows="10" required></textarea></td>
</tr>
<tr>
<td></td>
<td><button class="c-button" type="submit" >Добавить комментарий</button></td>
</tr>
</table>
<br><br><br><br><br>
      </div>
    </article>
  </body>
</html>
