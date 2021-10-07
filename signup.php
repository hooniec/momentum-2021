<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Sign Up - DreamCar / Cars for Sale NZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header class="signup-header">
            <div class="logo">
                <a href="home.php"><img src="images/logo.png"></a>
            </div>
        </header>
        <main>
            <div class="signup-container">
                <div class="signup-container__form">
                    <h1 class="signup-container__form-title">Sign Up</h1>
                    <form class="signup-container__form-detail" action="addaccount.php" method="POST" onsubmit="return validateSignForm(event);">
                        <div class="signup-container__form-detail-name">
                            <input class="signup_input" name="fn" type="text" id="fn" placeholder="First Name" required />
                            <input class="signup_input" name="ln" type="text" id="ln" placeholder="Last Name" required />
                        </div>
                        <input class="signup_input dynamic" name="add" type="text" id="address" placeholder="Address" required />
                        <input class="signup_input" name="p" type="tel" id="phone" placeholder="Phone" required/>
                        <input class="signup_input" name="e" type="email" id="email" placeholder="Email" required />
                        <input class="signup_input" name="un" type="text" id="un" placeholder="Username" required />
                        <input class="signup_input" name="pw" type="password" id="pw" placeholder="Password" minlength="6" required />
                        <input class="signup_submit submit-colour" type="submit" value="Become A Seller" />
                    </form>
                </div>
            </div>
        </main>
        <script src="js/signUp.js"></script>
    </body>
</html>