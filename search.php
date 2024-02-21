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
    <div class="search_pets">
        <div class="container">
            <div class="block_search1">
                <div class="ur55_black">ПОИСК ЖИВОТНОГО</div>
                <div class="search1">
                    <input class="poisk" name="search" type="search" placeholder="Район" />
                    <select class="poisk" name="pets" id="pet-select">
                        <option value="">Вид животного</option>
                        <option value="dog">Кошка</option>
                        <option value="cat">Собака</option>
                        <option value="hamster">Суслик</option>
                        <option value="parrot">Хорёк</option>
                    </select>
                    <input class="poisk" name="search" type="search" placeholder="Вид животного" />
                    <a href="#"><button class="btn ub22_blue">Поиск питомца</button></a>
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