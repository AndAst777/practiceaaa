<?php
$ex = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$filename = uniqid() . '.' . $ex;

$location = "uploads/" . $filename;
move_uploaded_file($_FILES['image']['tmp_name'], $location);
$idBook = $_GET['id'];
$data = $_POST;
$name = $_POST['bookName'];
$author =  $_POST['author'];
$at = explode(',', $author);
$deds = $data['author'];
print_r($at[0]);
print_r($at[1]);
for ($i = 0; $i < count($at); $i++) {
    print_r("\nkek: ", $at[$i]);
    echo "\nkek: ", $at[$i];
    $gat  = $at[$i];
}
echo "\nitog: ", $gat, " hahahha       \n";
$genre = $_POST['genre'];
$desc = $_POST['description'];
$year = $_POST['year'];

require 'connect.php';

$books = mysqli_query($connect, "INSERT INTO book (bookID, bookName, image, description, year, genre) VALUES (NULL, '$name', '$filename', '$desc', '$year', '$genre')");
$a = mysqli_query($connect, "SELECT* FROM author WHERE `AuthorName` = '$author'");
$resB = mysqli_query($connect, "SELECT * FROM book");
while ($row = mysqli_fetch_assoc($resB)) {
    $idBook = $row['bookID'];
}
$counter = count($at);

for ($i = 0; $i < $counter; $i += 1) {
    $at[$i] = trim($at[$i]);
    if (mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `author` WHERE `AuthorName` = '$at[$i]'")) == 0) {
        mysqli_query($connect, "INSERT INTO `author` (`AuthorID`, `AuthorName`) VALUES (NULL, '$at[$i]')");
    }
    $res = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `author` WHERE `AuthorName` = '$at[$i]'"));
    $idauthor = $res['AuthorID'];

    var_dump(mysqli_query($connect, "INSERT INTO `bookid` (`id`, `idAuthor`, `bookID`) VALUES (NULL, '$idauthor', '$idBook')"));
}
