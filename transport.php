
<?php
	include "./php/connectdb.php";
	
	// Assign variables
	$labels = $datas = "";
	
	// Select query to fetch data with page load
	$sql = "SELECT TransportType, sum(PassengerTraffic) as summa FROM Transport where year='2022' and quarter='III квартал' GROUP BY TransportType";
	$result = $con->query($sql);
	
	// Create data in comma separated string
	while($row = $result->fetch_assoc()){
		$labels .= "'" . $row['TransportType'] . "',";
		$datas .= $row['summa'] . ",";
	}
	
	// Remove the last comma from the string
	$lbl = trim($labels, ",");
	$val = trim($datas, ",");
?>
<?php
require("./php/session.php");?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Транспорт Москвы</title>
    <link rel="stylesheet" type="text/css" href="css/transport_style.css">
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/start_style.css" rel="stylesheet" />
  </head>
<body>
    <header id = "header" class="header">
        <div class="container">
            <div class="nav">
                <ul class = "menu">
                    <li><a href="start.php" class="text" >Транспорт Москвы</a></li>
					<?php if($session_user):?>
                  		<li><a href="#">Вы зашли под аккаунтом <?=$session_user["username"]?></a></li>
                <?php endif;?>
                    <li><a href="index.html" class="text"> Выйти</a></li>
                </ul>
            </div>
        </div>
    </header>
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
                        <b>
                            Вы находитесь здесь
                            
					</b>
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
	<h1>3 квартал 2022</h1>
	<div class="chart-container" style="position: relative; margin-top:90px;margin-left:100px; width:80vw">
            <canvas id="my_Chart"></canvas>
        </div>

		<script>

			var lbl = [<?= $lbl ?>]; // Get Labels from php variable
			var val = [<?= $val ?>]; // Get Data from php variable

			// Chart data with page load
			myData = {
				labels: lbl,
				datasets: [{
					label: "Количество пассажиров",
					fill: false,
					backgroundColor: ['#F8F8FF', '#FFF5EE', '#FFF8DC'],
					borderColor: 'white',
					data: val,
				}]
			};

			// Draw default chart with page load
			var ctx = document.getElementById('my_Chart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',    // Define chart type
				data: myData    // Chart data
			});

		</script>

	</body>
</html>