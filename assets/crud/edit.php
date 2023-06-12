<?php
include "assets/shareds/conexion.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `crud_2` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: datatable.php?msg=Registro atualizado com sucesso na base de dados!");
    } else {
        echo "Falhou! " . mysqli_error($conn);
    }
}