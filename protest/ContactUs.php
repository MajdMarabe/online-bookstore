<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Contact Us Page</title>
<link rel="stylesheet" href= "ContactUs.css">
</head>
<body>
<div class="contactUs">
        <div class="title">
        <h2>Get in Touch</h2>
</div>
        <div class="box">
        <div class= "contact form">
<!--                form              -->
                <h3>Send a Message</h3>
                <form action="comment.php" method="get">
                <div class="formBox">
                <div class="row50">
                <div class="inputBox">
                <span> First Name</span>
                <input type="text" placeholder="John">
                </div>
                <div class="inputBox">
                   <span> Last Name</span>
                   <input type="text" placeholder="Doe">
                </div>
                </div>
                        <div class="row50">
                                <div class="inputBox">
                                        <span>Email</span>
                                        <input type="text" placeholder="johndoe@gmail.com">
                                </div>
                                <div class="inputBox">
                                        <span>Mobile</span>
                                        <input type="text" placeholder="+970 598 820 544">
                                </div>
                        </div>
                        <div class="row100">
                                <div class="inputBox">
                                        <span>Message</span>
                                        <textarea name="comment"placeholder="Write your message here..."></textarea>
                                </div>
                        </div>
                        <div class="row100">
                                <div class="inputBox">
                                        <input type="submit" value="Send"style="background: #b0d99f;color: #ffff;border: none;font-size: 1.1em;max-width: 120px;font-weight: 500;cursor: pointer;padding: 14px 15px;">
                                </div>
                        </div>


                </div>
                </form>
           <a href="home.php"> <button style="background: #b0d99f;color: #ffff;border: none;font-size: 1.1em;max-width: 120px;font-weight: 500;cursor: pointer;padding: 14px 15px;">skip    </button></a>

        </div>
<!--                info box          -->
        <div class="contact info">
            <h3>Contact info</h3>
            <div class="infoBox">
               <div>
                   <span><ion-icon name="location-outline"></ion-icon></span>
                   <p>Palestine-Nablus</p>
               </div>
                <div>
                    <span><ion-icon name="mail-outline"></ion-icon></span>
                    <a href="mailto:alanees@gmail.com">alanees@gmail.com</a>
                </div>
                <div>
                    <span><ion-icon name="call-outline"></ion-icon></span>
                    <a href="tel:+970598820544">+970 598 820 544</a>
                </div>
<!--                Social Media Links                                  -->
                <ul class="sci">
                  <li><a href="https://www.facebook.com/profile.php?id=100041528513681&mibextid=ZbWKwL"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li><a href="https://www.instagram.com/sharbainsbookshop/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR1q1OepZ5jYOFEI-fIlkefyyfJhPVde9FtIsj4iPquyB6I3E7-oOUx7GjU"><ion-icon name="logo-instagram"></ion-icon></a></li>

                </ul>
            </div>
        </div>
<!--                map               -->
        <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27002.037586647886!2d35.2270796901481!3d32.22430787953399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ce0f650425697%3A0x7f0ba930bd153d84!2sNablus!5e0!3m2!1sen!2s!4v1683718277395!5m2!1sen!2s"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
