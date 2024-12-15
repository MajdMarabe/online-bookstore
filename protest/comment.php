<?php
session_start();
$user_id=$_SESSION["USER_ID"];
$comment=$_GET['comment'];
$mysqli = require __DIR__ . "/database.php";
$new=  "UPDATE `users_tb` SET `comment` = '$comment' WHERE `USER_ID` = '$user_id'";
$newr = mysqli_query($mysqli, $new);
header("location:home.php");