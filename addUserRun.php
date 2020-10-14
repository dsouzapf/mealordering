<!DOCTYPE html>
<html>

<head>
        <title>Adding User...</title>
</head>

<body>

<?php

array_map("htmlspecialchars", $_POST);

include_once("connection.php");

function generatePasswordFromSeed($seed) {

    srand($seed);

    $output = "";

    for ($i = 0; $i < rand(3, 12); $i++) {

        $output .= chr(rand(65,122));

    }

    return $output;

}

$username = $_POST["username"];
$passwordSeed = $_POST["passwordSeed"];

$stmt = $connection->prepare(
"INSERT INTO users
(userID,username,password) VALUES
(null,:username,:password)"
);

$stmt->bindParam(":username",
$_POST["username"]);

$stmt->bindParam(":password",
generatePasswordFromSeed($_POST["password"]));

$stmt->execute();

$connection=null;

header("Location: addUser.php");

?>
        
</body>

</html>