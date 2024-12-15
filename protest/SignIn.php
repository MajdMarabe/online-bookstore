<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "connection.php";


    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up form</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="SignStyle.css">
    <link rel="icon" type="image/x-icon" href="imgs/logo2.png">
</head>
<body>

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h1>Create Account</h1>
            <span> use your email for registration</span>
            <div class="infield">
                <input name="EMAIL" type="email" placeholder="Email" name="email" required/>
                <label></label>
            </div>
            <div class="infield">
                <input type="text" placeholder="Name" required />
                <label></label>
            </div>
            <div class="infield">
                <input  type="password" placeholder="Password" required />
                <label></label>
            </div>
            <button type="submit"> Sign In</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="get" action="Login.php">
            <h1>Sign in</h1>
            <span> use your account</span>
            <div class="infield">
                <input name="USERNAME" type="text" placeholder="Name" required />
                <label></label>
            </div>
            <div class="infield">
                <input name="PASSWORD"  type="password" placeholder="Password" required />
                <label></label>
            </div>
            <input type="submit"> Sign In</input>
        </form>
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