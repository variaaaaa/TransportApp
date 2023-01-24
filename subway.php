<?php
require("./php/session.php");?>
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
        <a href="#botoni1" class="botoniac">Пассажиропоток на каждой станции в 3 квартале 2022 год</a>
			<a href="#botoni2">Топ-5 самых загруженных станций. 3 квартал 2022 года</a>
			<a href="#botoni3">Топ-5 наименее загруженных станций. 3 квартал 2022 года
			<a href="#botoni4">Диаграммы</a>
		</span>
		<h3>Линии</h3>
		<span>
			<a href="#button1">Все линии Московского метрополитена</a>
			<a href="#button2">Пассажиропоток по линиям за 3 квартал 2022 года</a>
			<a href="#button3">Пассажиропоток по линиям за 2 квартал 2022 года</a>
			<a href="#button4">Пассажиропоток по линиям за 1 квартал 2022 года</a>
			<a href="#button5">Диаграммы</a>
		</span>
	</div>
	<div class="page">
		<div class="conteni">
            <div id="botoni1" style="display: block;">      
                <h1>Общая таблица</h1>
                <br> В Москве 250 станций. Какие-то из станций более популярны, чем другие. Но если посмотреть на пассажиропоток ВСЕХ станций в одном месте, ничего толком не понять (вся информация о станциях представлена после текста в качестве ознакомления).</br>
                <br margin-bottom="10px"> Поэтому в меню слева можно открыть интересующую информацию, представленную в виде таблицы или диаграммы(для диаграмм присутствует отдельная страница).</br>
                <br> А вот и табличка: </br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "./php/oneTable.php"; ?>
                    </table>
                </div>
            </div>           

            <div id="botoni2" style="display: block;">      
                <h1> Таблица </h1>
                <br> Всего московским метро пользуется около 10,5 миллионов человек в сутки. Самой загруженной станцией оказалась "Комсомольская" кольцевой линии - более 152 тысяч пассажиров в сутки. Второе место занимает ВДНХ с 126+ тыс. пассажиров за квартал. Последующие станции отображены в таблице:</br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "./php/secondTable.php"; ?>
                    </table>
                </div>
            </div> 
            <div id="botoni3" style="display: block;">      
                <h1>Общая таблица</h1>
                <br> Наименее "популярными" станциями оказались станции Москвоского монорельса:</br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "./php/anotherTable.php"; ?>
                    </table>
                </div>
            </div> 
            <div id="botoni4" style="display: block;">      
                <h1>Диаграммы</h1>
                <br> <a href="diagrams.php"> Нажмите сюда, чтобы увидеть диаграммы представленных выше таблиц.</a></br>
                
            </div> 
            <div id="button1" style="display: block;">      
                <h1>Общая таблица</h1>
                <br> Общая таблица всех линий </br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "./php/button1Table.php"; ?>
                    </table>
                </div>
            </div>
            <div id="button2" style="display: block;">      
            <h1>Таблица</h1>
                <br> Здесь вы можете увидеть пассажиропоток по линиям Московского метро за 3 квартал 2022 года и сравнить с прошлыми годами.</br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "./php/button2Table.php"; ?>
                    </table>
                </div>
            </div> 
            <div id="button3" style="display: block;">      
            <h1>Таблица</h1>
                <br> Здесь вы можете увидеть пассажиропоток по линиям Московского метро за 2 квартал 2022 года и сравнить с прошлыми и последующими годами.</br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "./php/button3Table.php"; ?>
                    </table>
                </div>
            </div> 
            <div id="button4" style="display: block;">      
            <h1>Таблица</h1>
                <br> Здесь вы можете увидеть пассажиропоток по линиям Московского метро за 1 квартал 2022 года и сравнить с последующими годами.</br>
                <div class = "topFive">
                    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
                    <?php require "./php/button4Table.php"; ?>
                    </table>
                </div>
            </div> 
            <div id="button5" style="display: block;">      
            <h1>Диаграммы</h1>
                <br> <a href="diagrams2.php"> Нажмите сюда, чтобы увидеть диаграммы представленных выше таблиц.</a></br>
 																						
		
    </div>
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script  src="js\script.js"></script>
</body>
</html>