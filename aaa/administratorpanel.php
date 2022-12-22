<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/adminpanel.css">
    <title>Admin Panel</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="nub">
        <h2 class="admin">Админ панель</h2>
    </div>
    <form action="admin.php" method="POST" enctype="multipart/form-data" class="form">
        <input type="hidden" name="id" class="id">
        <input type="text" class="name_book" name="bookName" placeholder="Название книги">
        <input type="text" class="name_author" name="author" placeholder="Имя автора">
        <input type="text" class="genre" name="genre" placeholder="Жанр">
        <input type="file" name="image" class="inImage" id="file">
        <input type="text" placeholder="Год выпуска" class="year" name="year">
        <textarea name="description" placeholder="Описание книги" class="desc"></textarea>

        <button class="submit" id="addBut" type="submit">Добавить</button>
    </form>
    <br>
    <div class="admin_conclusion" id="admin_cont">
    </div>
    <script src="/js/main.js"></script>
    <script src="/js/deleteBook.js"> </script>
</body>

</html>