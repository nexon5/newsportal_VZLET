<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/main.css">
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
          <li><a href="../index.html">Главная</a></li>
          <li><a href="../news.html">Новости</a></li>
          <li><a href="../party.html">Состав</a></li>
          <li><a href="../collection.html">Выпуски</a></li>
          <li><a href="../contact.html">Набор</a></li>

      </ul>
      </div>

      <div class="content">
        <div class="forma">
          <form   method="POST">
            <h2> Авторизация</h2>
            <input type="text" name="username"  required>
            <input type="password" name="password"  required>

            <button class="btn" type="submit" >Enter</button>
          </form>
        </div>
      </div>

<?php
session_start();
require_once "connect.php";
 global $connection;
 connectDB();

if (isset($_POST['username']) and isset($_POST['password']) ){
  $array = array ();
  $user = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT username FROM users WHERE username = '".$user."' and password = '".$password."'";
  $result = mysqli_query($connection, $query) or die(mysql_error($connection));

  $count = mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION['uname'] = $user;
    //header('Location: index.php');
  }
  else {
    $error = "Ошибка";
    echo("<script> alert('Неверное имя или пароль'); </script>");
  //  include('login.php');
  }

}

if (isset($_SESSION['uname'])){
  $user = $_SESSION['uname'];
  echo "Вы ввошли!!";
  //echo "<a href='logout.php'>LOGOUT</a>";



}

?>
    </article>
  </body>
</html>
