<?php
include 'connect.php';
session_start();
$user = $_SESSION['uname'];
connectDB();

$query1="SELECT id_users FROM users WHERE username='$user'";//Запрос на вывод ид из БД
$result = mysqli_query($connection, $query1);//Запуск запроса
$array_USERS = mysqli_fetch_assoc($result);//Образование массива с резултатом ид
$id_user = $array_USERS['id_users'];// Запись в переменную id_users авторизованного пользователя

echo $id_user;


 if (isset($_POST['title']) && isset($_POST['link'])){
   $title = $_POST['title'];
   $link = $_POST['link'];

   $addQuery = "INSERT INTO info (id_usersInfo, title, link) VALUES ('$id_user', '$title', '$link')";
    mysqli_query($connection, $addQuery);
    header('Location: ../myInfo.php');
  }
?>
