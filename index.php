<?php include_once("initSession.php") ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Meal Ordering</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <?php

        if (!isset($_SESSION["userID"])) {

            header("Location: login.php");

        }

        switch ()

        ?>
    </body>

</html>