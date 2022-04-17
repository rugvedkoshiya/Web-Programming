<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practcal 8-3 | 190630107063</title>
    </head>

    <body>
        <?php

        if ($_POST["username"] == "rugved" && $_POST["password"] == "123") {
            if (isset($_SESSION["remember"]) && $_SESSION["remember"] == true) {
                $_SESSION["remember"] = $_POST["remember"];
                echo "Welcome again !!";
            } else {
                echo "Welcome";
                $_SESSION["remember"] = $_POST["remember"];
            }
        } else {
            echo "Wrong credentials";
        }
        ?>
    </body>

</html>