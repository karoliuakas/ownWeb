<?php


$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projectx";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Prisijungimo klaida: ".mysqli_connect_error());
}