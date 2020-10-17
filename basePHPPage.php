<?php include_once("initSession.php") ?>
<!DOCTYPE html>
<html>

<head>
        <title></title>
</head>

<body>

<?php

array_map("htmlspecialchars", $_POST);

include_once("connection.php");

?>
        
</body>

</html>