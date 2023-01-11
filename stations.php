<?php
include "connectdb.php";
// Выводим результат из БД
$sql = mysqli_query($connect, 'select * FROM `Subway` WHERE (NameOfStation = "Электрозаводская");');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['Word'].'</td>'.'<td>'. $result['Definition'].'</td>'.'</tr>';
  }
?>

