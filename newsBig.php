<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Новости</title>
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
 //    echo "<table class=''>";// ПОДКЛЮЧИТЬ СТИЛИ!!!!!
 //    while ( $row1 = mysqli_fetch_row($result)) {
 //
 //    for ($j = 1 ; $j < 6 ; ++$j) {
 //      if ($j == 1){
 //     echo "<tr>";
 //       echo "<td class=''><span class='authorSpan'>$row1[1] </span></td>";
 //       echo "</tr>";
 //     }
 //      if ($j==3){
 //        echo "<tr>";
 //        echo "<td class='' colspan='2'><span='SPUN'>$row1[3]</span></td>";
 //        echo "</tr>";
 //      }
 //      if ($j==4) {
 //       echo "<tr>";
 //       echo "<td class=''><span='SPUN'>$row1[4]</span></td>";
 //       echo "</tr>";
 //
 //    }
 //    if ($j==5) {
 //     echo "<tr>";
 //     echo "<td class=''><span='SPUN'>$row1[5]</span></td>";
 //     echo "</tr>";
 //
 //  }
 //    }
 //
 //
 // }
 // echo "</table>";

  echo "<h1>$arrResult[title]</h1>";

  $text=str_replace("\n","<br>", $arrResult['fullText']);

  echo $text;



if($user == 'admin'){
  echo "<a href='php/deleteNews.php?id_n=$id_n'>Удалить новость</a>";

}

 ?>
      </div>
    </article>
  </body>
</html>
