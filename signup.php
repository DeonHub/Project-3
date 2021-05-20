<?php 

session_start();

include("connections.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
	
$user_name = $_POST['user_name'] ;
$password = $_POST['password'] ;

if (!empty($user_name) && !empty($password) && !is_numeric($user_name))
{


$user_id = random_num(20); 
$query = "INSERT INTO users (user_id,user_name,password) VALUES ('$user_id','$user_name','$password')";

mysqli_query($con,$query);

header("location: login.php");
die;

}
else
{

	echo "Please enter a valid information!";
}

}

 ?>




<!DOCTYPE html>
 <html lang="en">
 <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />


  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="styles.css" />

  <title>Impraim Phones and Accessories</title>

<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
 </head>
 
  <body>

<!-- Header -->
  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="login.php" class="scroll-link">
              Impraim Phones & Accessories
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">Impraim Phones & Accessories</span>
              <a href="login.php" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="login.php" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="login.php" class="nav__link scroll-link">Shop</a>
              </li>
              <li class="nav__item">
                <a href="login.php" class="nav__link scroll-link">Blog</a>
              </li>
              <li class="nav__item">
                <a href="login.php" class="nav__link scroll-link">Contact</a>
              </li>
            </ul>
          </div>

<!--Profile icon work -->
          <div class="nav__icons">
            <a href="login.php" class="icon__item">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>

<!--Search icon work -->
            <a href="login.php" class="icon__item">
              <svg class="icon__search">
                <use xlink:href="./images/sprite.svg#icon-search"></use>
              </svg>
            </a>


<!--Cart icon work -->
            <a href="login.php" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total">0</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
</header>
 
 	
 	


<div class="bg-img">
      <div class="content">
      	<div class ="textdecor">
        <header>Signup Form</header>
        </div>
        <form method="POST">

        

          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" id="text" name = "user_name" required placeholder="Username" maxlength="40" autocomplete="off">
          </div>
          <br>
              <div class="field">
            <span class="fa fa-envelope"></span>
            <input type="email" id="email" name="email" required placeholder="Email Address" autocomplete="off">
          </div>
<div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" id="text"  name= "password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
          <br>

          <div class="field ">
            <span class="fa fa-lock"></span>
            <input type="password" id="password"  name= "password_confirm" class="pass-key" required placeholder="Confirm Password">
            <span class="show">SHOW</span>
          </div>
          <br>
              <div class="field">
            <span class="fa fa-phone"></span>
            <input type="phone" id = "phone" name="phone" placeholder="Phone" autocomplete="off">
          </div>
          <br>



<!-- <div class="pass">
            <a href="#">Forgot Password?</a>
          </div> -->
<div class="field">
         <input type="submit" id="button" name="register_user" value="SIGNUP">
              </div> 
</form>



<div class="signup">
Already have an account?
          <a href="login.php"> <b>Login</b> </a>
        </div>
</div>
</div>






 <!-- Footer -->
 <div style="padding-top: 380px">
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer-top__box">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>

        <div class="footer-top__box">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-location"></use>
              </svg>
            </span>
            25th Avenue Street, Winneba, Central Region
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-envelop"></use>
              </svg>
            </span>
            impraimgideon89@gmail.com
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-phone"></use>
              </svg>
            </span>
            +233-558-87873
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
              </svg>
            </span>
           Winneba, Central Region
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer-bottom__box">

      </div>
      <div class="footer-bottom__box">

      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

<script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


 </body>
 </html>