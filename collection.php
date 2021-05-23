<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/collection.css">
    <link rel="stylesheet" href="css/spis.css">
    <title>Выпуски</title>
    <style>
 .c {
  border: 1px solid #333; /* Рамка */
  display: inline-block;
  padding: 5px 15px; /* Поля */
  text-decoration: none; /* Убираем подчёркивание */
  color: #000; /* Цвет текста */
}
 .c:hover {
  box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
  background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */
  color: #a00;
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
        <h1><i><b>НАШИ ВЫПУСКИ</b></i></h1>

        <ol class="ball">
        <li><a href="march2020.php">Март 2020</a></li>
        <li><a href="Feb2020.php">Февраль 2020</a></li>
        <li><a href="Sep2019.php">Сентябрь-октябрь 2019</a></li>
        <li><a href="Jun2019.php">Май-июнь 2019</a></li>
        </ol>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <a href="#" class="c">Комментировать</a>
      </div>


    </article>
  </body>
</html>
