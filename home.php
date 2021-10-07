<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>DreamCar / Cars for Sale NZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            session_start();
        ?>
        <header class="col-12 website-header">
            <div class="col-2 logo">
                <a href="../Dreamcar/home.php"><img src="images/logo.png"></a>
            </div>
            <div class="col-10 nav">
                <ul class="nav__list">
                    <li class="nav__btn">
                        <a class="nav__link" href="search.php">Search Car</a>
                    </li>
                    <li class="nav__btn">
                        <a class="nav__link" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav__btn">
                        <a class="nav__link" href="aboutUs.php">About Us</a>
                    </li>
                    <?php
                        if (isset($_SESSION['un']))
                        {
                            echo '<li class="nav__btn">
                                    <a class="nav__link" href="profile.php">Profile</a>
                                </li>';
                        } 
                        else 
                        {
                            echo '<li class="nav__btn">
                                    <a class="nav__link" href="login.php">Sign In</a>
                                </li>';
                        }
                    ?>
                </ul>
            </div>
        </header>
        <main>
            <div class="row">
                <img class="col-12 home-image__cover" src="images/homeImage.jpeg">
                <div class="home-image__contect">
                    <p class="home-image__contect-title">Welcome to DreamCar</p>
                    <p class="home-image__contect-detail">Our aim is to provide a one-stop solution for researching and purchasing vehicles</p>
                </div>
                <span class="col-12 home-new-content-line"></span>
                <div class="home-slides">
                    <span class="home-slides__title">Popular Cars</span>
                    <div class="home-slides__slide pop fade">
                        <img src="images/6.jpg">
                    </div>
                    <div class="home-slides__slide pop fade">
                        <img src="images/7.jpg">
                    </div>
                    <div class="home-slides__slide pop fade">
                        <img src="images/8.jpg">
                    </div>
                    <div class="home-slides__slide pop fade">
                        <img src="images/9.jpg">
                    </div>
                    <div class="home-slides__slide pop fade">
                        <img src="images/10.jpg">
                    </div>
                    <a class="home-slides__btn-prev" onclick="popPlusSlides(-1)">&#10094;</a>
                    <a class="home-slides__btn-next" onclick="popPlusSlides(1)">&#10095;</a>
                    <div class="home-slides__dots">
                        <span class="dot pop-d" onclick="popCurrentSlide(1)"></span>
                        <span class="dot pop-d" onclick="popCurrentSlide(2)"></span>
                        <span class="dot pop-d" onclick="popCurrentSlide(3)"></span>
                        <span class="dot pop-d" onclick="popCurrentSlide(4)"></span>
                        <span class="dot pop-d" onclick="popCurrentSlide(5)"></span>
                    </div>
                </div>
                <div class="home-slides home-slides2">
                    <span class="home-slides__title">New Cars</span>
                    <div class="home-slides__slide new fade">
                        <img src="images/1.jpg">
                    </div>
                    <div class="home-slides__slide new fade">
                        <img src="images/2.jpg">
                    </div>
                    <div class="home-slides__slide new fade">
                        <img src="images/3.jpg">
                    </div>
                    <div class="home-slides__slide new fade">
                        <img src="images/4.jpg">
                    </div>
                    <div class="home-slides__slide new fade">
                        <img src="images/5.jpg">
                    </div>
                    <a class="home-slides__btn-prev" onclick="newPlusSlides(-1)">&#10094;</a>
                    <a class="home-slides__btn-next" onclick="newPlusSlides(1)">&#10095;</a>
                    <div class="home-slides__dots">
                        <span class="dot new-d" onclick="newCurrentSlide(1)"></span>
                        <span class="dot new-d" onclick="newCurrentSlide(2)"></span>
                        <span class="dot new-d" onclick="newCurrentSlide(3)"></span>
                        <span class="dot new-d" onclick="newCurrentSlide(4)"></span>
                        <span class="dot new-d" onclick="newCurrentSlide(5)"></span>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="company-info">
                <img class="col-2 company-info__logo" src="images/logoWhite.png">
                <div class="company-info__detail">
                    <h1 class="company-info__detail-main">Get In Touch</h1>
                    <div class="company-info__detail-contact">
                        <div>
                            <i class="fas fa-envelope"></i>
                            <span>Contact</span>
                        </div>
                        <span>info@dreamcarnz.com</span>
                    </div>
                    <div class="company-info__detail-location">
                        <div>
                            <i class="fas fa-map-marked-alt"></i>
                            <span>Location</span>
                        </div>
                        <span>Wellington, NZ</span>
                    </div>
                </div>
                <span class="company-info__company">© dreamcar.com Limited 2021</span>
            </div>
        </footer>
        <script src="js/slideShow.js"></script>
        <script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
    </body>
</html>