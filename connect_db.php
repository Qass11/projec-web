<?php
// Met deze gegevens kunnen we inloggen op de mysql-server en een datebase selecteren
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Met deze functie maken we contact met de mysql-server
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>