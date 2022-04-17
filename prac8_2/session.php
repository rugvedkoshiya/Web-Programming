<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practcal 8-2 | 190630107063</title>
    </head>

    <body>
        <?php
        $_SESSION["favcolor"] = "blue";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
        ?>
        <br>

        <?php
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>
    </body>

</html>