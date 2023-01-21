
<div class = "topFive">
    <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black">
        <?php
            include "php/connectdb.php";
        // Выводим результат из БД
            echo '<tr>'.'<th>'. "Логин пользователя". '</th>'.'<th>' ."Роль". '</th>'.'</tr>';
            $sql = mysqli_query($con, "SELECT username, role FROM Users");
            while ($result = mysqli_fetch_array($sql)) {
                echo '<tr>'.'<td>' .$result['username'].'</td>'.'<td>'. $result['role'].'</td>'.'</tr>';
            }
         ?>                        
    </table>
</div>