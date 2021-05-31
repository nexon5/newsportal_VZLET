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
        <h1><i>Добро пожаловать!</i></h1>
          <p>     Хаёвец, тебя приветствует наш дружный коллектив газеты "Взлёт". Всю необходимую информацию можешь найти на нашем сайте.
            <br> Если хочешь влиться в наш дружный коллектив, то заходи во вкладку "Набор" и отправляй письмо нам на почту. Мы ждём тебя!
            <br><br>
            <br> <i>А пока посмотри наше последнее видео:</i>
          </p>
        <center>  <iframe width="560" height="315"  src="https://www.youtube.com/embed/Uj80rb2CTsA" frameborder="0"
           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
      </div>


    </article>
  </body>
</html>
