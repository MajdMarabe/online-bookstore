<?php
session_start();
$mysqli = require __DIR__ . "/database.php";
$sql="SELECT * FROM trend
";
$all_product= $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <title>Al-Anees-an online shop library </title>
    <link rel="icon" type="image/x-icon" href="img/logo2.png">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AL-Anees||home</title>
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
                <a href="home.html"><img src="img\img_1.png " width="350" height="90">  </a>

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

    <div class="slider">
<figure>
            <div  style="height:900px" class ="slide">
                <h1> Gambar satu</h1>
                <img src="img\1.png">
            </div>
    <div class ="slide">
        <h1> Gambar satu</h1>
        <img src="img\2.png">
    </div>
    <div class ="slide">
        <h1> Gambar satu</h1>
        <img src="img\3.png">
    </div>
    <div class ="slide">
        <h1> Gambar satu</h1>
        <img src="img\4.png">
    </div>
    <div class ="slide">
        <h1> Gambar satu</h1>
        <img src="img\5.png">
    </div>
</figure>
    </div>

    <center> <div style=" margin-top :100px;border-top:  #bfbfbf 1px solid ; width:1400px ;"></div></center>
    <div style="display: flex ; flex-direction: column " >
        <!-------------------------------->
        <center>
<div class="works-area" style="margin-top: 150px" >
    <div class="conta">
        <div class="ro">

        </div>

        <div class="ro">
            <div class="col-md-4 col-sm-6">
<a href="ChildrenBooks1.php">
<div class="single-work">
    <img class="m" style="" src=" img\arrivalforkids.png">
    <div class="overlay-text">
        <h3 class="title"> web design</h3>
        <span class="post"> project</span>
    </div>
</div>
</a>
            </div>


        </div>

    </div>


</div><!-------------------------------->
        </center>
       <center> <div style=" margin-top :100px;border-top:  #bfbfbf 1px solid ; width:1400px ;"></div></center>

        <center>
            <div class="works-area" style="margin-top: 150px" >
                <div class="conta">
                    <div class="ro">

                    </div>

                    <div class="ro">
                        <div class="col-md-4 col-sm-6">
<a href="EnglishBooks1.php">
                            <div class="single-work">
                                <img src=" img\arr.png">
                                <div class="overlay-text">
                                    <h3 class="title"> web design</h3>
                                    <span class="post"> project</span>
                                </div>
                            </div>
</a>
                        </div>


                    </div>

                </div>


            </div><!-------------------------------->
        </center>
        <center> <div style=" margin-top :100px;border-top:  #bfbfbf 1px solid ; width:1400px ;"></div></center>

        <div class="pic" style="display: flex ; flex-direction: column " >
          <center> <span style="font-size: 30px ">New Arrivals & Global Trends </span></center>
        <div class="pic" style="display: flex ; flex-direction: row ; flex-wrap: wrap" >

            <?php
            while($row=mysqli_fetch_assoc($all_product)){?>
            <div class="box1">
                <a href="choosebook.php?isbn=<?php echo $row['isbn']; ?>" class="Product One">
                    <img width="150" height="190" src="<?php echo $row['picture'] ?>" >
                    <br>
                    <h2 Product One Name align="center" ><?php echo $row['bookname'] ?> </h2>
                    <p align="center"><b>George R.R. Martin</b></p>

                </a>
            </div>


            <?php
            }
            ?>



        </div>
        </div>
        <center> <div style=" margin-top :100px;border-top:  #bfbfbf 1px solid ; width:1400px ;"></div></center>
        <div class="pic" style="display: flex ; flex-direction: column " >
            <center> <span style="font-size: 30px ">Top Authors</span></center>
        <div class="pic" style="display: flex ; flex-direction: row " >
<div style="display: flex ;flex-direction: column">
    <center> <div class="box2">
                <a href="Mohmmad.html">
                    <div class="image" > <img src="img\mohmmad.png" width="150" height="150"> </div>

                </a>
            </div> </center>
          <center> <h3>محمد طه</h3> </center>
</div>

  <div style="display: flex ;flex-direction: column">
            <div class="box2">
                <a href="osama.html">
                    <div class="image" > <img src="img\osama.png" width="150" height="150"> </div>

                </a>
            </div>
      <center><h3>أسامة الشاذلي</h3></center>
  </div>
     <div style="display: flex ;flex-direction: column">
            <div class="box2">
                <a href="ashraf.html">
                    <div class="image" > <img src="img\ashraf.png"> </div>

                </a>
            </div>
         <center> <h3>أشرف العشماوي</h3> </center>
     </div>

            <div style="display: flex ;flex-direction: column">

            <div class="box2">
                <a href="robert.html">
                    <div class="image" > <img src="img\robert.png"> </div>

                </a>

            </div>
                <center> <h3>Robert Kiyosaki</h3>  </center>
            </div>

            <div style="display: flex ;flex-direction: column">
                <center>
            <div class="box2">
                <a href="colleen.html">
                    <div class="image" > <img src="img\colleen.png" width="150" height="150"> </div>

                </a>
            </div> </center>
                <center> <h3>Colleen Hoover</h3>  </center>
            </div>


        </div>
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
                    <li><a href="Signin&Signup.php"> <i class="fa fa-user-plus"></i>sign up</a></li>
                    <li><a href="Signin&Signup.php"><i class="fa-solid fa-right-to-bracket"></i>sign in</a></li>
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