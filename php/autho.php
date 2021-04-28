<?php
global $connection;
connectDB();

if (isset($_POST['username']) and isset($_POST['password']) ){
 $array = array ();
 $user = $_POST['username'];
 $password = $_POST['password'];

 $query = "SELECT username FROM users WHERE username = '".$user."' and password = '".$password."'";
 $result = mysqli_query($connection, $query) or die(mysql_error($connection));

 $count = mysqli_num_rows($result);

 if ($count == 1){
   $_SESSION['uname'] = $user;
   //header('Location: index.php');
 }
 else {
   $error = "Ошибка";
   echo("<script> alert('Неверное имя или пароль'); </script>");
 //  include('login.php');
 }

}

if (isset($_SESSION['uname'])){
 $user = $_SESSION['uname'];
 echo "Вы ввошли!!";
 echo $user;
 /*if ($user == "admin"){
   header('Location: ../index.php');
 }else{
   header('Location: ../contact.php');
 }*/
 //echo "<a href='logout.php'>LOGOUT</a>";
}
 // echo '<pre>';
 // print_r($_SESSION);
 // echo '</pre>';

?>
