<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            session_start();

            // Read the inputs
            $maker = $_POST['mk'];
            $model = $_POST['mo'];
            $year = $_POST['y'];
            $mile = $_POST['m'];
            $price = $_POST['p'];
            $location = $_POST['l'];
            $body = $_POST['b'];
            $id = $_SESSION['id'];

            // Sever settings
            $dbhost='localhost';
            $dbuser ='root';
            $dbpassword ='root';
            $dbdatabase= 'dreamcar';

            // Connect to database
            $con = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);
            
            // Query to save data
            $addcarquery = "INSERT INTO Car (Maker, Model, Year, Mileage, Price, Location, BodyType, SellerId) VALUES ('$maker','$model','$year','$mile','$price','$location','$body','$id')";
            
            if ($con->query($addcarquery) == TRUE) {
                echo "<script>
                window.location.href='../Dreamcar/profile.php'
                </script>";
            } 
            else {
                echo "<script>
                alert('Add Car Fail');
                window.location.href='/../Dreamcar/profile.php'                
                </script>";
            }
            
        ?>
    </body>
</html>