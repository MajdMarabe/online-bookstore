<?php

session_start();

if(isset($_SESSION["sold"]))
{
    if($_SESSION["sold"]=='1'){
        $_SESSION["sold"]=='0';
     header("location:choosebook.php");

    }
}
if($_SESSION["ADMIN"]==1){
    $_SESSION['ADMINM']=1 ;
    $_SESSION["LOGGEDINM"]=0;
    if(isset( $_SESSION['search'])){
        unset($_SESSION['search']);
        header("location:javascript:history.go(-1)");
    }
     else header("location:choosebook.php");

}
else if ($_SESSION["LOGGEDIN"]==0){
    $_SESSION["LOGGEDINM"]=1;
    $_SESSION['ADMINM']=0 ;
    header("location:choosebook.php");

}
else {
    $mysqli = require __DIR__ . "/database.php";
//$isbn = $_GET["isbn"];

//$product = $mysqli->query($query);
//$row = mysqli_fetch_assoc($product);
    if (isset($_SESSION['isbn'])) {
        $isbn = $_SESSION['isbn'];
        $qantity = $_GET['qantity'];
        $userid = $_SESSION['USER_ID'];
$query2="SELECT * FROM cart_items
 WHERE ISBN = '$isbn'" ;
        $exist= $mysqli->query($query2);
        $update=mysqli_fetch_assoc($exist);

        $query = "SELECT * FROM BOOK
 WHERE ISBN = '$isbn'" ;

        $all_product= $mysqli->query($query);
        $row=mysqli_fetch_assoc($all_product);



        if($update){
            $q=$update['qantity'];

          $new=  "UPDATE `cart_items` SET `qantity` = $q+$qantity WHERE `isbn` =   $isbn";
            $newr = mysqli_query($mysqli, $new);
            header("location:choosebook.php");
            $_SESSION['added'] = '1';
        }
        else{
$date=date("Y/m/d");
        $price =$row['price'];


            $add = "INSERT INTO `cart_items` ( `isbn`, `qantity`, `USER_ID`, `price`, `date`,`ordern`) VALUES ( '$isbn', '$qantity', '$userid', '$price', '$date','$_SESSION[order]');";
        $result = mysqli_query($mysqli, $add);
        header("location:choosebook.php");
//
//        unset($_SESSION['isbn']);
//        unset($_SESSION['qantity']);
//        unset($_SESSION['price']);
        $_SESSION['added'] = '1';

        }
    }
}