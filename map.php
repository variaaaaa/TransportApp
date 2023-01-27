

<?php
require("./php/session.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Транспорт Москвы</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/start_style.css" rel="stylesheet" />
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
    <link href="css/start_style.css" rel="stylesheet" />
    <title>Транспорт Москвы</title>
    </head> 
    <body>
        <!-- Responsive navbar-->
    
       
        <nav class="navbar navbar-dark bg-dark" margin-right="-500px" width="150%">
            <div class="container px-5" margin-right="-500px" width="150%">
                <a class="navbar-brand" href="start.php">Транспорт Москвы</a>
                <?php if($session_user):?>
                  <li><b class="text">Вы зашли под аккаунтом <?=$session_user["username"]?></b></li>
                <?php endif;?>
                <?php if($session_user["role"] == "admin"):?>
                  <li><a href="users.php">Все пользователи</a></li>
                <?php endif;?>
                <li><a href="logout.php" class="text" > Выйти</a></li>
            </div>
        </nav>
        <!-- Header-->
        
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Статистика по метро Москвы</h2>
                        <p>Самые загруженные станции метро за последний квартал.</p>
                        <a class="text-decoration-none" href="subway.php">
                            Перейти
                            <i class="bi bi-arrow-right" href="hi.php"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Статистика по транспорту Москвы</h2>
                        <p>Кроме метро, в городе также есть автобусы, электробусы и трамваи. Узнайте количество пассажиров на данных видах транспорта.</p>
                        <a class="text-decoration-none" href="transport.php">
                            Перейти
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                   
                
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Карта</h2>
                        <p> Карта доступна авторизованным пользователям.</p>
                        
                    </div>
                   
                </div>
            </div>
        </section>

         
        <!-- Header-->
        <h1 margin-left=""> Карта </h1>
        <h3> Доступна только авторизованным пользователям.</h3>
        <div class="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5844555334805cf6f9cc2bbfbfe5b4684d17bfe81ebee8e7f0c568a5c63b89c6&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
</body>

</html>