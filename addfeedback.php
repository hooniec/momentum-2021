<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            // Read the inputs
            $ft = $_POST['ft'];
            $fb = $_POST['fb'];
            $fe = $_POST['fe'];

            // Sever settings
            $dbhost='localhost';
            $dbuser ='root';
            $dbpassword ='root';
            $dbdatabase= 'dreamcar';

            // Connect to database
            $con = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);
            
            // Query to save data
            $sql = "INSERT INTO Feedback (Title, Body, Email) VALUES ('$ft','$fb','$fe')";
            
            if ($con->query($sql) == TRUE) {
                echo "<script>
                alert('Thank you for your advice');
                window.location.href='../Dreamcar/feedback.php'
                </script>";
            } else {
                echo "<script>
                alert('Sending feedback failed');
                window.location.href='/../Dreamcar/feedback.php'
                </script>";
            }
            
            $con->close();


        ?>
    </body>
</html>