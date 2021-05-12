
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/spis.css">
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
        echo 'Привет, ' . htmlspecialchars($_GET["name"]) . '!';
        ?>
    <?php
    //====================================РАБОТА С БД===========================================
      include "php/connect.php";
      connectDB();
      if ($connection->connect_error) {
       die("Connection failed: " . $connection->connect_error);
     }
     echo "Connected successfully";

     $query1="SELECT id_users FROM users WHERE username='$user'";//Запрос на вывод ид из БД
     $result = mysqli_query($connection, $query1);//Запуск запроса
     $array_USERS = mysqli_fetch_assoc($result);//Образование массива с резултатом ид
     $id_user = $array_USERS['id_users'];// Запись в переменную id_users авторизованного пользователя

     $query2="SELECT title, link, username FROM info INNER JOIN users on id_usersInfo=id_users WHERE id_usersInfo='$id_user'";
     $result = mysqli_query($connection, $query2);

      // $arrayResult = mysqli_fetch_assoc($result);
      // print_r($arrayResult);
      // $arrayResult = mysqli_fetch_assoc($result);
      // print_r($arrayResult);

     if ($result){
       $rows = mysqli_num_rows($result); // количество полученных строк


        echo "<table><tr><th>Заголовок</th><th>Ссылка</th><th>АВТОР</th></tr>";// ПОДКЛЮЧИТЬ СТИЛИ!!!!!
        while ($row = mysqli_fetch_row($result)) {
          echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) {

          echo "<td>$row[$j]</td>";
        }
          echo "<td><a href='#'> UPDATE</td>";
          echo "<td><a href='#'> DELETE</td>";
        echo "</tr>";
}
        echo "</table>";
     }


      ?>
      <form action="php/createNew.php"  method="POST">
        <fieldset>
        <label for="username">Заголовок:</label>
        <input type="text" name="title"  required>
        <br>
        <label for="Email">Ссылка:</label>
        <input type="text" name="link"  required>
        <br>
        <label for="password">Комментарий:</label>
        <input type="text" name="password"  >
      </fieldset>
      <br>
        <button class="btn" type="submit">Добавить</button>
                    <br>
      </form>


      </div>


    </article>
  </body>
</html>
