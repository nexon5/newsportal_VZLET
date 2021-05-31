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
 .c {
  border: 1px solid #333; /* Рамка */
  display: inline-block;
  padding: 5px 15px; /* Поля */
  text-decoration: none; /* Убираем подчёркивание */
  color: #000; /* Цвет текста */
}
 .c:hover {
  box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
  background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */
  color: #a00;
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
    
        if (isset($_POST['lang']) && isset($_POST['age'])){
        $lang = $_POST['lang'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $array = $_POST['topic'];
        $topic = implode(", ",$array);
        $prof = $_POST['prof'];
        $worldP = $_POST['WorldP'];
        $education =$_POST['Education'];

        $sql = "INSERT INTO anketa ( lang, age, sex, topic, prof, WorldP, education)
                                VALUES ( '$lang', '$age', '$sex', '$topic', '$prof', '$worldP', '$education')";
                                mysqli_query($connection, $sql);
                                unset($_POST);
                                echo "<script>alert('SPASIBO!')</script>";
                                header('Location: index.php');
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
          <form class="" method="post">
                <table class="" cellspacing="0" cellpadding="4">
                       <tr>
                          <td align="right" width="100" >На каком языке Вы говорите в повседневной жизни?</td>
                          <td><input type="radio" name="lang" value="Rus" >Русский</input><br><input type="radio" name="lang" value="UA" maxlength="50" size="35" >Украинский</input>
                            <br><input type="radio" name="lang" value="Both" >Оба</input>
                          </td>
                       </tr>
                       <tr>
                         <td align="right" width="100" >Выберите Ваш возраст</td>
                         <td><input type="radio" name="age" value="<18" >Меньше 18</input><br>
                           <input type="radio" name="age" value="18..30">18..30</input>
                           <br> <input type="radio" name="age" value="31..60">31..60</input>
                           <br> <input type="radio" name="age" value=">60"> Больше 60</input>
                         </td>
                       </tr>
                       <tr>
                         <td align="right" width="100" >Выберите Ваш пол:</td>
                         <td><input type="radio" name="sex" value="male" >Мужской</input><br>
                           <input type="radio" name="sex" value="female">Женский</input>
                       </tr>
                       <tr>
                         <td align="right" >Интересущие вас темы:</td>
                         <td><input type="checkbox" name="topic[]" value="Наука" >Наука </input><br>
                         <input type="checkbox" name="topic[]" value="Спорт" >Спорт </input><br>
                         <input type="checkbox" name="topic[]" value="История" >История </input><br>
                         <input type="checkbox" name="topic[]" value="Философия" >Философия </input><br>
                         <input type="checkbox" name="topic[]" value="Техника" >Техника </input><br>
                       </td><br>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Занятость</td>
                          <td><input type="radio" name="prof" value="student" >Студент</input><br>
                            <input type="radio" name="prof" value="gosduty" >Гос чиновник</input><br>
                            <input type="radio" name="prof" value="gosduty" >Научная или преподавательская деятельность</input><br>
                            <input type="radio" name="prof" value="Other" >Другое</input><br>
                          </td>
                       </tr>
                       <tr>
                         <td align="right" width="100" >Вас интиресуют новсти мировой политики:</td>
                         <td><input type="radio" name="WorldP" value="stylesheet" >Да</input><br>
                           <input type="radio" name="WorldP" value="No">Нет</input>
                       </tr>
                       <tr>
                          <td align="right" width="100" >Ваше образование:</td>
                          <td><input type="radio" name="Education" value="Высшее" >Высшее</input><br>
                            <input type="radio" name="Education" value="Среднее" >Среднее</input><br>
                            <input type="radio" name="Education" value="Начальное" >Начальное</input><br>
                            <input type="radio" name="Education" value="Другое" >Другое</input><br>
                          </td>
                       </tr>
                       <tr>
                          <td></td>
                          <td><button class="c-button" type="submit" >Отправить</button></td>
                     </tr>
                </table>
        </div>
      </div>


    </article>
  </body>
</html>
