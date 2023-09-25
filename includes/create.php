<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $estado_civil = $_POST['estado_civil'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `tbl_user`(`id`, `first_name`, `last_name`, `email`, `estado_civil`, `cidade`, `uf`, `cep`, `gender`) VALUES (NULL, '$first_name', '$last_name', '$email', '$estado_civil', '$cidade', '$uf', '$cep', '$gender')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro inserido com sucesso na base de dados!");
    } else {
        echo "Falhou! " . mysqli_error($conn);
    }
}