<?php
session_start();
$session_user = (isset($_SESSION["username"])) ? $_SESSION["username"] : false;
?>