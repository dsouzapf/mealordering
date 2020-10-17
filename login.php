<?php include_once("initSession") ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Log In</title>
    </head>

    <body>

        <form action="loginRun.php" method="POST">

            Username: <input name="username" type="text"><br>
            Password: <input name="password" type="password"><br>
            <input type="submit">

        </form>
        
    </body>

</html>