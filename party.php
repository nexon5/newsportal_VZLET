<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">

    <link rel="stylesheet" href="css/party.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Состав</title>
  </head>
  <body>
    <?php

  session_start();


// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
//
//   session_destroy();
//     //unset($_SESSION['uname']);



    $user = $_SESSION['uname'];
    if ($user == ''){
      $user = "Гость";
    }
    ?>
    <header>
      <img class="logo" src="attach/1.jpg">
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
        <H1>НАША КОМАНДА</H1>
        <center>
        <table>
          <tr>
            <td><img class="img1" src="attach/Glavred.jpg" alt=""></td>
            <td><b>Главный редактор:</b>
            <br>Юлия Перепелица</td>
          </tr>
          <tr>
            <td><img class="img2" src="attach/3.jpg" alt=""></td>
            <td><b>Помощник редактора:</b>
            <br>Дмитрий Лычагин</td>
          </tr>
          <tr>
            <td><img class="img3" src="attach/igor.jpg" alt=""></td>
            <td><b>Журналист:</b>
            <br>Игорь Фурниченко</td>
          </tr>
          <tr>
            <td><img class="img4" src="attach/marina.jpg" alt=""></td>
            <td><b>Журналист:</b>
            <br>Марина Авакова</td>
          </tr>
          <tr>
            <td><img class="img5" src="attach/2.jpg" alt=""></td>
            <td><b>Художник:</b><br>
            Алексей Мацак</td>
          </tr>
          </table>
          </center>
      </div>


    </article>
  </body>
</html>
