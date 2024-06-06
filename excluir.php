<?php
include_once "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `tbl_crud` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: data_table.php?msg=Registro de número $id excluído com sucesso da base de dados!");
} else {
    echo "Falhou! " . mysqli_error($conn);
}