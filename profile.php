<?php 

session_start();

include("connections.php");
include("functions.php");

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Impraim Phones & Accessories</title>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




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





<style>


body, html {
  height: 100%;
  line-height: 1.8; 
}


body{
  height: 100%;
  line-height: 1.8; 

  margin-top: 0px;
}



/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
 min-height: 100%;
}

.w3-bar .w3-button {
  color: black;
  padding: 16px;
}

.new{
 
	color: black;
	font-size: 30px;
	font-weight: 700px;
	font-family: 'Montserat',sans serif;
	padding-left: 50px;
  padding-bottom: 250px;
  margin-bottom: 150px;  

}

.kojo{

padding-top: 30px;
padding-left: 50px;
color: black;
font-size: 50px;
}

.log{
border: 2px groove black;
border-radius: 5px;
background-color: transparent;
margin-top: 25px;
padding-top: 20px;
color: black;

}

.kojo.new{

   background-image: url('images/banner_01.png');
  background-repeat: no-repeat;
  background-position: right;
  background-attachment: scroll;
}

.cap{

	text-transform: capitalize;
	text-decoration: oblique;
  color: black;
}
</style>

</head>




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
            <a href="profile.php" class="scroll-link">
              Impraim Phones & Accessories
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">Impraim Phones & Accessories</span>
              <a href="profile.php" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="profile.php" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="product2.html" class="nav__link scroll-link">Shop</a>
              </li>
              <li class="nav__item">
                <a href="#news" class="nav__link scroll-link">Blog</a>
              </li>
              <li class="nav__item">
                <a href="contact.php" class="nav__link scroll-link">Contact</a>
              </li>
              
            </ul>
          </div>



          <div class="nav__icons">


    <!--Profile icon work -->        
            <a href="profile.php" class="icon__item">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>



<!--Cart icon work -->
            <a href="cart.html" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total"></span>
            </a>


<!--Logout icon work -->
            <a href="logout.php" class="icon__item">
              <svg class="icon__arrow-right2">
                <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
              </svg>
            </a>




          </div>
        </nav>
      </div>
    </div>









<body>
  <div style="background-image: url(images/banner_01.png); background-repeat: no-repeat; background-attachment: scroll; background-position: right; padding-top: 0px; animation:">
<div class="kojo">
<div class="cap">Hello,<?php echo $user_data['user_name']; ?>
</div>
</div>
<div class="new">
<h1>Welcome to Impraim Phones & Accessories <br><p style="font-size:15px;">Get the best deals. 50% off all our products</p></h1>
 <div class="collection__content">
  <div class="collection__data">
    <div style="font-size: 15px; text-align:left; margin-left: -650px;">
<p><a href="product2.html" class="">Shop Now</a></p>
</div>
</div>
</div>

</div>




<br><br><br>











 
</div>


<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large"><b>Responsive Devices</b></p>
      <p>Pages render well on a variety of devices and window or screen sizes from minimum to maximum display size</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Customer Satisfaction</b></p>
      <p>"If we can keep our competitors focused on us while we stay focused on the customer, ultimately we'll turn out all right."</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Quality Design</b></p>
      <p>"The public is more familiar with bad design than good design. It is, in effect, conditioned to prefer bad design, because that is what it lives with."</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>24/7 Support</b></p>
      <p>“To earn the respect (and eventually love) of your customers, you first have to respect those customers.”</p>
    </div>
  </div>
