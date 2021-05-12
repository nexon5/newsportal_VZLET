<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Выпуски</title>
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
        <h1><b><i>Контакты</i></b></h1>

        <p> Если у вас есть пожелания или вы хотите вступить в нашу команду пишите заполняйте форму. Мы ждем ваших сообщений.
          <br> В случае, если вы хотите стать журналистом, пишите в теме "Встуление"!



        <div class="frm">
        <form name="feedback">
          <p><b>ФИО</b></p>
          <input type="text" size="40">
          <p><b>Введите вашу почту</b></p>
          <input type="email" size="40">
          <p><b>Тема</b></p>
          <input type="text" size="40">
          <p><b>Комментарий</b></p>
          <textarea name="comment" cols="40" rows="5"></textarea>
          <br>
          <input type="button" name="submit" value="Отправить">

      </div>
    </div>
        </article>
  </body>
</html>
