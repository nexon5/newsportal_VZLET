<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Registration</title>
  </head>
  <body>
    <header>
      <img class="logo" src="../attach/1.jpg" >
<a href="repath.php"><img class="exitpic" src="../attach/exit.png"></a>
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


<?php
// global $connection;
include "connect.php";
// $conn = new mysqli("localhost", "root", "root", "owndatabase");
connectDB();


$sql = "SELECT * FROM users";//ПРОВЕРКА
   $result = mysqli_query($connection, $sql);//ПРОВЕРКА

 // $row = mysqli_fetch_assoc($result);//ПРОВЕРКА
 //            print_r($row);//ПРОВЕРКА


        if (isset($_POST['username']) && isset($_POST['password'])){
          $username = $_POST['username'];
          $password = $_POST['password'];

          $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
          $result = mysqli_query($connection, $query);



        }

 ?>




      <div class="content">
        <div align="center" class="forma">
          <h1> Регистация</h1>
          <br><br>
          <form  id="content" method="POST">
            <fieldset>
            <label for="username">Введите Ваш никнейм:</label>
            <input type="text" name="username"  required>
            <br>
            <label for="Email">Введите Вашу почту:</label>
            <input type="text" name="Email"  required>
            <br>
            <label for="password">Введите Ваш пароль:</label>
            <input type="password" name="password"  required>
          </fieldset>
          <br>
            <button class="btn" type="submit" >Зарегистрироваться</button>
                        <br>
          </form>
        </div>
        <br><br><br><br><br><br><br><br>
      </div>

    </article>
  </body>
</html>
