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
        .subscribe{
          height: 500px;
          width: 500px;
          margin: 250px,auto,auto,auto;

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


        include 'php/connect.php';
        connectDB();


        if (isset($_POST['name']) && isset($_POST['adress'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
        $adress = $_POST['adress'];
        $email = $_POST['email'];
        $period =$_POST['period'];
        $sub = $_POST['subMail'];
        $phone = $_POST['phone'];

        $query = "INSERT INTO subscribe (name, surname, patronymic , adress , email ,phone, period , sub )  VALUES ('$name', '$surname', '$patronymic', '$adress', '$email','$phone' ,'$period', '$sub')";
       mysqli_query($connection, $query);

      unset($_POST);
      header('Location: anketa.php');
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
        <div class="subscribe">
          <form class="sb" method="post">
                <table class="sub" cellspacing="0" cellpadding="4">
                       <tr>
                          <td align="right" width="100" >Имя</td>
                          <td><input type="text" name="name" maxlength="50" size="35" ></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Фамилия</td>
                          <td><input type="text" name="surname" maxlength="50" size="35" ></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Отчество</td>
                          <td><input type="text" name="patronymic" maxlength="50" size="35" ></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Адресс</td>
                          <td><input type="text" name="adress" maxlength="50" size="35"></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Email</td>
                          <td><input type="text" name="email" maxlength="50" size="35" ></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Телефон:</td>
                          <td><input type="text" name="phone" maxlength="50" size="35" ></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Оформить на 3 месяца</td>
                          <td><input type="radio" name="period" value="3 месяца" maxlength="50" size="35" ></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Один выпуск</td>
                          <td><input type="radio" name="period" value="Один выпуск" maxlength="50" size="35"></td>
                       </tr>
                       <tr>
                          <td align="right" width="100" >На год</td>
                          <td><input type="radio" name="period" value="Годовая подписка" maxlength="50" size="35" ></td>
                       </tr>
                       <tr>
                          <td align="right" valign="top">Получать уведомления</td>
                          <td><input type="checkbox" name="subMail"  checked></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><button class="c-button" type="submit" >Оформить</button></td>
                     </tr>
                </table>
        </div>
      </div>


    </article>
  </body>
</html>
