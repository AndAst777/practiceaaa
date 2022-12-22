<link rel="stylesheet" href="/assets/nonstyle.css">
<?php
require "connect.php";
$book = "SELECT bookid.id AS id, book.bookName AS 'bookName', author.AuthorName AS 'AuthorName', book.image AS 'image', book.description AS 'description', book.year AS 'year', book.genre AS 'genre' FROM bookid LEFT JOIN author ON (author.AuthorID = bookid.idAuthor) LEFT JOIN book ON (book.bookID = bookid.bookID);";
$iddd = "SELECT * FROM book";
$totamhein = mysqli_query($connect, $iddd);
$dd = "SELECT * FROM bookid";
$crazy = mysqli_query($connect, $dd);

$query = mysqli_query($connect, $book);
while ($bdquery = mysqli_fetch_assoc($query)) {
?>
    <div class="g">
        <input type="hidden" id="del<?= $bdquery['id'] ?>" name="id" value="<?= $bdquery['id'] ?>">
        <img class="catIMG" src="uploads/<?= $bdquery['image'] ?>" width="200">

        <p class="catName"><?= $bdquery['bookName'] ?></p>
        <p><?= $bdquery['AuthorName']; ?></p>
        <a class="upd" href="updatedata.php">Обновить</a><br>
        <button onclick="deleteBook(<?= $bdquery['id'] ?>)" class="delete">Удалить</button>




    </div>

<?php
}

?>