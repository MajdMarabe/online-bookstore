<?php
$mysqli = require __DIR__ . "/database.php";
$query3 = "INSERT INTO orders (`USER_ID`,`isbn`,`price`,`qantity`, `date`,`ordern`) SELECT `USER_ID`,`isbn`,`price`,`qantity`, `date`,`ordern` FROM cart_items;" ;


$query=
    "SELECT * FROM BOOK B
LEFT JOIN cart_items A ON A.isbn = B.isbn 
";
$all_product= $mysqli->query($query);


while($row=mysqli_fetch_assoc($all_product)) {

$qan=$row['allqantity']-$row['qantity'];

    $q1="UPDATE book
SET allqantity = $qan
WHERE isbn=$row[isbn];";
    $x= $mysqli->query($q1);

}


$order = mysqli_query($mysqli, $query3);


$delete2 = "DELETE FROM `cart_items` ";
$d= $mysqli->query($delete2);
header("location:ContactUs.php");
