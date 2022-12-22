<?php
require "connect.php";
if (isset($_POST['delete_id'])) {
   $id = $_POST['delete_id'];
   $query2 = "SELECT * FROM `bookid` WHERE `id` = $id";
   $sql2 = mysqli_query($connect, $query2);
   $sqli = mysqli_fetch_assoc($sql2);
   $bookID = $sqli['bookID'];
   $resp = mysqli_query($connect, "SELECT * FROM `bookid` WHERE `bookID` = '$bookID'");
   $imgr = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM book WHERE `book`.`bookID` = '$bookID'"));
   while ($post = mysqli_fetch_assoc($resp)) {
      $arr[] = $post['AuthorID'];
      mysqli_query($connect, "DELETE FROM bookid WHERE `bookid`.`bookID` = '$bookID'");
   }
   mysqli_query($connect, "DELETE FROM book WHERE `book`.`bookID` = $bookID");
} else {
   echo "error";
}




