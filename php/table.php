<?php
include "php/connectdb.php";
// Выводим результат из БД
$sql = mysqli_query($con, "SELECT NameOfStation, Income+Outcome as Stat FROM TopFive where (Income+Outcome != 0) ORDER by Income+Outcome ASC");
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['NameOfStation'].'</td>'.'<td>'. $result['Stat'].'</td>'.'</tr>';
  }
?>
