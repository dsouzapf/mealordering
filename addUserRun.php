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

$getUsernamesStmt = $connnection->prepare("SELECT username FROM users WHERE username=:username");
$getUsernamesStmt->bindParam(":username", $_POST["username"]);
$getUsernamesStmt->execute();

if ($_ = $addUserStmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["addUserFailed"] = true;
        header("Location: addUser.php");
}

$addUserStmt = $connection->prepare(
"INSERT INTO users
(userID,username,password,role) VALUES
(null,:username,SHA1(:password),:role)"
);

$addUserStmt->bindParam(":username",
$_POST["username"]);

$generatedPassword = generatePasswordFromSeed($_POST["passwordSeed"]);
$addUserStmt->bindParam(":password", $generatedPassword);

$addUserStmt->bindParam(":role", (int)$_POST["role"]);

$addUserStmt->execute();

$connection=null;

$_SESSION["lastUserUsername"] = $_POST["username"];
$_SESSION["lastUserPassword"] = $generatedPassword;

header("Location: addUser.php");

?>
        
</body>

</html>