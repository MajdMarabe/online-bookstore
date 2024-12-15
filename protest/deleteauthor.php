<?php

session_start();
$mysqli = require __DIR__ . "/database.php";
$isbn = $_GET['isbn'];
$delete = "DELETE FROM `author` WHERE  author_id=$isbn";
$result = mysqli_query($mysqli, $delete);
header("location:authors.php");
