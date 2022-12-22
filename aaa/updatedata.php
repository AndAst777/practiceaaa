<?php
require 'connect.php';


$id = $_GET['id'];
$res = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `bookid` WHERE `id` = '$id'"));
$idbook = $res['bookID'];
$idAuthor = $res['idAuthor'];
$bookline = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `book` WHERE `bookID`= '$idbook'"));
$authorline =  mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `author` WHERE `AuthorID`= '$idAuthor'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновление значений</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>




    <form action="update.php" method="POST" enctype="multipart/form-data" class="form">
        <input type="hidden" name="id" value="<?= $id ?>">
        <br><br>
        <input type="text" class="name_book" name="bookName" value="<?= $bookline['bookName'] ?>"><br><br>
        <input type="text" class="name_author" name="author" value="<?= $authorline['AuthorName'] ?>"><br><br>
        <input type="text" class="genre" name="genre" value="<?= $bookline['genre'] ?>"><br><br>
        <input type="file" name="image" class="inImage" id="image" value="<?= $bookline['image'] ?>"><br><br>
        <input type="text" class="year" name="year" value="<?= $bookline['year'] ?>"><br><br>
        <textarea name="description" class="desc"><?= $bookline['description'] ?></textarea><br><br>

        <button class="submit" id="addBut" type="submit">Обновить</button>

    </form>

</body>

</html>