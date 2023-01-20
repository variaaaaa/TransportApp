<?php
require_once ('php/connectdb.php'); // For storing username and password.

session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Транспорт Москвы</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="css/auth_style.css">
</head>
<body>
<body>
<header class="header" id="top">
    
</header>
<?php
require('php/connectdb.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
    $test = mysqli_query($con,"SELECT username FROM Users WHERE username='".$_POST['username']."'");
        if(mysqli_num_rows($test) >0){
            echo '<b margin-top="20px" margin-left="30px"> Такой пользователь уже существует! </b>';
        }
        else{
            $query = "INSERT into `Users` (username, password)
            VALUES ('$username', '".md5($password)."')";
                    $result = mysqli_query($con,$query);
                    if($result){
                        header("Location:  login.php");
                    }
                }
    }else{
    
?>
<div class="form">
<form name="registration" action="" method="post">
            <h3 class="h3">Регистрация</h3>
            <label for="username">Логин</label>
            <input type="text" name="username" placeholder="Введите логин" required />
            <label for="password">Пароль</label>
            <input type="password" name="password"  placeholder="Придумайте пароль" id="password" required/>
            <button type="submit">Зарегистрироваться</button>
            <a href="login.php " class="link" margin-left="35px">Уже есть аккаунт? Войти</a>
            <a href="index.html" class="link">Вернуться на главную </a>
    </form> 
</div>
<?php } ?>
</body>
</html>
