<?php
include "php/connectdb.php";
// Выводим результат из БД
echo '<tr>'.'<th>'. "Станция метро". '</th>'.'<th>' ."Пассажиропоток". '</th>'.'</tr>';
$sql = mysqli_query($con, "SELECT NameOfStation, Income+Outcome as Stat FROM TopFive where (Income+Outcome != 0) ORDER by Income+Outcome  ASC LIMIT 5");
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['NameOfStation'].'</td>'.'<td>'. $result['Stat'].'</td>'.'</tr>';
  }
?>
