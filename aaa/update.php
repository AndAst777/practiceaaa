 c<?php
   require 'connect.php';
   $ex = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
   $filename = uniqid() . '.' . $ex;
   $id = $_POST['id'];

   $location = "uploads/" . $filename;
   move_uploaded_file($_FILES['image']['tmp_name'], $location);
   $name = $_POST['bookName'];
   $author = $_POST['author'];
   $genre = $_POST['genre'];
   $desc = $_POST['description'];
   $year = $_POST['year'];


   $res = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `bookid` WHERE `id` = $id"));
   $idbook = $res['bookID'];
   $idAuthor = $res['idAuthor'];

   var_dump(mysqli_query($connect, "UPDATE `book` SET `bookName` = '$name', `image` = '$filename', `description` = '$desc', `year` = $year, `genre` = '$genre' WHERE `book`.`bookID` = '$idbook'"));
   mysqli_query($connect, "UPDATE `author` SET `AuthorName` = '$author' WHERE `author`.`AuthorID` = '$idAuthor'");

   // 
   header("Location: administratorpanel.php");
