<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Feedback - DreamCar / Cars for Sale NZ</title>
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
            <div class="row">
                <div class="col-12">
                    <img class="col-12 feedback-image" src="images/feedbackImage.jpeg">
                    <div class="feedback-image__contect">
                        <p class="feedback-image__contect-title">Feedback</p>
                        <p class="feedback-image__contect-detail">What is your question or complaint about?<br>Send a feedback to register a complaint directly with DreamCar.<br>We will response within 24 hours</p>
                    </div>
                </div>
                <div class="col-12 feedback">
                    <form class="feedback__form" action="addfeedback.php" method="POST" onsubmit="return validateFeedback(event);">
                        <input class="feedback_input" type="text" name="ft" id="feedback-title" placeholder="Title" />
                        <input class="feedback_input" type="text" name="fb" id="feedback-body" placeholder="Advice to DreamCar" required />
                        <input class="feedback_input" type="email" name="fe" id="feedback-email" placeholder="Email address" required />
                        <input class="feedback_submit submit-colour" type="submit" value="Submit Feedback" />
                    </form>
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
        <script src="js/feedback.js"></script>
        <script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
    </body>
</html>