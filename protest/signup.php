<?php

session_start();

if(isset($_GET['insert'])) {
    $mysqli = require __DIR__ . "/database.php";
    $username=$_GET['USERNAME'];
    $password=$_GET['PASSWORD'];
    $email=$_GET['EMAIL'];
    $semail="SELECT COUNT(*) CNTM FROM users_tb WHERE EMAIL = '$email'";
    $sname="SELECT COUNT(*) CNTN FROM users_tb WHERE USERNAME ='$username'";


($result1=$mysqli->query($semail));
 $row1 = mysqli_fetch_assoc($result1);
 ($result2=$mysqli->query($sname));
($row2=mysqli_fetch_assoc($result2));

            if ($row1['CNTM'] != "0") {
                $_SESSION["MSG"] = "Email is already in use.";
                header("location:Signin&Signup.php");

            }



            elseif($row2['CNTN'] != "0") {
                $_SESSION["MS"] = "Username is taken.";
                header("location:Signin&Signup.php");
            }


   else {$query="INSERT INTO `users_tb`( `USERNAME`, `EMAIL`, `PASSWORD`, `ADMIN`) VALUES ('$username','$email','$password','0')";
    $result=mysqli_query($mysqli,$query);
    $_SESSION['name']=0;
    $_SESSION['email']=0;}
  header("location:Signin&Signup.php");



}


?>