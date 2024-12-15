<?php
session_start();
$mysqli = require __DIR__ . "/database.php";

$isbn=$_GET["isbn"];



$semail="SELECT COUNT(*) CNTM FROM trend";



$result=$mysqli->query($semail);
$row = mysqli_fetch_assoc($result);
        if ($row['CNTM'] == "5") {
            $_SESSION["five"] = "1";
            header("location:admin.php");
        }

else {


    $add = "INSERT INTO `trend` (`isbn`, `bookname`, `price`, `picture`, `allqantity`) VALUES ('$_GET[isbn]','$_GET[name]','$_GET[price]','$_GET[pic]','$_GET[quan]') ";
    $result = mysqli_query($mysqli, $add);
    header("location:admin.php");

}