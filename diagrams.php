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
                        {x: "Комсомольская", value: 15244486},
                        {x: "ВДНХ", value: 12608745},
                        {x: "Щёлковская", value: 12412212},
                        {x: "Новогиреево", value: 11261096},
                        {x: "Выхино", value: 10990775}
                    ];
                    // create the chart
                    var chart = anychart.pie();
                    // set the chart title
                    chart.title("Самые загруженные станции Московского метро за 3 квартал 2022 года");
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
                        {x: "Улица Академика Королёва", value: 25116},
                        {x: "Улица Милашенкова", value: 32106},
                        {x: "Улица Сергея Эйзенштейна", value: 41646},
                        {x: "Телецентр", value: 58343},
                        {x: "Тимирязевская", value: 106825}
                    ];
                    // create the chart
                    var chart = anychart.pie();
                    // set the chart title
                    chart.title("Наименее загруженные станции Московского метро за 3 квартал 2022 года");
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
