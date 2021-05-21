
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/spis.css">
    <link rel="stylesheet" href="css/infoUser.css">
    <link rel="stylesheet" href="css/comm.css">
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

    $id = $_GET['id'];
    //====================================РАБОТА С БД===========================================
      include "php/connect.php";
      connectDB();
     //  if ($connection->connect_error) {
     //   die("Connection failed: " . $connection->connect_error);
     // }
     // echo "Connected successfully";

     // $query1="SELECT id_users FROM users WHERE username='$user'";//Запрос на вывод ид из БД
     // $result = mysqli_query($connection, $query1);//Запуск запроса
     // $array_USERS = mysqli_fetch_assoc($result);//Образование массива с резултатом ид
     // $id_user = $array_USERS['id_users'];// Запись в переменную id_users авторизованного пользователя

     $query2="SELECT id_i, title, link, username, coment FROM info INNER JOIN users on id_usersInfo=id_users WHERE id_usersInfo='$id'";//Display table users
     $result = mysqli_query($connection, $query2);

     if ($result){
       $rows = mysqli_num_rows($result); // количество полученных строк


        echo "<table class='infoUser'><tr><th class='firstP'>Заголовок</th><th>Ссылка</th><th>АВТОР</th><th class='lastP'>Комментарий</th></tr>";// ПОДКЛЮЧИТЬ СТИЛИ!!!!!
        while ( $row = mysqli_fetch_row($result)) {
          echo "<tr>";
        for ($j = 1 ; $j < 5 ; ++$j) {
          if($j == 2){
            echo "<td><a href='$row[$j]'>$row[$j]</td>";
          }
          else {echo "<td>$row[$j]</td>";}
        }

        echo "</tr>";
}
        echo "</table>";

     }
     $name = $_GET['name'];
     //=========================================================Comment========================================================
     $comResult = mysqli_query($connection,"SELECT usname, textcomm FROM comm WHERE id_us='$id'");
      ?>



      <br><br><br>
      <h2 align="center" style="font-style: normal;"><i>- - - - - - - - - Отзывы о пользователе <?php echo $name; ?> - - - - - - - - - - -</i></h2>
      <?php

      if ($comResult){
        $rows1 = mysqli_num_rows($comResult); // количество полученных строк

 //
         echo "<table class='comm'>";// ПОДКЛЮЧИТЬ СТИЛИ!!!!!
         while ( $row1 = mysqli_fetch_row($comResult)) {

         for ($j = 0 ; $j < 2 ; ++$j) {
           if ($j == 0){
          echo "<tr>";
            echo "<td class='author'><span class='authorSpan'>$row1[0]</span></td>";
            echo "</tr>";
          } else {
            echo "<tr>";
            echo "<td class='comment'><span='SPUN'>$row1[1]</span></td>";
            echo "</tr>";

          }

         }


 }
echo "</table>";

      }

      if(isset($_POST['nickname']) && !empty($_POST['text'])){
        $textcomm = $_POST['text'];
        mysqli_query($connection,"INSERT INTO comm (id_us, usname, textcomm) VALUES ('$id', '$user', '$textcomm')");
        header("Location: otherInfo.php?id=$id&name=$name");
      }

       ?>

       <form class="commForm" method="post">
   <table class="commTable" cellspacing="0" cellpadding="4">
    <tr>
     <td align="right" width="100" >Имя</td>
     <td><input type="text" name="nickname" maxlength="50" size="35" value="<? echo $user; ?>"></td>
    </tr>
    <tr>
     <td align="right" valign="top">Комментарий</td>
     <td><textarea name="text" cols="75" rows="10" required></textarea></td>
    </tr>
    <tr>
     <td></td>
     <td><button class="c-button" type="submit" >Добавить комментарий</button></td>
    </tr>
   </table>
   <br><br><br><br><br>
      </div>


    </article>
  </body>
</html>
