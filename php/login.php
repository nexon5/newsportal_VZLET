<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Logining</title>
  </head>
  <body>
    <header>
      <img class="logo" src="../attach/1.jpg" >
<a href="reg.html"><img class="exitpic" src="../attach/exit.png"></a>
    </header>
    <article class="main">
      <div class="menu">
        <ul class="navbar">
          <li><a href="../index.php">Главная</a></li>
          <li><a href="../news.php">Новости</a></li>
          <li><a href="../party.php">Состав</a></li>
          <li><a href="../collection.php">Выпуски</a></li>
          <li><a href="../contact.php">Набор</a></li>
            <li id="222">Добро пожаловать, <?php  echo $user ?> </li>
      </ul>
      </div >

      <div class="content">
        <div align="center" class="forma">
          <h1> Авторизация</h1>
          <br><br>
          <form  id="content" method="POST">
            <fieldset>
<label for="username">Ваш никнейм</label>
            <input type="text" name="username"  required>
            <br><label for="password">Пароль</label>
            <input type="password" name="password"  required>
</fieldset>
<br>
            <button class="btn" type="submit" >Войти</button>
            <br>
          </form>
        </div>
        <br><br><br><br><br><br><br><br>
      </div>

<?php
session_start();
require_once "connect.php";
require_once "autho.php"
?>
    </article>
  </body>
</html>
