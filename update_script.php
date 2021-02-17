<?php
// maak contact met de mysqlserver en database
include ("./connect_db.php");

$id = $_POST["id"];
$firstname = $_POST["burgerservicenummer"];
$email = $_POST["e-mail"];
$firstname = $_POST["phone-number"];
$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$firstname = $_POST["date_of_birth"];


$sql =  UPDATE `project` 
SET `burgerservicenummer` = '$burgerservicenummer',
`e-mail` = '$e-mail', 
`phone-number` = '$phone-number', 
`firstname` = '$firstname', 
`infix` = '$infix', 
`lastname` = '$lastname',
`password` = '$password',
`gender` = '$gender'
`date_of_birth` = '$date_of_birth'
WHERE `project`.`id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./read.php");
?>