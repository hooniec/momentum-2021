<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            // Read the inputs
            $un = $_POST['un'];
            $p = $_POST['p'];
        
            // Sever settings
            $dbhost='localhost';
            $dbuser ='root';
            $dbpassword ='root';
            $dbdatabase= 'dreamcar';

            // Connect to database
            $con = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);

            // Query to find data
            $result = mysqli_query($con, "SELECT * FROM seller WHERE UserName = '$un' AND Password = '$p'");
            $row = mysqli_fetch_array( $result );

            // Redirect webpage where appropriate 
            if (mysqli_num_rows($result) >= 1)
            {
                session_start();
                $_SESSION['un'] = $un;
                $_SESSION['id'] = $row[ 'SellerId' ];
                echo "<script>
                window.location.href='../Dreamcar/profile.php'
                </script>";
            }
            else
            {
                echo "<script>
                alert('Authentication Fail');
                window.location.href='../Dreamcar/login.php'
                </script>";
            }
        ?>
    </body>
</html>