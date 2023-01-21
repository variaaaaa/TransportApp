<?php
include "php/connectdb.php";
// Выводим результат из БД
echo '<tr>'.'<th>'. "Линия метро". '</th>'.'</tr>';
$sql = mysqli_query($con, "SELECT DISTINCT Line FROM `Subway`");
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['Line'].'</td>'.'</tr>';
  }
?>
