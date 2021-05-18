<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */


    require_once 'connect.php';

    connectDB();

    $id = $_GET['id_i'];

    $product = mysqli_query($connection, "SELECT id_i, title, link, coment FROM info  WHERE id_i='$id'");

    $product = mysqli_fetch_assoc($product);


      if (isset($_POST['title']) && isset($_POST['link'])){

        $title = $_POST['title'];
        $link = $_POST['link'];
        $coment = $_POST['coment'];

        mysqli_query($connection, "UPDATE info SET title = '$title', link = '$link', coment = '$coment' WHERE id_i = '$id'");
        header ('Location: ../myInfo.php');
      }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>

</head>
<body>
    <h3>Update Product</h3>
    <form   method="post">
        <input type="hidden" name="id" value="<?= $product['id_i'] ?>">
        <p>Title</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Link</p>
        <textarea name="link"><?= $product['link'] ?></textarea>
        <p>Coment</p>
        <input type="text" name="coment" value="<?= $product['coment'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
