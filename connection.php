<?php

$serverName="localhost";
$dbname="mealordering";
$username="root";
$password="";

try {

    $connection = new PDO("mysql:host=$hostname;dbname=$dbname",
        $username,
        $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Connection Failed. Error: " . $e.getMessage();

}

?>