<?php
session_start();
$con = mysqli_connect('localhost','root', '', 'bookstore');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php
        echo "Book || ";
        ?></title>
    <link rel="icon" type="image/x-icon" href="img/logo2.png">
    <link rel="stylesheet" href="styles/shoosebookS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php

    if(isset($_POST['search'])){
        $_SESSION['search']='1';

        $filtervalues = $_POST['search'];
        $sql1 = "SELECT * FROM book WHERE bookname='$filtervalues' ";
        $result1 = mysqli_query( $con, $sql1);
        if(mysqli_num_rows($result1) > 0){
            while($row = $result1->fetch_assoc()) {
                ?>
                <title>
                    <?php
                    echo $row['bookname']
                    ?>
                </title>


                <?php
            }
        }
    }
    else{
        ?>
        <?php
    }
    ?>

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
                <form action="choosebook1.php" method="post">
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
                <li>     <div class="icons">  <?php

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
    <div class="main-wrapper">
        <div class="container">
            <div class ="product-div">
                <div class="product-div-left">
                    <div class="img-container">

                        <?php
                        $con = mysqli_connect('localhost','root', '', 'bookstore');
                        if(isset($_POST['search'])){
                            $_SESSION['search']='1';
                            $filtervalues = $_POST['search'];
                            $sql1 = "SELECT * FROM book WHERE bookname='$filtervalues' ";
                            $result1 = mysqli_query( $con, $sql1);
                            if(mysqli_num_rows($result1) > 0){
                                while($row = $result1->fetch_assoc()) {
                                    ?>
                                    <img src= <?php
                                    echo $row['picture'];
                                    ?>
                                    >
                                    <?php
                                }
                            }
                        }
                        else{
                            ?>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="product-div-right">
                    <?php
                    $con = mysqli_connect('localhost','root', '', 'bookstore');
                    if(isset($_POST['search'])){
                        $filtervalues = $_POST['search'];
                        $sql1 = "SELECT * FROM book WHERE bookname='$filtervalues' ";
                        $result1 = mysqli_query( $con, $sql1);
                        if(mysqli_num_rows($result1) > 0){
                            while($row = $result1->fetch_assoc()) {
                                ?>

                                <span class="product-price " > Books _
                                <?php
                                $id=$row['language_id'];
                                $sql2 = "SELECT * FROM language WHERE language_id = $id ";
                                $result2 = mysqli_query( $con, $sql2);
                                while($row2 = $result2->fetch_assoc()){
                                    echo $row2['languagename']
                                    ?>


                                    </span>
                                    <?php
                                }
                            }
                        }
                        else{
                            ?>
                            <?php
                        }
                    }
                    ?>




                    <?php
                    $con = mysqli_connect('localhost','root', '', 'bookstore');
                    if(isset($_POST['search'])){
                        $filtervalues = $_POST['search'];
                        $sql1 = "SELECT * FROM book WHERE bookname='$filtervalues' ";
                        $result1 = mysqli_query( $con, $sql1);
                        if(mysqli_num_rows($result1) > 0){
                            while($row = $result1->fetch_assoc()) {
                                ?>
                                <span class="product-name">
                                 <?php
                                 echo $row['bookname']

                                 ?>

                             </span>
                                <?php
                            }
                        }
                    }
                    else{
                        ?>
                        <?php
                    }
                    ?>



                    <div style="padding-top:20px; padding-left: -90px"  >
                        <?php
                        $con = mysqli_connect('localhost','root', '', 'bookstore');
                        if(isset($_POST['search'])){
                            $filtervalues = $_POST['search'];
                            $sql1 = "SELECT * FROM book WHERE bookname='$filtervalues' ";
                            $result1 = mysqli_query( $con, $sql1);
                            if(mysqli_num_rows($result1) > 0){
                                while($row = $result1->fetch_assoc()) {
                                    ?>
                                    <?php

                                    $id=$row['author_id'];
                                    $sql2 = "SELECT * FROM author WHERE author_id = $id ";
                                    $result2 = mysqli_query( $con, $sql2);
                                    while($row2 = $result2->fetch_assoc()){
                                        ?>
                                        <span class="product-price" style=" font-size: 25px">
                                            <?php
                                            echo $row2['authorname'];
                                            ?>
                                </span>
                                        <?php
                                    }
                                }
                            }
                        }
                        else{
                            ?>
                            <?php
                        }
                        ?>


                        <?php
                        $con = mysqli_connect('localhost','root', '', 'bookstore');

                        if(isset($_POST['search'])){
                            $filtervalues = $_POST['search'];
                            $sql1 = "SELECT * FROM book WHERE bookname='$filtervalues' ";
                            $result1 = mysqli_query( $con, $sql1);
                            if(mysqli_num_rows($result1) > 0){
                                while($row = $result1->fetch_assoc()) {
                                    ?>
                                    <br>
                                    <span class="product-price" style=" font-size: 25px">

                                          <?php
                                          echo $row['price'];
                                          ?>
                                             <i class="fa-thin fa-dollar-sign"> </i>
                                          </span>

                                    <?php

                                }
                            }

                            else{
                                header("location:bookNotFound.php");
                                ?>


                                <?php

                            }
                        }
                        ?>

                        </span>

                        <form action="addcart.php" method="get">
                            <div style="display:flex; flex-direction:row;padding-top:100px " class="btn-groups">

                                <input name="qantity" class ="num" type="number" min ="1" max="10" step ="1" style="height:50px ; text-align: center "   value="1" >
                                <?php
                                ?>

                                <button type ="submit" class="add-cart-btn"
                                <!--        --><?php
                                //        if($_SESSION["LOGGEDIN"]==0||$_SESSION["ADMIN"]==1 )
                                //        {
                                //        ?>
                                <!--            disabled-->
                                <!--        --><?php
                                //        }
                                //        ?>

                                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                add to cart

                                </button>


                            </div>
                        </form>

                        <?php
                        if(isset($_SESSION['added'])) {
                            if ($_SESSION['added']==1){?>

                                <pre style="font-family:cursive ; font-size: 20px; color: red"> the book added to the cart </pre>
                                <?php
                                unset($_SESSION['added']);
                            }
                        }?>


                        <?php
                        if(isset($_SESSION["LOGGEDINM"])||isset($_SESSION["ADMINM"])){
                            if($_SESSION["LOGGEDINM"]==1 )
                            {
                                ?>
                                <pre style="font-family:cursive ; font-size: 20px; color: red"> you need to login to buy</pre>

                                <?php
                                $_SESSION['LOGGEDINM']=0;
                            }
                            elseif ($_SESSION["ADMINM"]==1 ){
                                ?>
                                <pre style="font-family:cursive ; font-size: 20px; color: red"> you cant buy as admin</pre>
                                <?php
                                $_SESSION['ADMINM']=0;
                            }
                        }
                        ?>

                        <p style="margin-top: -40px" class = "product-description">
                            <?php
                            $con = mysqli_connect('localhost','root', '', 'bookstore');

                            if(isset($_POST['search'])){
                                $filtervalues = $_POST['search'];
                                $sql1 = "SELECT * FROM book WHERE bookname='$filtervalues' ";
                                $result1 = mysqli_query( $con, $sql1);
                                if(mysqli_num_rows($result1) > 0){
                                    while($row = $result1->fetch_assoc()) {
                                        ?>
                                        <br>

                        <div style="height: 100px overflow:hidden;font-family:cursive ; font-size: 20px">
                                        <?php
                                        echo $row['description'];
                                        ?>
                    </div>

                                        <?php

                                    }
                                }

                                else{
                                    ?>
                                    <?php
                                }
                            }
                            ?>
                        </p>


                    </div>


                </div>


                <div class="add"></div>





                <ul type="none" class="des"   style=" padding-top: 150px; margin-left: 50px">
                    <li class="d"> <div class="vl"></div></li>
                    <li  > <h3 >Product Details</h3></li>
                    <li>Hodder Paperbacks </li>
                    <li>Romance</li>
                    <li> 9781399713740</li>
                    <li class="d"> <div class="vl"></div></li>
                </ul>
                <!-- *****************************-->





                <!-- *****************************-->
            </div>


            <div style=" padding-top: 10px" class="end">
                <table >
                    <tr>

                        <td style="width:  30%">
                            <div  style=" padding-top: 0px ; font-family:cursive"class="container">
                                <div class="row">
                                    <div class="footer-col">
                                        <h4 style="padding-bottom: 20px" >Contact Info</h4>
                                        <ul type="none">
                                            <li> <a href="tel:+970-569-079-317"><i class="fa-solid fa-phone"></i>+970-569-079-317 </a> </li>
                                            <li> <a href="tel:+970-598-820-544"> <i class="fa-solid fa-phone"></i>+970-598-820-544 </a></li>
                                            <li><a href="mailto:aneesstore@gmail.com" ><i class="fa-solid fa-envelope"></i>Al-aneesstore@gmail.com</a> </li>
                                        </ul>
                                    </div>
                        </td>
                        <td style="width:  15% ">
                            <div style="padding-top: -10px" class="footer-col">
                                <h4 style="padding-bottom: 25px" >Online Shop </h4>
                                <ul>
                                    <li><a href=""> <i class="fa fa-user-plus"></i>sign up</a></li>
                                    <li><a href=""><i class="fa-solid fa-right-to-bracket"></i>sign in</a></li>
                                    <li><a href=""><i class="fa-sharp fa-solid fa-cart-shopping"></i>bag</a></li>
                                </ul>
                            </div>
                        </td>
                        <td style="width:  20%">

                            <div class="footer-col"  style="padding-top: 60px">
                                <h4 style="padding-bottom: 10px" >Quick Link </h4>
                                <ul>
                                    <li style="padding-top: 10px"><a href="">Home</a></li>
                                    <li><a href="">English Books</a></li>
                                    <li><a href="ArabicBooks.html"style="font-family: ArabicFont,serif">الكتب العربية</a></li>
                                    <li><a href="">Children Books</a></li>
                                    <li><a href="">French Books</a></li>
                                </ul>
                            </div>
                        </td>
                        <td style="width:  35%">
                            <center> <img style="  width:150px; height:100px; border-radius:20px; margin-left: 20px; "   src="img\Logo.png"></center>
                            <pre style="font-family:cursive ">
                               Al-Anees
            Is an online shop library available
            in more than one category and strives
            to build a human being revive the
            relationship between the book and'
            its owner believing that every
            reader today is a leader tomorrow.
              </pre>
                        </td>
                    </tr>

                </table>

            </div>

            <div class="media">
                <center>
                    <a class="icons" href="https://www.facebook.com/profile.php?id=100041528513681&mibextid=ZbWKwL" > <i class="fa-brands fa-facebook fa-2xl" style="color:black"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class ="icons"href="https://www.instagram.com/sharbainsbookshop/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR1q1OepZ5jYOFEI-fIlkefyyfJhPVde9FtIsj4iPquyB6I3E7-oOUx7GjU">  <i class="fa-brands fa-instagram fa-2xl" style="color:black "></i></a>
                </center>
            </div>

            <center> <img style class="endimg" src="img\img_1.png"></center>

        </div>


    </div>

    </div>


</section>





</body>
</html>

<!--

        <footer class="footer">
          <div class="Def">
            <img width="130" height="90" src="img/logo2.png" class="Photo1" >
            <pre class="Description" >
                    Al-Anees

        Is an online shop library
        available in more than one category
        and strives to build a human being revive
        the relationship between the book
        and its owner
        believing that every reader today
        is a leader tomorrow.

        </pre>
          </div>
          <div class="container">
            <div class="row">
              <div class="footer-col">
                <h4>company</h4>
                <ul>
                  <li><a href="">contact us</a></li>
                  <li><a href="">our services</a></li>
                  <li><a href="">privacy policy</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>get help</h4>
                <ul>
                  <li><a href="">sign up</a></li>
                  <li><a href="">sign in</a></li>
                  <li><a href=""> bag</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">English Books</a></li>
                  <li><a href="ArabicBooks.html"style="font-family: ArabicFont,serif">الكتب العربية</a></li>
                  <li><a href="">Children Books</a></li>
                  <li><a href="">French Books</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>


        <div class="hr">
          <hr class="hr1">
          <hr class="hr2">
          <hr class="hr3">
        </div>


        <div class="Fb">
          <a target="_blank" href="" style=" color: black">
            <i class="fa-brands fa-facebook"></i>
          </a>

        </div>


        <div class="inst">
          <a target="_blank" href="" style=" color: black">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>


        <div class="footer-logo">
          <a href=""><img src="img/footerLogo.jpg" width="500" height="250"> </a>
        </div>






-->