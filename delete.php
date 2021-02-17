<?php
// Maak contact met de mysql-server
include("connect_db.php");

$id = intval($_GET["id"]);

$sql = "DELETE FROM `user` WHERE `id` = $id";

mysqli_query($conn, $sql);

header("Location: ./read.php");
?>