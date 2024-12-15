<?php
$mysqli = require __DIR__ . "/database.php";
$sname="SELECT * FROM book WHERE bookname ='$_GET[search]'";


if($result=$mysqli->query($sname)) {
   if($row = mysqli_fetch_assoc($result)) {
        echo 'hhh';

     header("location:choosebook.php?isbn=$row[isbn]");

    }
   else{
       header("location:bookNotFound.php");
   }
}

