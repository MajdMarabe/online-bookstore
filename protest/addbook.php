<?php
$mysqli = require __DIR__ . "/database.php";

$add = "INSERT INTO `book` (`isbn`, `bookname`, `price`, `picture`, `author_id`, `language_id`, `allqantity`) VALUES ('$_GET[isbn]', '$_GET[bookname]', '$_GET[price]', '$_GET[picture]', '$_GET[auth]', '$_GET[lang]', '$_GET[allqantity]');";
$result = mysqli_query($mysqli, $add);
header("location:admin.php");