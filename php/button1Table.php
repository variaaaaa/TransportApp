<?php
include "php/connectdb.php";
// Выводим результат из БД
echo '<tr>'.'<th>'. "Линия метро". '</th>'.'<th>' ."Пассажиропоток". '</th>'.'</tr>';
$sql = mysqli_query($con, "SELECT Line, sum(IncomingPassengers+OutgoingPassengers) AS user_sum FROM `Subway` where Quarter='III квартал' and  (IncomingPassengers+OutgoingPassengers != 0) GROUP BY Line");
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['Line'].'</td>'.'<td>'. $result['user_sum'].'</td>'.'</tr>';
  }
?>
