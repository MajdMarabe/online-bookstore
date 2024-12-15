<?php
session_start();
$mysqli = require __DIR__ . "/database.php";
$sql="SELECT * FROM users_tb where Admin='0'

";
$all_product= $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users info||Admin</title>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e64549423e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="product.css">


    <link rel="icon" type="image/x-icon" href="imgs/logo2.png">

</head>
<body>

<section>
    <nav>
        <div class="icons">
            <?php

            if(isset($_SESSION["LOGGEDIN"])){

                if ($_SESSION["LOGGEDIN"]==1)      {
                    $f= $_SESSION['USERNAME'];?>

                    <span class="sign"><pre  style="font-family:cursive" ><b><?php  print "Welcome ". $f." !";?></b></pre></span>
                    <a href="logout.php"> <span class="sign">Logout</span><i class="fa-solid fa-right-from-bracket"></i></a>

                    <?php

                }
                else if ($_SESSION["LOGGEDIN"]==0) {
                    ?>
                    <a href="Signin&Signup.php"> <span class="sign">Signup</span> <i class="fa fa-user-plus"></i></a>
                    <a href="Signin&Signup.php"><span class="sign">Login</span> <i class="fa-solid fa-right-to-bracket"></i> </a>
                    <?php
                }
            }


            ?>
        </div>
        <div class="header-inner section-inner">
            <div class="logo">
                <a href="home.php"><img src="img\img_1.png " width="350" height="90">  </a>

            </div><!--img-->

            <div class="box">
                <form action="search.php" method="get">
                    <input type="search" name="search"  placeholder="Search by Title  , Author"  size="70">
                    <button name="search2" class="fa-solid fa-magnifying-glass" style="background-color:#f6fdf6; border:#f6fdf6;"></button>
                    <br>
                </form>
            </div>



        </div>

        <div class ="menu-section">

            <li>  <a href="home.php">Home</a> </li>
            <li>    <a href="EnglishBooks1.php">English Books</a> </li>
            <li>    <a href="ArabicBooks1.php">كتب عربية</a> </li>
            <li>   <a href="ChildrenBooks1.php">Children</a> </li>
            <li>   <a href="FrenchBooks.php">French Books</a> </li>
            <li>
                <?php

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
    <div style="display: flex ; flex-direction: column ">
        <!-- 1--> <div style="box-shadow:  2px 2px 10px #000; background-color:#f6fdf6; width:  100%; height: 30%; padding-top:5px;text-align: center;font-size: 60px; margin-top:140px;border-bottom: 1px solid #d1e9c8">  <h1 style="margin-top: 70px">Users comments</h1> </div>
        <!-- 2--> <div style="display: flex ; flex-direction: row ">
            <div class="right-side" style="width:  20%; border-top: #d1e9c8 solid 1px">


                <div class="gif1">
                    <img width="80" height="80" src="imgs/geography.gif">
                </div>
                <div class="gif2">
                    <img width="80" height="80" src="imgs/book%20(5).gif">
                </div>

                <ul class="product-categories">

                    <li>
                        <a href="admin.php" class="arabic"> <b> Books</b> </a>
                    </li>

                    <li>
                        <a href="authors.php" class="children">Authors</a>
                    </li>

                    <li>
                        <a href="users.php" class="english">  Users </a>
                    </li>

                    <li>
                        <a href="showorders.php" class="french">  Orders </a>
                    </li>
                    <li>
                        <a href="userscomment.php" class="french">  users comments </a>                    </li>
                    <li>
                        <a href="trend.php" class="french">  New Arrivals & Global Trends </a>
                    </li>
                </ul>
            </div>
            <div class="Books" style="display: flex ; flex-direction: column ;width:  80%;font-size: 20px;   background-color: #f6fdf6 ; border-top: #d1e9c8 solid 1px">
                <div style="display: flex ; flex-direction: row ;>
<form action="deletebook.php" method="get">



                </form>
            </div>
           <div style="display: flex; flex-direction: row;flex-wrap: wrap">

                            <?php
                            while($row=mysqli_fetch_assoc($all_product)){?>

<?php
if( is_null( $row['comment'])){}
else{

?>
    <div class="single-work"style=" margin: 70px; padding:20px;display: flex; flex-direction: column;border: black 1px solid;background-color:#d1e7cb
; width: 500px; height: 300px ">
        <div style="font-size: 20px"> <i class="fa-solid fa-user fa-2xl" style="color: #1f5137;"></i><b ><?php echo $row['USERNAME']; ?></b><br></div>
        <div style="font-size: 15px; margin-top: 10px" >        <?php echo  $row['EMAIL'];?></div><br>
        <pre> comment: <br></pre> <div style="background-color: #e0f0db
;width: 100% ; height:100%; border: black solid 1px; padding: 15px">    <?php echo  $row['comment'];?></div>

    </div>
    <?php
}
?>


                        <?php
                        }
                        ?>




                </div>





        </div>





    </div>

    <center>
        <div style="width: 100%; background-color:  #e0f1da">
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
                        <li><a href=""> <i class="fa fa-user-plus"></i>sign up</a></li>
                        <li><a href=""><i class="fa-solid fa-right-to-bracket"></i>sign in</a></li>
                        <li><a href=""><i class="fa-sharp fa-solid fa-cart-shopping"></i>bag</a></li>
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
    </div><!-- -->
</section>



</body>
</html>
