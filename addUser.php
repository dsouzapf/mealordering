<?php include_once("initSession.php") ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Add User</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>

        <div id="addUserLastUser">

            <?php
            if (isset($_SESSION["lastUserUsername"])
            && isset($_SESSION["lastUserPassword"])) {

                echo("<p>Last User:</p>");
                echo("<p>Username: " . $_SESSION["lastUserUsername"] . "</p>");
                echo("<p>Password: " . $_SESSION["lastUserPassword"] . "</p>");

            }
            ?>

        </div>

        <form action="addUserRun.php" method="post">

            Username:<input type="text" name="username"><br>
            Initial Password Seed:<input type="number" name="passwordSeed"><br>

            <input type="submit">

        </form>
        
    </body>

</html>