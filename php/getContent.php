<?php

$servername = "mysqlserver.c7xdy5yz62hc.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "w89d5b2006";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);


$table = $_GET['table'];

$sql = "select * from $table";
$result = $conn->query($sql);

print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)));

?>