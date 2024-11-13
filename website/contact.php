<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ByteBazaar</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <section id="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt="" /></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>

                <?php

                if ($_SESSION['aid'] < 0) {
                    echo "   <li><a href='login.php'>login</a></li>
            <li><a href='signup.php'>SignUp</a></li>
            ";
                } else {
                    echo "   <li><a href='profile.php'>profile</a></li>
          ";
                }
                ?>
                <li><a href="admin.php">Admin</a></li>
                <li id="lg-bag">
                    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                </li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#GameTillTheEnd</h2>

        <p>Providing Premium Gaming Experience</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Lovely Professional University, Punjab</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>byteBazaar@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>+91 0123456789</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9am to 5pm</p>

                </li>
            </div>
        </div>
        <div class="map">
        <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.6284664256713!2d75.695257!3d31.255467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5ba5a7a89e8f%3A0xe0d9c9858888ed4a!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1607935659996!5m2!1sen!2sin" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
                </iframe>

        </div>
    </section>

    <section id="form-details">
        <div class="people">
            <div>
                <img src="img/people/a.jpeg" alt="" />
                <p>
                    <span>Gulshan Jangid</span> Founder and CEO <br />
                    Phone: +91 7627039439 <br />
                    Email:gulshanjangid03@gmail.com
                </p>
            </div>
            <div>
                <img src="img/people/b.jpeg" alt="" />
                <p>
                    <span>Prabhat Sharma</span> Executive Marketing Manager <br />
                    Phone: +03000101230 <br />
                    Email:edd@gmail.com
                </p>
            </div>
            <div>
                <img src="img/people/c.jpeg" alt="" />
                <p>
                    <span>Anand</span> Customer Service Officer <br />
                    Phone: +03400190835 <br />
                    Email:Eddy@gmail.com
                </p>
            </div>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" />
            <h4>Contact</h4>
            <p>
                <strong>Address: </strong> Lovely Professional University, Punjab

            </p>
            <p>
                <strong>Phone: </strong> +92324953752
            </p>
            <p>
                <strong>Hours: </strong> 9am-5pm
            </p>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="cart.php">View Cart</a>
            <a href="wishlist.php">My Wishlist</a>
        </div>
        <div class="col install">
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" />
        </div>
        <div class="copyright">
            <p>2021. byteBazaar. HTML CSS </p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>

<script>
window.addEventListener("unload", function() {
  // Call a PHP script to log out the user
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "logout.php", false);
  xhr.send();
});
</script>