<?php
// Estabelecendo as variáveis de conexão
$servername = "localhost";
$username = "user1";
$password = "password1";
$dbname = "db_crud";

// Aqui a função PHP mysql_connect que recebe como parâmetros as variáveis de conexão é atribuída à variável $conn.
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) { // Significa não $conn, ou que $conn é false, ou que os valores passados para as variáveis de conexão não estão corretos.
    die("Conexão falhou " . mysqli_connect_error()); // Neste caso a conexão com o banco de dados será recusada.
}
//echo "Conexão bem sucedida";
