<?php
session_start();
$mysqli = require __DIR__ . "/database.php";
$isbn=$_GET['isbn'];
$delete = "DELETE FROM `book` WHERE isbn=$isbn";
$result = mysqli_query($mysqli, $delete);
header("location:admin.php");
