<!--
    Admin Login:
    admin
    password
-->

<?php include_once("initSession.php") ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>

        <?php
        if (isset($_SESSION["loginSucceed"]) && !$_SESSION["loginSucceed"]) {
            print("<p class=\"failedSign\">Login Failed</p>");
        }
        ?>

        <form action="loginRun.php" method="POST">

            Username: <input name="username" type="text"><br>
            Password: <input name="password" type="password"><br>
            <input type="submit">

        </form>
        
    </body>

</html>