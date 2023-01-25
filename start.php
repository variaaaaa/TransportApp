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
    </head> 
    <body>
        <!-- Responsive navbar-->
    
        <nav class="navbar navbar-dark bg-dark" margin-right="-500px" width="150%">
            <div class="container px-25" margin-right="-500px" width="150%">
                <a class="navbar-brand" href="#!">Транспорт Москвы</a>
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
                        <?php if($session_user):?>
                        <a class="text-decoration-none" href="map.php">
                            Перейти
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <?php endif;?>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Pricing section-->
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Схема метро</h2>
                    
                </div>
                
            </div>
            <div class="mySVG">
                <img src="startMap.svg">
                            
</div>
        </section>
        <!-- Testimonials section-->
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Факты о Московском метро</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-7">
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">«Воробьёвы горы» — самая длинная станция московского метрополитена. Длина платформы составляет 284 метра. Чтобы пройти ее от начала до конца, придётся потратить 4 минуты.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body p-4" style="margin-top:10px;">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">Станция «Выхино» самая загруженная станция московского метрополитена, благодаря чему появился так называемый «Эффект Выхино». Он заключается в том, что поезда на станции в час пик заполняются настолько, что на следующих станциях, вплоть до пересадки на Кольцевую линию, поместиться в вагоны другим пассажирам невозможно.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">В 1940 году на станции Московского метро «Динамо» по ночам работали учёные-физики. Расположенная на 40-метровой глубине станция отлично была защищена от радиоволн, что, собственно, им и требовалось.</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-4" style="margin-top:10px;">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">Самая тихая станция московского метрополитена — «Пражская». Так вышло благодаря особому виду керамической плитки, которой облицованы путевые стены станции. Плитка содержит многочисленные воздушные поры, поглощающие звук.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <div class="container px-5"><p class="m-0 text-center text-white">Сайт создан на основе открытых данных г. Москва</p></div>
        <div class="container px-5"><p class="m-0 text-center text-white"> <a href="https://data.mos.ru/opendata/7704786030-passajiropotok-po-stantsiyam-moskovskogo-metropolitena">Пассажиропоток по станциям Московского метрополитена
                        </a> </p></div>
        <div class="container px-5"><p class="m-0 text-center text-white"><a href ="https://data.mos.ru/opendata/7704786030-passajiropotok-po-marshrutam-nazemnogo-gorodskogo-passajirskogo-transporta?pageNumber=280&versionNumber=1&releaseNumber=1"> Пассажиропоток по маршрутам наземного городского пассажирского транспорта
                        </a> </p> </div>
        </footer>
       
    </body>
</html>
