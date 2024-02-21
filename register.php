<?php
include 'connect.php';
$errors_message = "";
if (isset($_POST["send"])) {
    if (!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["phone"]) && !empty($_POST["pass"]) && !empty($_POST["pass2"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            if ($_POST["pass"] == $_POST["pass2"]) {
                $email = $_POST['email'];
                $query = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
                if (mysqli_num_rows($query) == 0) {
                    $pass = $_POST['pass'];
                    $name = $_POST['name'];
                    $surname = $_POST['surname'];
                    $phone = $_POST['phone'];
                    $result = $mysqli->query("INSERT INTO `users` (`email`, `name`, `surname`, `phone`, `pass`) VALUES ('$email',  '$name', '$surname', '$phone', MD5('$pass'))");
                    header("location: index.php");
                } else $errors_message = "Данная почта уже зарегистрированна";
            } else $errors_message = "Пароли не совпадают";
        } else $errors_message = "Формат электронной почты указан неверно";
    } else $errors_message = "Не все поля заполнены";
}
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Регистрация</title>
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
            <div class="block_account1">
                <div class="ur55_black">Регистрация</div>
                <form action="" method="POST" class="search2">
                    <input class="poisk" name="email" type="text" placeholder="e-mail" />
                    <input class="poisk" name="name" type="text" placeholder="Имя" />
                    <input class="poisk" name="surname" type="text" placeholder="Фамилия" />
                    <input class="poisk" name="phone" type="text" placeholder="Телефон" />
                    <input class="poisk" name="pass" type="password" placeholder="Пароль" />
                    <input class="poisk" name="pass2" type="password" placeholder="Повтор пароля" />
                    <div class="checkbox">
                        <input type="checkbox" id="horns" name="Согласен на обработку данных" />
                        <label for="horns">Согласен на обработку персональных данных</label>
                    </div>
                    <?= $errors_message ?>
                    <input type="submit" class="ub22_blue btn" name="send" value="Зарегистрироваться"><br>
                    <!-- <a href="login.html"><button class="btn ub22_blue">Зарегистрироваться</button></a> -->
                </form>
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
                    <a href="index.php" class="menu um20_white">Главная</a>
                    <a href="register.php" class="menu um20_white">Регистрация</a>
                    <a href="#" class="menu um20_white">Авторизация</a>
                    <a href="login.php" class="menu um20_white">Личный кабинет</a>
                    <a href="#" class="menu um20_white">Найдено животное</a>
                    <a href="#" class="menu um20_white">Поиск</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>