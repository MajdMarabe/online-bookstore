<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <title>Al-Anees-an online shop library </title>
    <link rel="icon" type="image/x-icon" href="img/logo2.png">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
                <li>     <div class="icons"><?php

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


    <div class="no-search-results-form thin" style="text-align: center;
    margin-top: 300px;
    font-size: 25px;
    line-height: 44px;
     color: #089da1 ;

    margin-bottom: 100px;

">
        <h1 class="entry-title">
            We could not find any results for your search.<br>
            Search works best if the searched words are more than two letters long. </h1>
    </div>

        <!---------------------------------->
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



    </div>


    </div>


</section>


</body>
</html>