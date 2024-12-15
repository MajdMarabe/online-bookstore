<?php
session_start();
$_SESSION["LOGGEDIN"]=0;
unset($_SESSION["USERNAME"]);
unset($_SESSION["ADMIN"]);
unset($_SESSION["USER_ID"]);
unset($_SESSION["added"]);

$_SESSION["name"]=0;
$_SESSION["email"]=0;

$_SESSION["invalid pass"]=0;
$_SESSION["invalid user"]=0;


$mysqli = require __DIR__ . "/database.php";

$delete = "DELETE FROM `cart_items` ";
$result = mysqli_query($mysqli, $delete);

//$delete2 = "DELETE FROM `orders` ";
//$result = mysqli_query($mysqli, $delete2);




header("location:home.php");
exit();
