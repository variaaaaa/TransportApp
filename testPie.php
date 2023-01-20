<?php
include "php/connectdb.php";

// Get data from database
$query = "SELECT NameOfStation, Income+Outcome FROM TopFive ORDER by Income+Outcome DESC";
$result =  mysqli_query($con,$query) or die(mysql_error());
?> 
 
<!DOCTYPE html> <html lang="en"> <head> <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">  google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
 var data = google.visualization.arrayToDataTable([
   ['Station', 'Rating'], <?php
   if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
   echo "['".$row['NemeOsStation']."', ".$row['Income+Outcome']."],";
    }
   }
   ?> ]);
 var options = {
  title: 'Most Popular Social Media',
  width: 900,
  height: 500,
 };
 var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 chart.draw(data, options);
}  
