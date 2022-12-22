<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Book.ru</title>
</head>

<body>
    <header>
        <div class="header">
            <img class="logotipe" src="img/book2.png">
            <p class="logo-text">BOOK.RU</p>
            <p class="phone-number">8(800) 420-0-420-круглосуточно</p>
            <p class="feedback">Обратная связь</p>
        </div>
        <div class="panel-navigation">
            <input type="search" id="livesearch" placeholder="Искать...">
            <nav>
                <ul id="navbar">
                    <li>
                        <a class="catalog" href="#">Гарантии</a>
                    </li>
                    <li>
                        <a class="blog" href="#">Бонусы</a>
                    </li>
                    <li>
                        <a class="profile" href="autorization.php">Войти</a>
                    </li>
                </ul>
            </nav>

        </div>
        </div>

        <?php
    require "connect.php";
    $sql = "SELECT * FROM book";
    $sql2 = "SELECT * FROM author";
    $q = mysqli_query($connect, $sql);
    $q2 = mysqli_query($connect, $sql2);

    while ($row = mysqli_fetch_assoc($q) and $row_two = mysqli_fetch_assoc($q2)) { ?>

        <div class="book" >
            <img src="uploads/<?= $row['image'] ?>" alt="" style="width: 15vw;">
            <p><?= $row['bookName'] ?></p>
            <p><?= $row_two['AuthorName'] ?></p>
        </div>
    <?php
    }
    ?>




        <div class="result" id="searchresult"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#livesearch").keyup(function() {
                    var input = $(this).val();
                    //alert(input); 
                    if (input != "") {
                        $("#searchresult").css("display", "block");
                        $.ajax({
                            url: "livesearch.php",
                            method: "POST",
                            data: {
                                input: input
                            },
                            success: function(data) {
                                $("#searchresult").html(data);
                            }
                        });
                    } else {
                        $("#searchresult").css("display", "none");
                    }
                });
            });
        </script>



</body>

</html>