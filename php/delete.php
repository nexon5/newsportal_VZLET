<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'connect.php';

    connectDB();
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';
    $id = $_GET['id_i'];


   mysqli_query($connection, "DELETE FROM `info` WHERE `info`.`id_i` = '$id'");

header ('Location: ../myInfo.php' );

  //  $product = mysqli_fetch_assoc($product);
?>
