<?php include_once("initSession.php") ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Add User</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>

        <div id="addUserLastUser" class="lastUserAddedSign">

            <?php
            if (isset($_SESSION["lastUserUsername"])
            && isset($_SESSION["lastUserPassword"])) {

                echo("<p>Last User:</p>");
                echo("<p>Username: " . $_SESSION["lastUserUsername"] . "</p>");
                echo("<p>Password: " . $_SESSION["lastUserPassword"] . "</p>");

            }
            ?>

        </div>

        <div class="failedSign">

                <?php
                if (isset($_SESSION["addUserFailed"])
                && $_SESSION["addUserFailed"]) {

                    echo("<p>Failed to add user</p>");

                }
                ?>

        </div>

        <form action="addUserRun.php" method="post">

            Username:<input type="text" name="username"><br>
            Initial Password Seed:<input type="number" name="passwordSeed"><br>
            Role:
            <select name="role">
                <option value="0">Pupil</option>
                <option value="1">Staff</option>
                <option value="2">Admin</option>
            </select>

            <input type="submit">

        </form>
        
    </body>

</html>