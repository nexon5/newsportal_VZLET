<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/collection.css">
    <link rel="stylesheet" href="css/spis.css">
    <title>Выпуски</title>
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

        include 'php/connect.php';
        connectDB();

        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

        $rows = mysqli_num_rows($result);


        // $listUsers = mysqli_fetch_assoc($result);
        //
        // print_r($listUsers);


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
        <h1><i><b>СПИСОК ПОЛЬЗОВАТЕЛЕЙ</b></i></h1>

        <?php
        echo "<ol class='ball'>";
        $n=0;
         while ($n < $rows){

         $row = mysqli_fetch_row($result);
          echo "<li><a href='otherInfo.php?id=$row[0]&name=$row[1]'>$row[1]</a></li>";
        $n++;

         }
         echo "</ol>";
         ?>


        <!-- <ol class="ball">
        <li>admin</li>
        <li>test</li>
        <li><a href="Sep2019.php">Сентябрь-октябрь 2019</a></li>
        <li><a href="Jun2019.php">Май-июнь 2019</a></li>
        </ol> -->

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>


    </article>
  </body>
</html>
