<?php
session_start();

$mysqli = require __DIR__ . "/database.php";
if(isset($_GET["isbn"])) {
    $isbn = $_GET["isbn"];
}else{
    $isbn = $_SESSION['isbn'];
}
$query=
"SELECT * FROM BOOK B
LEFT JOIN AUTHOR A ON A.AUTHOR_ID = B.AUTHOR_ID where ISBN = $isbn 
";
$product= $mysqli->query($query);
$row=mysqli_fetch_assoc($product);
$_SESSION['isbn']=$row['isbn'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?php
      echo "Book || ", $row['bookname'];
      ?></title>
  <link rel="icon" type="image/x-icon" href="img/logo2.png">
  <link rel="stylesheet" href="styles/shoosebookS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

            <img src="<?php echo $row['picture'];?>">
          </div>
        </div>
<div class="product-div-right">
  <span class="product-price " > Books _
      <?php
      if($row['language_id']=='1'){
          echo "Arabic";
      }
      else if($row['language_id']=='2'){
          echo "English";
      }
      else if($row['language_id']=='3'){
          echo "Children";
      }
      else if($row['language_id']=='4'){
          echo "French";
      }

      ?>



  </span>
<span  style="font-size:40px" id="product-name">
    <?php
    echo  $row['bookname'];
    ?>
</span>

    <div style="padding-top:20px; padding-left: -90px"  >
<span class="product-price" style=" font-size: 25px"> <?php echo $row['authorname'];?><br><br><br><i class="fa-thin fa-dollar-sign"></i><?php echo $row['price'];?></span>
 <!-- <div class="product-rating">
    <span> <i class="fa-solid fa-star"></i></span>
    <span> <i class="fa-solid fa-star"></i></span>
    <span> <i class="fa-solid fa-star"></i></span>
    <span> <i class="fa-solid fa-star"></i></span>
    <span> <i class="fa-solid fa-star-half-stroke"></i></span>

  </div> -->
<form action="addcart.php" method="get">
  <div style="padding-top:100px " class="btn-groups">

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
        if ($row['allqantity']=='0'){?>
            <pre style="font-family:cursive ; font-size: 20px; color: red"> soldout!</pre>

        <?php
            $_SESSION["sold"]='1';
        }


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

      <p class = "product-description">
      <div style=" overflow:hidden;font-family:cursive ; font-size: 20px"> “<?php echo $row['description'];?></div>
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
                      <li> <a href="tel:+970-568-077-309"> <i class="fa-solid fa-phone"></i>+970-568-077-309 </a></li>
                      <li><a href="mailto:aneesstore@gmail.com" ><i class="fa-solid fa-envelope"></i>aneesstore@gmail.com</a> </li>
                    </ul>
                  </div>
            </td>
            <td style="width:  15% ">
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
            </td>
            <td style="width:  20%">

              <div class="footer-col"  style="padding-top: 60px">
                <h4 style="padding-bottom: 10px" >Quick Link </h4>
                <ul>
                    <li style="padding-top: 10px"><a href="home.php">Home</a></li>
                    <li><a href="EnglishBooks1.php">English Books</a></li>
                    <li><a href="ArabicBooks1.php"style="font-family: ArabicFont,serif">الكتب العربية</a></li>
                    <li><a href="ChildrenBooks1.php">Children Books</a></li>
                    <li><a href="FrenchBooks.php">French Books</a></li>
                </ul>
              </div>
            </td>
            <td style="width:  35%">
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
            </td>
          </tr>

        </table>

      </div>

      <div class="media">
        <center>
         <a class="icons"href="https://www.facebook.com/profile.php?id=100041528513681&mibextid=ZbWKwL"> <i class="fa-brands fa-facebook fa-2xl"></i></a>
        <a class ="icons"href="https://www.instagram.com/sharbainsbookshop/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR1q1OepZ5jYOFEI-fIlkefyyfJhPVde9FtIsj4iPquyB6I3E7-oOUx7GjU">  <i class="fa-brands fa-instagram fa-2xl"></i></a>
        </center>
      </div>

     <center> <img style class="endimg" src="img\img_1.png"></center>

      </div>


    </div>

  </div>


</section>





</body>
</html>

