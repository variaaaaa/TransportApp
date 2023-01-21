
<?php
	include "php/connectdb.php";
	
	// Assign variables
	$labels = $datas = "";
	
	// Select query to fetch data with page load
	$sql = "SELECT TransportType, Amount FROM TopTransport";
	$result = $con->query($sql);
	
	// Create data in comma separated string
	while($row = $result->fetch_assoc()){
		$labels .= "'" . $row['TransportType'] . "',";
		$datas .= $row['Amount'] . ",";
	}
	
	// Remove the last comma from the string
	$lbl = trim($labels, ",");
	$val = trim($datas, ",");

?>
<?php
require("php\session.php");?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bar Chart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100&display=swap" rel="stylesheet"> 
    <title>Транспорт Москвы</title>
    <link rel="stylesheet" type="text/css" href="css/transport_style.css">
  </head>
<body>
    <header id = "header" class="header">
        <div class="container">
            <div class="nav">
                <ul class = "menu">
                    <li><a href="start.php" class="text" >Схема метро</a></li>
                    <li><a href="subway.php" class="text">Статистика по метро Москвы</a></li>
                    <li><a href="transport.php"class="text" id="here"> Статистика по всем видам транспорта Москвы</a></li>
					<?php if($session_user):?>
						<li><a href="map.html" class="text"> Карта</a></li>
                  		<li><a href="#">Вы зашли под аккаунтом <?=$session_user["username"]?></a></li>
                <?php endif;?>
                    <li><a href="index.html" class="text"> Выйти</a></li>
                </ul>
            </div>
        </div>
    </header>
	<div class="box">
  		<select name="option" id="option">
		  <option value="1">3 квартал 2022</option>
			<option value="2">2 квартал 2022</option>
		</select>

       
	</div>
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
					backgroundColor: ['#0095ff', '#00aaff', '#00b3ff', '#ffbf00', '#ffbf00', '#ffff00', '#bfff00', '#80ff00'],
					borderColor: 'black',
					data: val,
				}]
			};

			// Draw default chart with page load
			var ctx = document.getElementById('my_Chart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',    // Define chart type
				data: myData    // Chart data
			});

			// Draw chart with Ajax request
			$('#option').on('change', function (e) {
				var type = this.value;
				$.ajax({
					url: 'http://localhost:3000/get_data.php',
					dataType: 'json',
					data: {'id':type},
					success: function(e){

						// Delete previous chart
						myChart.destroy();

						//Draw new chart with Ajax data
						myChart = new Chart(ctx, {
							type: 'bar',    // Define chart type
							data: e    		// Chart data
						});
					}
				});
			});
		</script>

	</body>
</html>