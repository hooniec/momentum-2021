<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Login - DreamCar / Cars for Sale NZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header class="login-header">
            <div class="logo">
                <a href="home.php"><img src="images/logo.png"></a>
            </div>
        </header>
        <main>
            <div class="row">
                <div class="col-12 login-container">
                    <div class="col-5 login-container__form">
                        <h1 class="login-container__form-title">Welcome to DreamCar</h1>
                        <form class="login-container__form-detail" action="authentication.php" method="POST">
                            <label for="username">Username</label>
                            <input class="login_input" name="un" id="username" type="text" placeholder="Type your username" required />
                            <label for="password">Password</label>
                            <input class="login_input" name="p" id="password" type="password" placeholder="Type your password" required />
                            <input class="login_submit submit-colour" type="submit" value="Login" />
                        </form>
                        <form class="login-container__form-detail" action="signup.php">
                            <input class="login_submit submit-colour" type="submit" value="Sign up" />
                        </form>
                        <p class="login-container__form-guide">You just want to buy a car?<br/>Contact the seller without signing up!</p>
                    </div>
                    <div class="col-5 login-container__ad">
                        <img src="images/loginImage.jpg">
                    </div>
                </div>
            </div>
            <div class="login-footer">
                <div class="nav">
                    <ul class="nav__list">
                        <li class="nav__btn">
                            <a class="nav__link" href="feedback.php">Feedback</a>
                        </li>
                        <li class="nav__btn">
                            <a class="nav__link" href="aboutUs.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <script src="js/login.js"></script>
    </body>
</html>