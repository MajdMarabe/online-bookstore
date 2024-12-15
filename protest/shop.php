<?php
session_start();

$mysqli = require __DIR__ . "/database.php";
$sql="SELECT * FROM cart_items B 
LEFT JOIN book A ON A.isbn = B.isbn
";
$all_product= $mysqli->query($sql);
$total="SELECT SUM(price*qantity) total FROM `cart_items` ";
$all= $mysqli->query($total);
$SUM=mysqli_fetch_assoc($all);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/logo2.png">
    <title>Cart-Alanees</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="styles/shopS.css">
</head>
<body>
<section>
    <nav>
        <div class="icons">
            <?php

            if(isset($_SESSION["LOGGEDIN"])){
                $f= $_SESSION['USERNAME'];
                if ($_SESSION["LOGGEDIN"]==1)      {?>
                    <span class="sign"><pre  style="font-family:cursive" ><b><?php  print "Welcome ". $f." !";?></b></pre></span>
                    <a href="logout.php"> <span class="sign">Logout</span><i class="fa-solid fa-right-from-bracket"></i></a>

                    <?php

                }
            }
            else{
                ?>
                <a href="Signin&Signup.php"> <span class="sign">Signup</span> <i class="fa fa-user-plus"></i></a>
                <a href="Signin&Signup.php"><span class="sign">Login</span> <i class="fa-solid fa-right-to-bracket"></i> </a>
                <?php
            }

            ?>
        </div>
        <div class="header-inner section-inner">
            <div class="logo">
                <a href="home.php"><img src="img\img_1.png " width="350" height="90">  </a>

            </div><!--img-->
            <div class="box">
                <form action="search.php" method="get">
                    <input type="search" name="search"  placeholder="Search by Title.."  size="70">
                    <button name="search2" class="fa-solid fa-magnifying-glass" style="background-color:#f6fdf6; border:#f6fdf6;"></button>
                    <br>
                </form>
            </div>



        </div>

        <div class ="menu-section">
            <ul>
                <li>  <a href="home.php">Home</a> </li>
                <li>    <a href="EnglishBooks1.php">English Books</a> </li>
                <li>    <a href="ArabicBooks1.php">كتب عربية</a> </li>
                <li>   <a href="ChildrenBooks1.php">Children</a> </li>
                <li>   <a href="FrenchBooks.php">French Books</a> </li>
             <!--------->   <li>    <?php

                    if(isset($_SESSION["ADMIN"])){

                    if ($_SESSION["ADMIN"]==1)      {?>
                    <div class="icons"> <a href="Admin.php">Admin</a> </div> </li>
                <?php

                }

                else if($_SESSION["ADMIN"]==0){
                    ?>
                    <div class="icons"> <a href="shop.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a> </div>
                    <?php
                }
                }
                ?>


            </ul>


        </div>

    </nav>
    <div style="box-shadow:  2px 2px 10px #000; background-color:#f6fdf6; width:  100%; height: 200px; padding-top:5px;text-align: center;font-size: 60px; margin-top:140px;border-bottom: 1px solid #d1e9c8">  <pre style="margin-top: 70px">Cart</pre> </div>


    <div style="display: flex ; flex-direction: row ">


       <!-------------> <div  style=" background-color:#f6fdf6;padding-top:10px;width:  55%; height: 1325px;font-size: 30px; display: flex ; flex-direction: column ">
     <pre style="font-size: 20px">            Thumbnail image	         Product           Price            Quantity	 </pre>


            <div class="scroll" style="display: flex ; flex-direction: column; height: 1500px;overflow-x:unset; overflow-y: scroll ">
                <?php
                while($row=mysqli_fetch_assoc($all_product)){
                    ?>

                    <div style="display: flex ; flex-direction: row; margin-top: 10px">

                        <div style="display: flex ;margin-right: 100px" class="cart-content">
                            <div  style="display: flex;flex-direction: row;margin-right: 100px" class="item">
                                <div  style="width:25%; align-items: flex-start; padding-top: 20px ;  padding-bottom: 20px;padding-left: 30px "><img style=" width:140px;height: 100% ; box-shadow: 6px 6px 6px #4b8033 ; " src="<?php echo $row['picture'];?>"> </div>
                                <span style="width:25%; margin-top: 50px; padding-left: 30px; font-size: 30px"><?php echo  $row['bookname'];?></span>
                                <span class="cart-price" style="width:16.5%;  display: block; font-size: 25px;padding-left: 20px;  padding-top: 105px"> <?php echo $row['price'];?>$</span>
                                <div style="width: 16.5%;" ><input class ="num"   value="<?php
                                echo $row['qantity'];
                                ?>"
                                      disabled type="text" min ="1" max="10" step ="1"  style=" width:60px;height:70px ; font-size:20px;border :black solid 1px;margin-left: 50px; margin-top: 60px; text-align: center; height:70px;background-color:white"   value="1" >

                                </div>


<div style="width: 16.5%;">
                               <a href="delete.php?isbn=<?php echo $row['isbn'];

                               ?>" > <i   style="padding-left:350px;cursor: pointer ;margin-top: 105px ; margin-left: -300px" class="fa-sharp fa-solid fa-trash fa-xl close-cart "></i></a></div>
                            </div>

                        </div>
                    </div>


                    <?php
                }
                ?>





            </div>

        </div>


        <div  style="width:  10%; height: 1325px;font-size: 30px;   background-color: #f6fdf6">
            <div style=" margin-left:8px;font-size: 24px; width:9% ;text-align: center" class="total ">Total = <span class="total-price">$

                    <?php
        echo $SUM['total'];
                    ?>

                </span></div>
        </div>



            <div  class="paymant"style="width:  35%;  height: 1325px;font-size: 30px;  background-color:#f6fdf6;border-left:  1px solid #d1e9c8">
                <center><span>payment details</span></center>
                <div class="cont">

        <form action="order.php" method="get">
        <div class=" row">

            <div class="col">
                <h3 class="title"> billing address</h3>
