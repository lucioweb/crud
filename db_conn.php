<?php
$servername = "localhost";
$username = "example_user";
$password = "password";
$dbname = "e_comerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexão falhou " . mysqli_connect_error());
}
//echo "Conexão bem sucedida";