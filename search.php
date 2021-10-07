<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Search Cars - DreamCar / Cars for Sale NZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            session_start();

            // Server setting
            $dbhost='localhost';
            $dbuser ='root';
            $dbpassword ='root';
            $dbdatabase= 'dreamcar';

            // Connect to database
            $con = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);

            // Query to find data
            $carresult = mysqli_query($con, "SELECT * FROM Car");
        ?>
        <header class="col-12 website-header header-no-border">
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
                <div class="col-12 search-bar">
                    <form class="search-bar__form" action="searchresult.php" method="POST"/>
                        <input class="col-6 search_input" type="text" name="keyword" id="keyword" placeholder="Model Name"/>
                        <select class="col-2" id="makers" name="makers">
                            <option value="All-Makers">All Makers</option>
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                        <select class="col-2" id="bodyTypes" name="bodyTypes">
                            <option value="All-BodyTypes">All Body Types</option>
                            <option value="Convertible">Convertible</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Sedan">Sedan</option>
                            <option value="SUV">SUV</option>
                        </select>
                        <input class="col-2 search_submit submit-colour" type="submit" value="Search Cars" />
                    </form>
                </div>
                <div class="col-11 search_carlist">
                    <?php
                        while ( $row = mysqli_fetch_array( $carresult )) {
                            echo '<div class="col-3 search_carlist__car">
                                    <a href="#"><img src="' . $row[ 'CarImg' ] . '"></a>
                                    <span class="search_carlist__car-name">' . $row[ 'Maker' ] . " " . $row [ 'Year' ] . " " . $row[ 'Model' ]. '</span><br/>' . '
                                    <span class="search_carlist__car-price">' . "$" . $row[ 'Price' ] . '</span><br/>' . '
                                    <span class="search_carlist__car-spec">' . $row[ 'Mileage' ] . "km, " . $row[ 'BodyType' ] . '</span>' . '
                                    <span class="search_carlist__car-spec">' . $row[ 'Location' ] . '</span></div>';
                        }
                    ?>
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
        <script src="js/search.js"></script>
        <script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
    </body>
</html>