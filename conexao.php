<?php
$host = "localhost";
$username = "user1";
$password = "password1";
$database = "db_crud";
$table = "tbl_todo_list";

echo "Database connection using mysqli_connect"."<br>";
// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Acesso ao banco de dados

echo "<h2>LISTA DE TAREFAS</h2><ol>";
foreach($conn->query("SELECT * FROM $table") as $row) {
    echo "<li>" . $row['content'] . "</li>";
}
echo "</ol>";
