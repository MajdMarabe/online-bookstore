
<?php
session_start();
include "connection.php";
/*
mysql_connect("localhost","root", "");
mysql-mysql_select_db("BookStore");
$USERNAME = $_GET["USERNAME"];
$PASSWORD = $_GET["PASSWORD"];

$sql=mysqli_query("select pasword from USERS_TB where USERNAME='$USERNAME'");
if($row=mysqli_fetch_array($sql)){
    if($PASSWORD==$row['PASSWORD']){
        header("location:home.php");
        exit();
    }
    else
        echo "invalid pass";
}
else
    echo "invalid user";
*/
$USERNAME = $_GET["USERNAME"];
$PASSWORD = $_GET["PASSWORD"];

$query = "select * from USERS_TB where USERNAME='$USERNAME'";

if($result = $db->query($query)) {
  if($row = $result->fetch_assoc()) {

       if($PASSWORD==$row['PASSWORD']){
           $_SESSION["LOGGEDIN"]=1;
           $_SESSION["USERNAME"]=$row["USERNAME"];
           $_SESSION["USER_ID"]=$row["USER_ID"];
           if(isset($_SESSION["order"])){
               $_SESSION["order"]=$_SESSION["order"]+1;
           }else{
               $_SESSION["order"]='0';
           }


           $_SESSION["ADMIN"]=$row["ADMIN"];
           $_SESSION["invalid pass"]=0;
           $_SESSION["invalid user"]=0;
echo    $_SESSION["USERNAME"];
     header("location:home.php");
           exit();
       }
       else {
           echo "invalid pass";
           $_SESSION["invalid pass"]=1;
           $_SESSION["invalid user"]=0;
           header("location:Signin&Signup.php");
       }
    }
  else{
      echo "invalid username";
      $_SESSION["invalid user"]=1;
      $_SESSION["invalid pass"]=0;
      header("location:Signin&Signup.php");

  }


}

   /*while ($row = $result->fetch_assoc()) {
        print_r($row);
        $_SESSION["wrong"]=0;
        $_SESSION["ADMIN"] = $row["ADMIN"];
        $_SESSION["LOGGED_IN"] = "0";
    }*/

/*else{
    $_SESSION["wrong"]=1;
    header("Location: Signin&Signup.php?error=worng");

}*/
