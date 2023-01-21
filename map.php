
<?php
require("php\session.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Размещение в скрытом контейнере</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
                <li><a href="start.php" class="text" > На главную</a></li>
                <li><a href="subway.php" class="text">Статистика по метро Москвы</a></li>
                <li><a href="transport.php"class="text"> Статистика по всем видам транспорта Москвы</a></li>
                <?php if($session_user):?>
                    <li><a href="map.php" class="text"id="here"> Карта</a></li>
                  <li><a href="#">Вы зашли под аккаунтом <?=$session_user["username"]?></a></li>
                <?php endif;?>
               
                <li><a href="logout.php" class="text"> Выйти</a></li>
            </ul>
        </div>
    </div>
</header>

<div id="tabs" style="width: 95%; color: black; background-image: linear-gradient(to bottom right, #2193b0,#6dd5ed, #21ABCD);">
    <ul>
        <li><a href="#tab-1" style="color: black;">Описание</a></li>
        <li><a href="#tab-2" style="color: black;">Карта</a></li>
    </ul>
    <div id="tab-1" style="background-image: linear-gradient(to bottom right, #2193b0,#6dd5ed, #21ABCD);">
        <p>Во вкладке Карта находится карта Москвы</p>
    </div>
    <div id="tab-2" style="width: 100%; height: 500px; padding: 0; color:black;"></div>
</div>
</body>

</html>
