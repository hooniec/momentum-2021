<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>About Us - DreamCar / Cars for Sale NZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            session_start();
        ?>
        <header class="col-12 website-header">
            <div class="col-2 logo">
                <a href="home.php"><img src="images/logo.png"></a>
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
            <div class="aboutUs-image">
                <img class="aboutUs-image__cover" src="images/aboutUsImage.jpeg">
            </div>
            <div class="about-us">
                <div class="about-us__company">
                    <p class="about-us__title">Our Company</p>
                    <p class="about-us__detail">DearmCar was launched in 2010, 
                        it quickly grew the following year to have 40,000 vehicles for sale from dealers and private sellers from around the country. 
                        The website had a variety of changes made over the years but largely kept the basic look and feel from when it was launched. 
                        Bringing the website out of the dark ages a year after the ownership change in Aug 2020, 
                        DreamCar saw a brand-new state of the art platform introduced into the New Zealand automotive buying market.
                        DreamCar has become the trusted website for buying and selling cars online. 
                        DreamCar receives hundreds of thousands of car buyers and sellers every month wanting to research and purchase their next vehicle from one of our many car dealers or private sellers.
                    </p>
                </div>
                <div class="about_us__service">
                    <p class="about-us__title">Our Service</p>
                    <p class="about-us__detail">Our aim is to provide a one-stop solution for researching and purchasing vehicles</p>
                </div>     
                <div class="about_us__ad">
                    <p class="about-us__title">Advertise with us</p>
                    <p class="about-us__detail">We provide online advertising solutions to media agencies and their clients, dealers (in all industries), industry organisations and many other businesses throughout New Zealand.</p>
                </div>
                <div class="about_us__office">
                    <p class="about-us__title">Main Office</p>
                    <p class="about-us__detail-bold">21 Kensington Avenue<br/>Petone<br/>Lower Hutt 5012</p>
                </div>
                <div class="about_us__hour">
                    <p class="about-us__title">Hours</p>
                    <p class="about-us__detail-bold">Weekdays 9am-5pm</p>
                </div>
                <div class="about_us__staffs">
                    <p class="about-us__title">Staff</p>
                    <div class="about-us__staff">
                        <i class="far fa-user-circle"></i>
                        <div class="about-us__staff-detail">
                            <span class="about-us__staff-name">Jeff Jones</span>
                            <span class="about-us__staff-pos">Manager</span>
                            <span class="about-us__staff-phone">04 534 4320</span>
                            <span class="about-us__staff-email">jeff@dreamcar.nz</span>
                        </div>
                    </div>
                    <div class="about-us__staff">
                        <i class="far fa-user-circle"></i>
                        <div class="about-us__staff-detail">
                            <span class="about-us__staff-name">Ryan Ku</span>
                            <span class="about-us__staff-pos">Manager</span>
                            <span class="about-us__staff-phone">04 534 4323</span>
                            <span class="about-us__staff-email">ryan@dreamcar.nz</span>
                        </div>
                    </div>
                    <div class="about-us__staff">
                        <i class="far fa-user-circle"></i>
                        <div class="about-us__staff-detail">
                            <span class="about-us__staff-name">Sarah Lee</span>
                            <span class="about-us__staff-pos">Manager</span>
                            <span class="about-us__staff-phone">04 534 4331</span>
                            <span class="about-us__staff-email">sarah@dreamcar.nz</span>
                        </div>
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
        <script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
    </body>
</html>