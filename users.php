

<?php
require("./php/session.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Транспорт Москвы</title>
    <link href="css/start_style.css" rel="stylesheet" />

    </head> 
    <body>
        <!-- Responsive navbar-->
    
       
        <nav class="navbar navbar-dark bg-dark" margin-right="-500px" width="150%">
            <div class="container px-25">
                <a class="navbar-brand" href="start.php">Транспорт Москвы</a>
                <?php if($session_user):?>
                  <li><b class="text">Вы зашли под аккаунтом <?=$session_user["username"]?></b></li>
                <?php endif;?>
                <?php if($session_user["role"] == "admin"):?>
                  <li><b class="text">Все пользователи</b></li>
                <?php endif;?>
                <li><a href="logout.php" class="text" > Выйти</a></li>
            </div>
        </nav>
        <!-- Header-->
        
        <body>
        <!-- Header-->
        <div class="mytable">
        <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black" margin-top="500px">
        <?php
            include "./php/connectdb.php";
        // Выводим результат из БД
            echo '<tr>'.'<th>'. "Логин пользователя". '</th>'.'<th>' ."Роль". '</th>'.'</tr>';
            $sql = mysqli_query($con, "SELECT username, role FROM Users");
            while ($result = mysqli_fetch_array($sql)) {
                echo '<tr>'.'<td>' .$result['username'].'</td>'.'<td>'. $result['role'].'</td>'.'</tr>';
            }
         ?>                        
        </table>
        </div>
        </body>
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <div class="container px-5"><p class="m-0 text-center text-white">Сайт создан на основе открытых данных г. Москва</p></div>
        <div class="container px-5"><p class="m-0 text-center text-white"> <a href="https://data.mos.ru/opendata/7704786030-passajiropotok-po-stantsiyam-moskovskogo-metropolitena">Пассажиропоток по станциям Московского метрополитена
                        </a> </p></div>
        <div class="container px-5"><p class="m-0 text-center text-white"><a href ="https://data.mos.ru/opendata/7704786030-passajiropotok-po-marshrutam-nazemnogo-gorodskogo-passajirskogo-transporta?pageNumber=280&versionNumber=1&releaseNumber=1"> Пассажиропоток по маршрутам наземного городского пассажирского транспорта
                        </a> </p> </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

</html>