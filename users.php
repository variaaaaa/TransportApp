

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Транспорт Москвы</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/users_style.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="start.php">На главную</a>
                
            </div>
        </nav>
</div>
<body>
        <!-- Header-->
        <div class="table">
        <table bordercolor = "black" bgcolor = "white" width = "500" align="center" text-color="black" margin-top="250px">
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
