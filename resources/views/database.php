<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "registrarse";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Intente nuevamente hacer la conecion;");
}
?>


