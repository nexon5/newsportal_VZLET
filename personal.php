<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/spis.css">
    <title>Личный кабинет</title>
  </head>
  <body>

    <?php

  session_start();


    $user = $_SESSION['uname'];
    echo $user;
    if ($user == ''){
      $user = "Гость";
    }



    if ($user == "Гость") {
      header ('Location: php/login.php' );
    }
    $a="IVAN";
    ?>


    <header>
      <img class="logo" src="attach/1.jpg" >
      <a href="php/repath.php"><img class="exitpic" src="attach/exit.png"></a>
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

      <div class="content">
        <h1><i>Добро пожаловать в личный кабинет, <?php echo $user  ?>!!! </i></h1>
        <?php
        echo "<ul class='ball'>
          <li><a href=myInfo.php?name=$user>Открыть мой профиль</a></li>
          <li><a href='usersList.php'>Посмотреть профиль других пользователей</a></li>
          <li><a href='chat.php'>Общение с администрацией</a></li>
      </ul>"
         ?>


      </div>


    </article>
  </body>
</html>
