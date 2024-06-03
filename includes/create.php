<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];


    $sql = "INSERT INTO `tbl_crud`(`id`, `first_name`, `last_name`, `email`) VALUES (NULL, '$first_name', '$last_name', '$email')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro inserido com sucesso na base de dados!");
    } else {
        echo "Falhou! " . mysqli_error($conn);
    }
}