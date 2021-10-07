<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>My Page - DreamCar / Cars for Sale NZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php             
            session_start();

            // Check session is existed
            if (!isset($_SESSION['un']))
            {
                echo "<script>
                alert('Session has been expired. Please Login again');
                window.location.href='../Dreamcar/login.php'
                </script>";
                exit;
            } 
            else
            {
                // Server setting
                $dbhost='localhost';
                $dbuser ='root';
                $dbpassword ='root';
                $dbdatabase= 'dreamcar';

                // Connect to database
                $con = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);

                // // Query to find data
                $sellerresult = mysqli_query($con, "SELECT Address, Phone, Email FROM Seller WHERE UserName = '" . $_SESSION['un'] . "'");
                $sellerdetails = mysqli_fetch_row($sellerresult);

                $advertisementresult = mysqli_query($con, "SELECT Maker, Year, Model FROM Car, Seller WHERE Car.SellerId = Seller.SellerId AND UserName = '" . $_SESSION['un'] . "'");
                
            }
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
                    <li class="nav__btn">
                        <a class="nav__link" href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
        </header>
        <main>
            <div class="col-12 profile-title">
                <div class="col-4">My Account</div>
                <div class="col-4">Registered Car List</div>
                <div class="col-4">Add Car</div>
            </div> 
            <div class="col-12">
                <div class="col-4 profile-container">
                    <h1 class="profile-container__title">Hello <?php echo $_SESSION['un'] ?></h1>
                    <form class="profile-container__detail" action="profile.php" method="get">
                        <label for="address">Address</label>
                        <input class="profile_input" id="address" type="text" placeholder="<?php echo $sellerdetails[0] ?>" disabled />
                        <label for="phone">Phone</label>
                        <input class="profile_input" id="phone" type="number" placeholder="<?php echo $sellerdetails[1] ?>" disabled />
                        <label for="email">Email</label>
                        <input class="profile_input" id="email" type="email" placeholder="<?php echo $sellerdetails[2] ?>" disabled />
                    </form>
                </div>
                <div class="col-4 profile-container__list">
                    <h1 class="profile-container__title">Advertisement added</h1>
                    <div class="checkbox">
                        <?php
                            while( $row = mysqli_fetch_array( $advertisementresult ) ) 
                            {
                            echo '<input type="checkbox" id="checkbox1"><label for="checkbox1">' . $row[ 'Maker' ] . " " . $row[ 'Year' ] . " " . $row[ 'Model' ] . '</label> <br/>';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-4 profile-container__add-car">
                    <h1 class="profile-container__title">Car Details</h1>
                    <form class="profile-container__detail" action="addcar.php" method="POST" onsubmit="return validateAddCarForm(event);">
                        <label for="maker">Maker</label>
                        <input class="profile_input" name="mk" id="maker" type="text" placeholder="Company name of car" required/>
                        <label for="model">Model</label>
                        <input class="profile_input" name="mo" id="model" type="text" placeholder="Car model" required/>
                        <label for="year">Year</label>
                        <input class="profile_input" name="y" id="year" type="number" value="2021" placeholder="Car year" required maxlength="4"/>
                        <label for="mileage">Mileage</label>
                        <input class="profile_input" name="m" id="mileage" type="number" placeholder="Car mileage" required maxlength="6"/>
                        <label for="price">Price ($)</label>
                        <input class="profile_input" name="p" id="price" type="number" placeholder="Price" required/>
                        <label for="location">Location</label>
                        <input class="profile_input" name="l" id="location" type="text" placeholder="Location" required/>
                        <label for="body">Body Type</label>
                        <input class="profile_input" name="b" id="body" type="text" placeholder="Body Type" required/>
                        <input class="profile-change_submit submit-colour" type="submit" value="Add Car" />
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
        <script src="js/addCar.js"></script>
        <script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
        <?php
            // Read the inputs
        ?>
    </body>
</html>