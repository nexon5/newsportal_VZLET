
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/spis.css">
    <link rel="stylesheet" href="css/infoUser.css">
    <title>Личный кабинет</title>

  </head>
  <body>

    <?php

  session_start();


    $user = $_SESSION['uname'];
    if ($user == ''){
      $user = "Гость";
    }



    if ($user == "Гость") {
      header ('Location: php/login.php' );
    }
    //$user = $_GET['name'];
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
        <h1><i>Добро пожаловать в личный кабинет, <?php echo $user  ?>!!! </i></h1>


    <?php
    //====================================РАБОТА С БД===========================================
      include "php/connect.php";
      connectDB();
     //  if ($connection->connect_error) {
     //   die("Connection failed: " . $connection->connect_error);
     // }
     // echo "Connected successfully";

     $query1="SELECT id_users FROM users WHERE username='$user'";//Запрос на вывод ид из БД
     $result = mysqli_query($connection, $query1);//Запуск запроса
     $array_USERS = mysqli_fetch_assoc($result);//Образование массива с резултатом ид
     $id_user = $array_USERS['id_users'];// Запись в переменную id_users авторизованного пользователя

     $query2="SELECT id_i, title, link, username, coment FROM info INNER JOIN users on id_usersInfo=id_users WHERE id_usersInfo='$id_user'";
     $result = mysqli_query($connection, $query2);

      // $arrayResult = mysqli_fetch_assoc($result);
      // print_r($arrayResult);
      // $arrayResult = mysqli_fetch_assoc($result);
      // print_r($arrayResult);

     if ($result){
       $rows = mysqli_num_rows($result); // количество полученных строк


        echo "<table class='infoUser'><tr><th class='firstP'>Заголовок</th><th>Ссылка</th><th>АВТОР</th><th>Комментарий</th><th class='lastP'>Правка</th></tr>";// ПОДКЛЮЧИТЬ СТИЛИ!!!!!
        while ($row = mysqli_fetch_row($result)) {
          echo "<tr>";
        for ($j = 1 ; $j < 5 ; ++$j) {
          if($j == 2){
            echo "<td><a href='$row[$j]'>$row[$j]</td>";
          }
          else {echo "<td>$row[$j]</td>";}
        }
          echo "<td><a href='php/update.php?id_i=$row[0]'> Изменить <br> <a href='php/delete.php?id_i=$row[0]'> DELETE</td>";
        echo "</tr>";
}
        echo "</table>";
     }


      ?>
      <br><br><br>
      <center>
        <h2>Добавление статьи</h2>
        <a> Если Вы хотите добавить статью, заполните форму ниже: </a>
        </center>
      <form class="addForm" action="php/createNew.php"  method="POST">
        <fieldset>
          <legend><i>Добавить публикацию:</i></legend>
          <!-- <label for="title">Заголовок:</label> -->
          <input type="text" name="title" placeholder="ЗАГОЛОВОК"  required>
          <br>
          <!-- <label for="link">Ссылка:</label> -->
          <input type="text" name="link" placeholder="Ссылка" required>
          <br>
          <!-- <label for="comment">Комментарий:</label> -->
          <input type="text" name="comment" placeholder="Комментарий"  >

        <br>
          <button class="btn1" type="submit">Добавить</button>
                      <br>
        </fieldset>

      </form>


      </div>


    </article>
  </body>
</html>
