<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="<?php echo $image ?>">
        <div class="wrapper">
            <div class="header">
                <div class="header-container">
                    <div class="header-container-log">
                        <a href="index.php" class="logo"></a>
                        <a href="index.php" class="mm">My Moscow</a>
                    </div>
                    <nav>
                        <a href="index.php">Главная</a>
                        <a href="trips.php">Наши услуги</a>
                        <a href="#">О компании</a>
                        <a href="contacts.php">Контакты</a>
                        <a href="#">Отзывы</a>
                    </nav>
                    <div class="menu_btn"></div>
                </div>
            </div>
            <div class="description">
                <div class="description-text">
                    <h1><?php echo $title ?></h1>
                    <p>My Moscow - агентство необычных маршрутов</p>
                    <a href="contacts.php">Подробнее о нас</a>
                </div>
            </div>
        </div>
    </div>