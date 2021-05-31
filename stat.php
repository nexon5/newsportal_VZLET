<?php

    session_start();





    $user = $_SESSION['uname'];

    if ($user == ''){
      $user = "Гость";
    }

    include 'php/connect.php';

    connectDB();
    $result = mysqli_query($connection, "SELECT * FROM anketa");
    $countFemale=0;
    $countMale=0;
    $countRus=0;
    $countUA=0;
    $countBoth=0;
    $count3160=0;
    $other=0;
    $higher=0;
    $middle=0;
    $begginer=0;
    $roz= mysqli_fetch_array($result);
 print_r($roz);

//==============================

      while ($row = mysqli_fetch_array($result)){

        for($i=1; $i<8; $i++){
          if($i==1){

              if ($row[1]=='Rus'){ $countRus++;}
              elseif ($row[1]=='UA') { $countUA++;   }
              else {$countBoth++; }
            }
            elseif ($i==2) {
                  if ($row[2]=='<18') {
                    $countLessThen18++;
                  }
                  elseif ($row[2]=='18..30') {
                    $count1830++;
                  }
                  elseif ($row[2]=='31..60') {
                    $count3160++;
                  }
                  else{
                    $morethen60++;
                  }
            }
            elseif ($i==3){

                  if($row[3] == 'male'){// ОБРАБОТКА ПОЛА
                    $countMale++;
                  }
                 else {$countFemale++;}

            }
            elseif ($i==6) {
                  if($row[6] == 'No'){// ОБРАБОТКА ПОЛА
                    $No++;
                  }
                 else {$Yes++;}
            }
            elseif ($i==7) {

                  if ($row[7]=='Высшее') {
                    $higher++;
                  }
                  elseif ($row[7]=='Среднее') {
                    $middle++;
                  }
                  elseif ($row[7]=='Начальное') {
                    $beginner++;
                  }
                  else{
                    $other++;
                  }

            }



        }
     }




?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Главная страница</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Sex', 'Count'],
        <?php
            echo "['Мужчин', $countMale],['Женщин', $countFemale]";
         ?>
      ]);

      var options = {
        title: 'Пол подписчиков'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }

</script>



<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Sex', 'Count'],
    <?php
        echo "['Русский', $countRus],['Украинский', $countUA], ['Оба',$countBoth]";
     ?>
  ]);

  var options = {
    title: 'Выбор языков'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

  chart.draw(data, options);

}
</script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Sex', 'Count'],
    <?php
        echo "['Меньше 18', $countLessThen18],['От 18 до 30', $count1830], ['От 31 до 60', $count3160], ['Больше 60', $morethen60]";
     ?>
  ]);

  var options = {
    title: 'Выбор языков'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

  chart.draw(data, options);

}
</script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Sex', 'Count'],
    <?php
        echo "['Высшее', $higher],['Среднее', $middle], ['Начальное', $beginner], ['Другое', $other]";
     ?>
  ]);

  var options = {
    title: 'Выбор языков'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

  chart.draw(data, options);

}
</script>
  </head>
  <body>
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
              <div id="piechart" style="width: 900px; height: 500px;"></div>
              <div id="piechart2" style="width: 900px; height: 500px;"></div>
              <div id="piechart3" style="width: 900px; height: 500px;"></div>
              <div id="piechart4" style="width: 900px; height: 500px;"></div>
      </div>


    </article>
  </body>
</html>
