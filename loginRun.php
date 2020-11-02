<?php include_once("initSession.php") ?>
<!DOCTYPE html>
<html>

<head>
        <title>Logging in...</title>
</head>

<body>

<?php

array_map("htmlspecialchars", $_POST);

include_once("connection.php");

$stmt = $connection->prepare("SELECT * FROM users WHERE username=:username;");
$stmt->bindParam(":username", $_POST["username"]);
$stmt->execute();

$userObject = $stmt->fetch(PDO::FETCH_ASSOC);
if (strcmp($userObject["password"], sha1($_POST["password"]))) {

        $_SESSION["userID"] = $userObject["userID"];
        $_SESSION["username"] = $userObject["username"];

} else {

        //TODO

}

?>
        
</body>

</html>