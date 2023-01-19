
<?php
require("session.php");?>
    


<!DOCTYPE html>
<html>
<head>
    <title>Размещение в скрытом контейнере</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=ce293902-760d-436d-8849-b0834b53c615 type="text/javascript"></script>

    <!--
        Основная библиотека JQuery.
        Яндекс предоставляет хостинг JavaScript-библиотек
    -->
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>

    <!-- Библиотека JQuery.UI. Используем для работы со вкладками -->
    <script src="https://yandex.st/jquery-ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>

    <!-- CSS JQuery.UI. Используем для отрисовки вкладок -->
    <link rel="stylesheet" href="https://yandex.st/jquery-ui/1.8.23/themes/humanity/jquery.ui.all.min.css" type="text/css"/>

    <script src="js/map.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/map_style.css">
    <title>Транспорт Москвы</title>
</head>

<body>
<header id = "header" class="header">
    <div class="container">
        <div class="nav">
            <ul class = "menu">
                <li><a href="#image" class="text" id="here">Схема метро</a></li>
                <li><a href="subway.php" class="text">Статистика по метро Москвы</a></li>
                <li><a href="transport.php"class="text"> Статистика по всем видам транспорта Москвы</a></li>
                <?php if($session_user):?>
                  <li><a href="#">Вы зашли под аккаунтом <?=$session_user["username"]?></a></li>
                  <li><a href="map.html" class="text"> Карта</a></li>
                <?php endif;?>
               
                <li><a href="logout.php" class="text"> Выйти</a></li>
            </ul>
        </div>
    </div>
</header>

<div id="tabs"  style="width: 95%">
    <ul>
        <li><a href="#tab-1">Описание</a></li>
        <li><a href="#tab-2">Карта</a></li>
    </ul>
    <div id="tab-1">
        <p>Во вкладке Карта находится карта Москвы</p>
    </div>
    <div id="tab-2" style="width: 100%; height: 300px; padding: 0;"></div>
</div>
</body>

</html>
