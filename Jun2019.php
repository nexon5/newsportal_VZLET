<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/collection.css">
    <title>Май-июнь 2019</title>
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
            <li id="222">Добро пожаловать, <?php  echo $user ?> </li>

      </ul>
      </div>

      <div class="content">
        <h1><i><b>Май-июнь 2019</b></i></h1>

         <iframe
         src="https://docs.google.com/viewer?url=https://res.cloudinary.com/profkomstud/image/upload/v1560143586/newspaper/2019-05.pdf&embedded=true" name="МАРТ 2020" ></iframe>
      </div>


    </article>
  </body>
</html>
