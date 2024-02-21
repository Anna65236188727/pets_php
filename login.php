<?php
    session_start();
    include 'connect.php';
    $errors_message = "";
    if(isset($_POST["send"])) {
        $_SESSION["email"] = $_POST["email"];
        if(!empty($_POST["email"]) && !empty($_POST["pass"])) {
            $email = $_POST["email"];
            $query = $mysqli -> query("SELECT * FROM `users` WHERE `email` = '$email'");
            if(mysqli_num_rows($query) == 1) {
                $pass = $_POST["pass"];
                $row = mysqli_fetch_assoc($query);
                if(MD5("$pass") == $row["pass"]) {
                    header("Location: profile.php?SEND = 1");
                } else  $errors_message = "Пароль не верный";
            } else  $errors_message = "Пользователя не существует";
        } else  $errors_message = "Не все поля заполнены";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header class="header">
        <div class="container">
        <a class="block_logo" href="index.php">
                <img class="logo" src="img/logo.png" alt="Логотип" />
                <div class="text_logo ub30_white">Новая жизнь</div>
            </a>
            <nav>
                <a href="index.php" class="menu um20_white">Главная</a>
                <a href="search.php" class="menu um20_white">Поиск</a>
                <a href="register.php" class="menu um20_white">Регистрация</a>
                <a href="login.php" class="menu um20_white">Личный кабинет</a>
                <a href="add.php" class="menu um20_white">Добавить</a>
                <a href="#" class="menu um20_white">Отзывы</a>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="account">
            <div class="block_account">
                <div class="ur55_black">Вход</div>
                <form class="search1" action="" method="POST">
                    <input class="poisk" name="email" type="search" placeholder="e-mail" />
                    <input class="poisk" name="pass" type="search" placeholder="Пароль" />
                    <?=$errors_message?>
                    <input class="btn ub22_blue" type="submit" name="send" value="Войти"><br>

                    <a href="#">Восстановить пароль</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer">
                <a class="block_logo" href="index.html">
                    <img class="logo" src="img/logo.png" alt="Логотип" />
                    <div class="text_logo ub30_white">Новая жизнь</div>
                </a>
                <div class="contacts">
                    <div class="um20_white">Телефон “8 (800)123-45-67”</div>
                    <div class="um20_white">e-mail: mail@newlife.ru</div>
                </div>
                <div class="contacts2">
                    <a href="index.html" class="menu um20_white">Главная</a>
                    <a href="register.html" class="menu um20_white">Регистрация</a>
                    <a href="#" class="menu um20_white">Авторизация</a>
                    <a href="login.html" class="menu um20_white">Личный кабинет</a>
                    <a href="#" class="menu um20_white">Найдено животное</a>
                    <a href="#" class="menu um20_white">Поиск</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>