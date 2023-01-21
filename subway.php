<?php
require("php\session.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/subway_style.css">
    <title>Транспорт Москвы</title>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
   
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
</head>
<body>
<header id = "header" class="header">
    <div class="container">
        <div class="nav">
            <ul class = "menu">
                <li><a href="start.php" class="text">На главную</a></li>
                <li><a href="" class="text" id="here">Статистика по метро Москвы</a></li>
                <li><a href="transport.php"class="text"> Статистика по всем видам транспорта Москвы</a></li>
                <?php if($session_user):?>
                <li><a href="map.html" class="text"> Карта</a></li>
                <li><a href="#">Вы зашли под аккаунтом <?=$session_user["username"]?></a></li>
                <?php endif;?>
                <li><a href="index.html" class="text"> Выйти</a></li>
            </ul>
        </div>
    </div>
</header>
<body>
<div id="guia">
	<div class="navi">
		<h3>Станции</h3>
		<span>
			<a href="#botoni1" class="botoniac">Пассажиропоток на каждой станции в 3 квартале 2022 года</a>
			<a href="#botoni2">Топ-5 самых загруженных станций. 3 квартал 2022 года</a>
			<a href="diagrams.php">Диаграммы</a>
		</span>
		<h3>Линии</h3>
		<span>
			<a href="#button1">vampiro</a>
			<a href="/">vampiro</a>
			<a href="/">vampiro</a>
			<a href="/">vampiro</a>
			<a href="/">vampiro</a>
			<a href="/">vampiro</a>
		</span>
	</div>
	<div class="page">
		<div class="conteni">
            <div id="botoni1" style="display: block;">      
                <h1>Общая таблица</h1>
                <br> В Москве 230+ станций. Какие-то из станций более популярны, чем другие. Но если посмотреть на пассажиропоток ВСЕХ станций в одном месте, ничего толком не понят (эта табличка и представлена после текста).</br>
                <br margin-bottom="10px"> Поэтому в меню слева можно открыть интересующую информацию, представленную в виде таблицы и/или диаграммы.</br>
                <br> А вот и табличка: </br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "php\oneTable.php"; ?>
                    </table>
                </div>
            </div>           
            <div id="botoni2">         
                <h1>Диаграмма</h1>
                <br> Топ-5 самых загруженных станций за 3 квартал 2022. </br>        
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
        </div>
        <div id="botoni3">
                </div>
		</div>																									
		
		
    </div>
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script  src="js\script.js"></script>
</body>
</html>