<div class="inputBox">
    <span>Full name :</span>
    <input  required type="text" placeholder="Majd Thaer">
</div>

   <div class="inputBox">
    <span>email :</span>
     <input required type="text" placeholder="example@example.com">
</div>

    <div class="inputBox">
       <span>address:</span>
     <input required type="text" placeholder="room - street - locality">
    </div>
      <div class="inputBox">
    <span> city:</span>
      <input required type="text" placeholder="Nablus">
    </div>
<div class ='flex'>
     <div class="inputBox">
    <span>state:</span>
       <input required type="text" placeholder="palestine">
      </div>

    <div class="inputBox">
        <span>zep code:</span>
        <input required type="text" placeholder="123 456">
    </div>

</div>
            </div><!---->

            <div class="col">
                <h3 class="title"> payment </h3>

                <div class="inputBox">
                    <span>  cards accepted:</span>
                    <img src="img/card.png">
                </div>

                <div class="inputBox">
                    <span>name on card :</span>
                    <input required type="text" placeholder="">
                </div>

                <div class="inputBox">
                    <span>credit card number:</span>
                    <input required type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span> exp month:</span>
                    <input required type="text" placeholder="january">
                </div>
                <div class ='flex'>
                    <div class="inputBox">
                        <span>exp year:</span>
                        <input required type="text" placeholder="2022">
                    </div>

                    <div class="inputBox">
                        <span>CVV:</span>
                        <input required type="text" placeholder="1234">
                    </div>

                </div>
            </div><!---->



        </div>
<input type="submit" value="proceed to checkout " class=" submit-btn">  <!--button//////////-->

        </form>





    </div>








    </div>
    </div>

<!---------------------------------->

<center>
    <div style=" padding-top: 10px ;  display:flex; flex-direction:row ;" class="end">





                            <div class="footer-col" >
                                <h4 style="padding-bottom: 20px" >Contact Info</h4>
                                <ul type="none">
                                    <li> <a href="tel:+970-569-079-317"><i class="fa-solid fa-phone"></i>+970-569-079-317 </a> </li>
                                    <li> <a href="tel:+970-568-077-309"> <i class="fa-solid fa-phone"></i>+970-568-077-309 </a></li>
                                    <li><a href="mailto:alanees@gmail.com" ><i class="fa-solid fa-envelope"></i>alanees@gmail.com</a> </li>
                                </ul>
                            </div>


                    <div style="padding-top: -10px" class="footer-col">
                        <h4 style="padding-bottom: 25px" >Online Shop </h4>
                        <ul>
                            <li><a href="
                        <?php
                                if(isset($_SESSION["LOGGEDIN"])){

                                    if ($_SESSION["LOGGEDIN"]==0)      {
                                        echo"Signin&Signup.php";
                                    }
                                }
                                ?>

"> <i class="fa fa-user-plus"></i>sign up</a></li>
                            <li><a href=" <?php
                                if(isset($_SESSION["LOGGEDIN"])){

                                    if ($_SESSION["LOGGEDIN"]==0)      {
                                        echo"Signin&Signup.php";
                                    }
                                }
                                ?>
"><i class="fa-solid fa-right-to-bracket"></i>sign in</a></li>
                            <li><a href="shop.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i>bag</a></li>
                        </ul>
                    </div>



                    <div style="">
                        <h4 style="padding-bottom: 20px" >Quick Link </h4>
                        <ul style="width: 45%">
                            <li style="padding-top: 10px"><a href="home.php">Home</a></li>
                            <li><a href="EnglishBooks1.php">English Books</a></li>
                            <li><a href="ArabicBooks1.php"style="font-family: ArabicFont,serif">الكتب العربية</a></li>
                            <li><a href="ChildrenBooks1.php">Children Books</a></li>
                            <li><a href="FrenchBooks.php">French Books</a></li>
                        </ul>
                    </div>

<div>
                    <center> <img style="  width: 200px;border-radius:30px;padding-left: 20px"   src="img\Logo.png"></center>
                    <pre style="font-family:cursive ">
    Al-Anees
        Is an online shop library available
              in more than one category and strives
       to build a human being revive the
           relationship between the book and'
   its owner believing that every
           reader today is a leader tomorrow.
              </pre>

</div>

    </div>

    <div class="media">
        <center>
            <a class="icons"href="https://www.facebook.com/profile.php?id=100041528513681&mibextid=ZbWKwL"> <i class="fa-brands fa-facebook fa-2xl"></i></a>
            <a class ="icons"href="https://www.instagram.com/sharbainsbookshop/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR1q1OepZ5jYOFEI-fIlkefyyfJhPVde9FtIsj4iPquyB6I3E7-oOUx7GjU">  <i class="fa-brands fa-instagram fa-2xl"></i></a>
        </center>
    </div>

    <center> <img style class="endimg" src="img\img_1.png"></center>

</center>

</section>

<script src="scripts/shopj.js" type="text/javascript"> </script>

<!------------------------------------------------------------------------->



</body>
</html>