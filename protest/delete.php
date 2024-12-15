<?php
session_start();
$mysqli = require __DIR__ . "/database.php";
$isbn=$_GET['isbn'];
$delete = "DELETE FROM `cart_items` WHERE isbn=$isbn";
$result = mysqli_query($mysqli, $delete);
header("location:shop.php");