</div>

 























    <!-- Hero -->
    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">

          <ul class="glide__slides">


         


            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span>New Inspiration 2021</span>
                  <h1>PHONES MADE FOR YOU!</h1>
                  <p>Trending from mobile phones to every accessory style collection</p>
                  <a href="product2.html"><button class="hero__btn">SHOP NOW</button></a>
                </div>
                <div class="hero__right">
                  <img class="banner_02" src="./images/banner_02.png" alt="banner2" />
                </div>
              </div>
            </li>

            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span class="">Latest model 2021</span>
                  <h1 class="">HEADPHONES MADE FOR YOU!</h1>
                  <p>Best headphones in the game style collection</p>
                  <a href="product2.html"><button class="hero__btn">SHOP NOW</button></a>
                </div>
                <div class="hero__right">
                  <div class="hero__img-container">
                    <img class="banner_01" src="./images/collection_02.png" alt="banner2" />
                  </div>
                </div>
              </div>
            </li>



               <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span class="">Best design 2021</span>
                  <h1 class="">PHONES MADE FOR YOU!</h1>
                  <p>Latest Samsung style collection</p>
                  <a href="product2.html"><button class="hero__btn">SHOP NOW</button></a>
                </div>
                <div class="hero__right">
                  <div class="hero__img-container">
                    <img class="banner_01" src="images/products/sumsung/samsung1.jpeg" alt="banner2" />
                  </div>
                </div>
              </div>
            </li>

          </ul>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
          <button class="glide__bullet" data-glide-dir="=0"></button>
          <button class="glide__bullet" data-glide-dir="=1"></button>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
            </svg>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Main -->
  <main id="main">
    <div class="container">
      <!-- Collection -->
      <section id="collection" class="section collection">
        <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">





          <div class="collection__box">
            <div class="img__container">
              <img class="collection_01" src="./images/banner_01.png" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>Phone Device Presets</span>
                <h1>SMARTPHONES</h1>
                <a href="product2.html">SHOP NOW</a>
              </div>
            </div>
          </div>




 
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_02" src="./images/collection_02.png" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>New Colors Introduced</span>
                <h1>HEADPHONES</h1>
                <a href="product2.html">SHOP NOW</a>
              </div>
            </div>
          </div>

      </section>

      <!-- Latest Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Latest Products</h1>
          </div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">


                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/iPhone/iphone2.jpeg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$450</h4>
                      <!-- </div>
                      <a href="product.html"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div> -->
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product2.html">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="images/products/headphone/headphone2.jpeg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$300</h4>
                    <!--   </div>
                      <a href="product.html"><button type="submit" class="product__btn">Add To Cart</button></a> -->
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product2.html">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="images/products/sumsung/samsung1.jpeg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$300</h4>
                     <!--  </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div> -->
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product2.html">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="images/products/headphone/headphone1.jpeg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$250</h4>
                     <!--  </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div> -->
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product2.html">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="images/products/iPhone/iphone1.jpeg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone XR</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$550</h4>
                     <!--  </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
 -->                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product2.html">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>

              </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="category__section section" id="category">

        <div class="tab__list">
          <div class="title__container tabs">
            <div class="section__titles category__titles ">
              <div class="section__title filter-btn active" data-id="All Products">
                <span class="dot"></span>
                <h1 class="primary__title">All Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Trending Products">
                <span class="dot"></span>
                <h1 class="primary__title">Trending Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Special Products">
                <span class="dot"></span>
                <h1 class="primary__title">Special Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Featured Products">
                <span class="dot"></span>
                <h1 class="primary__title">Featured Products</h1>
              </div>
            </div>

          </div>
        </div>
        <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__center"></div>
        </div>
    </div>
    </section>

    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
      <div class="container">
        <div class="facility__contianer" data-aos="fade-up" data-aos-duration="1200">
          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-airplane"></use>
              </svg>
            </div>
            <p>FREE SHIPPING WORLD WIDE</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
              </svg>
            </div>
            <p>100% MONEY BACK GUARANTEE</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
              </svg>
            </div>
            <p>MANY PAYMENT GATWAYS</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-headphones"></use>
              </svg>
            </div>
            <p>24/7 ONLINE SUPPORT</p>
          </div>
        </div>
      </div>
    </section>
    </div>

    <!-- Testimonial Section -->
    <section class="section testimonial" id="testimonial">
      <div class="testimonial__container">
        <div class="glide" id="glide_4">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./images/profile1.jpg" alt="profile">
                  </div>
                  <p>“Simple can be harder than complex: You have to work hard to get your thinking clean to make it simple. But it’s worth it in the end because once you get there, you can move mountains.”</p>
                  <div class="client__info">
                    <h3>Gideon Impraim</h3>
                    <span>CEO of Impraim Tech</span>
                  </div>
                </div>
              </li>


            </ul>
          </div>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
          </div>
        </div>
      </div>
    </section>

    
    <!--New Section  -->
    <section class="section news" id="news">
      <div class="container">


        <div class="title__container">
          <div class="section__titles">
            <div class="section__title active">
              <span class="dot"></span>
              <h1 class="primary__title">Phone News</h1>
            </div>
          </div>
        </div>

        <div class="news__container">
          <div class="glide" id="glide_5">
            <div class="glide__track" data-glide-el="track">

              <ul class="glide__slides">


                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/news1.jpg" alt="">
                    </div>

                    <div class="card__footer">
                      <h3><span style="font-size: 20px;">Oppo Reno 6 Series Specifications, Design Tipped by E-Commerce Listings Ahead of May 27 Launch</span></h3>
                      <span>By Admin</span>
                      <p>Oppo Reno 6, Oppo Reno 6 Pro, and Oppo Reno 6 Pro+ have been listed on Chinese e-retailer websites ahead of May 27 launch. </p>
                      <a href="https://gadgets.ndtv.com/mobiles/news/oppo-reno-6-series-specifications-online-listing-launch-date-may-27-design-jd-suning-china-2445764"><button>Read More</button></a>
                    </div>
                  </div>
                </li>


                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/news2.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3><span style="font-size: 20px;">Infinix Hot 10S With MediaTek Helio G85 SoC, 6,000mAh Battery Launched in India: Price, Specifications</span></h3>
                      <span>By Admin</span>
                      <p>Infinix Hot 10S has launched in India as the latest smartphone by the company, after launching in Indonesia last month. </p>
                      <a href="https://gadgets.ndtv.com/mobiles/news/infinix-hot-10s-price-in-india-rs-9999-launch-specifications-sale-date-may-27-flipkart-2445625"><button>Read More</button></a>
                    </div>
                  </div>
                </li>


                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/news3.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3><span style="font-size: 20px;">Apple Announces AssistiveTouch for Apple Watch, Eye-Tracking Features on iPad</span> </h3>
                      <span>By Admin</span>
                      <p>Apple has announced a range of accessibility features that are designed for people with mobility, vision, hearing, and cognitive limitations. </p>
                      <a href="https://gadgets.ndtv.com/mobiles/news/apple-accessibility-updates-assistivetouch-watchos-watch-gestures-disabilities-signtime-voiceover-update-2445484"><button>Read More</button></a>
                    </div>
                  </div>
                </li>



                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/news4.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3><span style="font-size: 20px;">Samsung Galaxy A22 4G Specifications Tipped via Geekbench; 5G Variant Allegedly Reaches on FCC</span></h3>
                      <span>By Admin</span>
                      <p>Samsung Galaxy A22 4G specifications have been suggested through benchmark website Geekbench. </p>
                      <a href="https://gadgets.ndtv.com/mobiles/news/samsung-a22-4g-5g-specifications-geekbench-fcc-galaxy-2444267"><button>Read More</button></a>
                    </div>
                  </div>
                </li>

                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/news5.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3><span style="font-size: 20px;">Android 12 Public Beta Now Available: How to Install the Latest Software, What’s New
                         </span></h3>
                      <span>By Admin</span>
                      <p>Android 12 public beta is now live. Google unveiled Android 12 at its I/O 2021 keynote on Tuesday, May 18 with a redesigned user interface and enhanced privacy settings.</p>
                      <a href="https://gadgets.ndtv.com/mobiles/news/android-12-beta-download-install-new-features-changes-eligibility-google-io-2021-2444664"><button>Read More</button></a>
                    </div>
                  </div>
                </li>

              </ul>

            </div>
          </div>

        </div>
      </div>
    </section>




    <!-- NewsLetter -->
    <section class="section newsletter" id="contact">
      <div class="container">
        <div class="newsletter__content">
          <div class="newsletter__data">
            <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
            <p>A short sentence describing what someone will receive by subscribing</p>
          </div>
          <form action="#">
            <input type="email" placeholder="Enter your email address" class="newsletter__email">
            <a class="newsletter__link" href="#">subscribe</a>
          </form>
        </div>
      </div>
    </section>

  </main>

  <!-- End Main -->




<!--
   PopUp
  <div class="popup hide__popup">
    <div class="popup__content">
      <div class="popup__close">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-cross"></use>
        </svg>
      </div>
      <div class="popup__left">
        <div class="popup-img__container">
          <img class="popup__img" src="./images/popup.jpg" alt="popup">
        </div>
      </div>
      <div class="popup__right">
        <div class="right__content">
          <h1>Get Discount <span>30%</span> Off</h1>
          <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise!
          </p>
          <form action="#">
            <input type="email" placeholder="Enter your email..." class="popup__form">
            <a href="#">Subscribe</a>
          </form>
        </div>
      </div>
    </div>
  </div>
-->


  <!-- Go To -->

  <a href="#header" class="goto-top scroll-link">
    <svg>
      <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
    </svg>
  </a>


  <!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script>

</body>

































 <!-- Footer -->
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
          <a href="contact.php">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>MY ACCOUNT</h3>
          <a href="profile.php">My Account</a>
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
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}



</script>

  <!-- Go To --> 

  <a href="#header" class="goto-top scroll-link">
    <svg>
      <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
    </svg>
  </a>


  <!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script>


</body>
</html>
