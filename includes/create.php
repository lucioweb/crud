<?php
include_once "db_conn.php";
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $ts = $_POST['ts'];

    $sql = "INSERT INTO `tbl_crud`(`id`, `first_name`, `last_name`, `data_nascimento`, `email`, `address`, `ts`) VALUES (NULL, '$first_name', '$last_name', '$data_nascimento', '$email', '$address', localtimestamp)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro inserido com sucesso na base de dados!");
        exit(0);

    } else {
        echo "Falhou! " . mysqli_error($conn);
    }
}
