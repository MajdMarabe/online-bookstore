<?php session_start(); ?>
<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in || Sign up form</title>
  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css stylesheet -->
  <link rel="stylesheet" href="SignStyle.css">
  <link rel="icon" type="image/x-icon" href="imgs/logo2.png">
<!--    <script type="text/javascript">-->
<!--        function  forget(){-->
<!--            --><?php
//            include "connection.php";
//            $USERNAME="document.getElementById('USERNAME').value";
//            $query = "select * from USERS_TB where USERNAME='$USERNAME'";
//
//            if($result = $db->query($query)) {
//                while ($row = $result->fetch_assoc()) {
//
//                    if ($USERNAME == $row['USERNAME']) {
//                        $msg= $row['PASSWORD'];
//                        mail($row['EMAIL'],"your alanees account password",$msg);
//                       echo "sent";
//                    }
//                }
//            }
//            ?>

   </script>

</head>
<body>

<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="signup.php" method="get">
      <h1>Create Account</h1>
      <span> use your email for registration</span>
      <div class="infield">
        <input type="email" placeholder="Email" name="EMAIL" required/>
        <label></label>
      </div>


      <div class="infield">
        <input name ="USERNAME"type="text" placeholder="Name" required />
        <label></label>
      </div>

      <div class="infield">
        <input name="PASSWORD" type="password" placeholder="Password" required />
        <label></label>
      </div>

        <?php
        if(isset($_SESSION['MSG'])) {?>
            <p style="margin-left: -200px;margin-bottom 0;margin-top: 0 ;color: red;text-align: left"><?php echo $_SESSION['MSG'] ?></p>
            <?php
            unset($_SESSION['MSG']);
        }
        elseif (isset($_SESSION['MS'])){?>
            <p style="margin-left: -200px;margin-bottom 0;margin-top: 0 ;color: red;text-align: left"><?php echo $_SESSION['MS'] ?></p>
            <?php
            unset($_SESSION['MS']);
        }

        ?>
      <button name="insert">Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">

    <form action="login.php" method="get">
      <h1>Sign in</h1>
      <span> use your account</span>
      <div class="infield">
        <input  id="USERNAME"name ="USERNAME"type="text" placeholder="Name" required />
        <label></label>
      </div>
        <?php
if(isset($_SESSION["invalid user"])){
        if ($_SESSION["invalid user"]==1)      {?>

            <p style="margin-left: -200px;padding: 0px;margin-bottom -600px;margin-top: 0px ;color: red;text-align: left"> worng username</p>
            <?php
            $_SESSION["invalid user"]=0;
        }
}
        ?>

        <div class="infield">
        <input name="PASSWORD" type="password" placeholder="Password" required/>
        <label></label>
      </div>
        <?php
if(isset($_SESSION["invalid pass"])){
      if ($_SESSION["invalid pass"]==1)      {?>

         <p style="margin-left: -200px;margin-top: 0 ;color: red;text-align: left"> worng password</p>
<?php
          $_SESSION["invalid pass"]=0;
      }
}
?>



      <button>Sign In </button>

    </form>
<!--      --><?php
//      session_start();
//      if ($_SESSION["invalid pass"]==1)      {
//
//          echo "<script>alert('wrong password')</script>";
//
//      }
//      elseif ($_SESSION["invalid user"]==1)
//          echo "<script>alert('wrong password')</script>";
//
//      ?>

  </div>
  <div class="overlay-container" id="overlayCon">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button>Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
        <p>Enter your personal details and start journey with us</p>
        <button>Sign Up</button>
      </div>
    </div>
    <button id="overlayBtn"></button>
  </div>
</div>



<!-- js code -->
<script>
const container = document.getElementById('container');
const overlayCon = document.getElementById('overlayCon');
const overlayBtn = document.getElementById('overlayBtn');

overlayBtn.addEventListener('click',()=>{
  container.classList.toggle('right-panel-active');
  overlayBtn.classList.remove('btnScaled');
  window.requestAnimationFrame(()=> {
    overlayBtn.classList.add('btnScaled');
  })
});

</script>

</body>
</html>