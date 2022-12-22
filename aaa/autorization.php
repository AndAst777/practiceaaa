<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/autorisation.css">
    <title>Document</title>
</head>

<body>

    <h1 class="auto">Авторизация</h1>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error"><?php echo $_SESSION['error']; ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <form action="autocheck.php" method="post">

        <input type="text" placeholder="Логин" class="login" name="login">
        <br />
        <input ype="password" placeholder="Пароль" class="password" name="password">

        <button class="sumbit" type="submit">Войти</button>

        <?php

        ?>
    </form>
    <a class="arrow-1" href="/index.php">
        <div></div>
    </a>
</body>

</html>