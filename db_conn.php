<?php
$servername = "localhost";
$username = "user1";
$password = "password1";
$dbname = "db_crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexão falhou " . mysqli_connect_error());
}
//echo "Conexão bem sucedida";