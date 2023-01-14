<?php
include "php/connectdb.php";
// Выводим результат из БД
$sql = mysqli_query($connect, "SELECT NameOfStation, Income+Outcome as Stat FROM TopFive ORDER by Income+Outcome DESC Limit 5");
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['NameOfStation'].'</td>'.'<td>'. $result['Stat'].'</td>'.'</tr>';
  }
?>

<!-- <?php
include "connectdb.php";

$sql = mysqli_query($connect, "SELECT NameOfStation, Income+Outcome as Stat FROM TopFive ORDER by Income+Outcome DESC Limit 5");
# Если у нас есть хотя бы одно значение мы его покажем
	while ($result = mysqli_fetch_array($sql)) {  
    echo "".$result['NameOfStation'].": ".$result['Stat']."<br />";
  }
  ?> -->
