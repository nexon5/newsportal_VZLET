<?php
  include 'connect.php';
  connectDB();
 print_r($_POST);
            $title = $_POST['title'];
            $news = $_POST['news'];
            $fullText = $_POST['fullText'];
            $date = $_POST['date'];
            $author = $_POST['author'];
        mysqli_query($connection,"INSERT INTO `news` (`id_n`, `title`, `news`, `fullText`, `author`, `datee`) VALUES (NULL, '$title', '$news', '$fullText', '$author', '$date');");
        header('Location: ../news.php');
 ?>
