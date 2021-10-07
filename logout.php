<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            session_start();
            session_destroy();
            echo "<script>window.location.href='../Dreamcar/home.php'</script>";
        ?>
    </body>
</html>