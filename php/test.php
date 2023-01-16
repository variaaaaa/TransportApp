
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = htmlspecialchars($_POST['login']);
    $password=htmlspecialchars($_POST['password']);
    $query = mysqli_query($connect, "SELECT * FROM Users WHERE login='".$login."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0){
$sql="INSERT INTO Users(login,password)VALUES('".$login."','".$password."')";
$result=mysqli_query($sql);
if($result){
$message = "Account Successfully Created";
}
else {
$message = "Failed to insert data information! SQL query:".$sql;

}
}
else {
$message = "That username already exists! Please try another one!";
}
}
else {
$message = "All fields are required!";
}
}
?>

<?php if (!empty($message)) {echo "<p class='error'>" . "MESSAGE: ". $message . "</p>";} ?>