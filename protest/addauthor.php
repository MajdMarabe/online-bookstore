<?php
$mysqli = require __DIR__ . "/database.php";

$add = "INSERT INTO `author` (`authorEmail`, `authorname`) VALUES ( '$_GET[bookname]','$_GET[isbn]');";
$result = mysqli_query($mysqli, $add);
header("location:authors.php");
