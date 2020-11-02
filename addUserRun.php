<?php include_once("initSession.php") ?>
<!DOCTYPE html>
<html>

<head>
        <title>Adding User...</title>
</head>

<body>

<?php

array_map("htmlspecialchars", $_POST);

include_once("connection.php");

include_once("passwordGeneration.php");

$username = $_POST["username"];
$passwordSeed = $_POST["passwordSeed"];

$stmt = $connection->prepare(
"INSERT INTO users
(userID,username,password) VALUES
(null,:username,SHA1(:password))"
);

//TODO: Don't add users with duplicate usernames

$stmt->bindParam(":username",
$_POST["username"]);

$generatedPassword = generatePasswordFromSeed($_POST["passwordSeed"]);
$stmt->bindParam(":password", $generatedPassword);

$stmt->execute();

$connection=null;

$_SESSION["lastUserUsername"] = $_POST["username"];
$_SESSION["lastUserPassword"] = $generatedPassword;

header("Location: addUser.php");

?>
        
</body>

</html>