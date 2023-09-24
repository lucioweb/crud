<?php
$servername = "localhost";
$username = "luciolemos";
$password = "Diferent@1968#";
$dbname = "crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexão falhou " . mysqli_connect_error());
}
//echo "Conexão bem sucedida";