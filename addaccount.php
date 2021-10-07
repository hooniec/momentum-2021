<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            // Read the inputs
            $fn = $_POST['fn'];
            $ln = $_POST['ln'];
            $add = $_POST['add'];
            $p = $_POST['p'];
            $e = $_POST['e'];
            $un = $_POST['un'];
            $pw = $_POST['pw'];

            // Sever settings
            $dbhost='localhost';
            $dbuser ='root';
            $dbpassword ='root';
            $dbdatabase= 'dreamcar';

            // Connect to database
            $con = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);
            
            // Query to save data
            $sql = "INSERT INTO Seller (FirstName, LastName, Address, Phone, Email, UserName, Password) VALUES ('$fn','$ln','$add','$p','$e','$un','$pw')";
            
            if ($con->query($sql) == TRUE) {
                echo "<script>
                alert('New seller registered successfully');
                window.location.href='../Dreamcar/profile.php'
                </script>";
            } else {
                echo "<script>
                alert('Registration Fail');
                window.location.href='/../Dreamcar/login.php'
                </script>";
            }
            
            $con->close();
        ?>
    </body>
</html>