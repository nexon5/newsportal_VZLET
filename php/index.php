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

            <button class="btn" type="submit" name = "submit">Enter</button>
          </form>
        </div>
      </div>

<?php
  session_start();
  require('connect.php');

//if (isset($_POST['submit']){
//  echo "123";}

  if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' and password ='$password'";

    $result = mysqli_query($connetion, $query) or die(mysqli_error($connetion));

    $count = mysqli_num_rows($result);

//vardamp ($result);
  $_SESSION['username'] = $username;

    if($count==1) {
      $_SESSION['username'] = $username;
    }else {
      $fmsg = "ERORR";
    }
  }


  if (isset($_SESSION['username'])){
    print("Привет мир!");
    $username = $_SESSION['username'];
    echo "Hello", $username, "";
    echo "Вы вошли";
  }

?>
    </article>
  </body>
</html>
