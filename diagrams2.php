<?php
require("./php/session.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/diagrams_style.css">
    <title>Транспорт Москвы</title>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
</head>
<body>
<header id = "header" class="header">
    <div class="container">
        <div class="nav">
            <ul class = "menu">
                <li><a href="subway.php" class="text">Назад</a></li>
                <?php if($session_user):?>
                <li><a href="#">Вы зашли под аккаунтом <?=$session_user["username"]?></a></li>
                <?php endif;?>
                <li><a href="index.html" class="text"> Выйти</a></li>
            </ul>
        </div>
    </div>
</header>
<body>
   
                <div id="container">
                    <script>
                    anychart.onDocumentReady(function() {
                    // set the data
                    var data = [
                        {x: "Арбатско-Покровская линия", value: 113609700},
                        {x: "Большая кольцевая линия", value: 34485304},
                        {x: "Бутовская линия Лёгкого метро", value: 11251913},
                        {x: "Замоскворецкая линия", value: 124115079},
                        {x: "Калининская линия", value: 50557732},
                        {x: "Калужско-Рижская линия", value: 125297283},
                        {x: "Кольцевая линия", value: 73359918},
                        {x: "Люблинско-Дмитровская линия", value: 78590802},
                        {x: "Московская монорельсовая транспортная система", value: 437589},
                        {x: "Московское центральное кольцо", value: 61374675},
                        {x: "Некрасовская линия", value: 24007083},
                        {x: "Серпуховско-Тимирязевская линия", value: 112307828},
                        {x: "Сокольническая линия", value: 98591874},
                        {x: "Солнцевская линия", value: 24533156},
                        {x: "Таганско-Краснопресненская линия", value: 133999854},
                        {x: "Филёвская линия", value: 20712952}
                    ];
                    // create the chart
                    var chart = anychart.pie();
                    // set the chart title
                    chart.title("Пассажиропоток Московского метро за 3 квартал 2022 года");
                    // add the data
                    chart.data(data);
                    // display the chart in the container
                    chart.container('container');
                    chart.draw();
                    });
                    </script>
                    <div class = "topFive">
                </div>
                </div>
                <div id="container">
                    <script>
                    anychart.onDocumentReady(function() {
                    // set the data
                    var data = [
                        {x: "Арбатско-Покровская линия", value: 117778559},
                        {x: "Большая кольцевая линия", value: 31772221},
                        {x: "Бутовская линия Лёгкого метро", value: 11411210},
                        {x: "Замоскворецкая линия", value: 128939759},
                        {x: "Калининская линия", value: 51933073},
                        {x: "Калужско-Рижская линия", value: 129058582},
                        {x: "Кольцевая линия", value: 75002174},
                        {x: "Люблинско-Дмитровская линия", value: 82278312},
                        {x: "Московская монорельсовая транспортная система", value: 442834},
                        {x: "Московское центральное кольцо", value: 62263508},
                        {x: "Некрасовская линия", value: 22599845},
                        {x: "Серпуховско-Тимирязевская линия", value: 117296656},
                        {x: "Сокольническая линия", value: 101267078},
                        {x: "Солнцевская линия", value: 25177997},
                        {x: "Таганско-Краснопресненская линия", value: 138174191},
                        {x: "Филёвская линия", value: 21143483}
                    ];
                    // create the chart
                    var chart = anychart.pie();
                    // set the chart title
                    chart.title("Пассажиропоток Московского метро за 2 квартал 2022 года");
                    // add the data
                    chart.data(data);
                    // display the chart in the container
                    chart.container('container');
                    chart.draw();
                    });
                    </script>
                    <div class = "topFive">
                </div>
                </div>
                <div id="container">
                    <script>
                    anychart.onDocumentReady(function() {
                    // set the data
                    var data = [
                        {x: "Арбатско-Покровская линия", value: 107358542},
                        {x: "Большая кольцевая линия", value: 30489922},
                        {x: "Бутовская линия Лёгкого метро", value: 10542984},
                        {x: "Замоскворецкая линия", value: 116033185},
                        {x: "Калининская линия", value: 47165714},
                        {x: "Калужско-Рижская линия", value: 114744247},
                        {x: "Кольцевая линия", value: 62682265},
                        {x: "Люблинско-Дмитровская линия", value: 76640378},
                        {x: "Московская монорельсовая транспортная система", value: 329894},
                        {x: "Московское центральное кольцо", value: 54541376},
                        {x: "Некрасовская линия", value: 21854160},
                        {x: "Серпуховско-Тимирязевская линия", value: 110077951},
                        {x: "Сокольническая линия", value: 89036872},
                        {x: "Солнцевская линия", value: 22626262},
                        {x: "Таганско-Краснопресненская линия", value: 125139866},
                        {x: "Филёвская линия", value: 19037024}
                    ];
                    // create the chart
                    var chart = anychart.pie();
                    // set the chart title
                    chart.title("Пассажиропоток Московского метро за 1 квартал 2022 года");
                    // add the data
                    chart.data(data);
                    // display the chart in the container
                    chart.container('container');
                    chart.draw();
                    });
                    </script>
                    <div class = "topFive">
                </div>
                </div>
                
                
 
</body>
</html>
