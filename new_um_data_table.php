<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD com PHP">
    <meta name="author" content="Lúcio Flávio Lemos">
    <title>NEW UM DATA LIST</title>

    <!-- Bootstrap 5.3.3 - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- CSS do datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css"/>

    <!--Script do Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Folha de estilo própria -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
<header>
    <!-- Include do navbar da página  -->
    <?php include_once "shareds/navbar.php"; ?>
</header>

<main>
    <div class="mx-auto pt-5" style="width: 90%;">

        <!--Início do bloco onde serão executadas as mensagens de alerta-->
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

        ?>
        <!--Fim do bloco onde são executadas as mensagens de alerta-->

        <div class="text-center mb-4">
            <h3>LISTA DE USUÁRIOS REGISTRADOS</h3>
            <p class="text-muted">Data-list de usuários cadastrados</p>
        </div>


        <!-- <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a> -->
        <!-- <a href="cadastrar.php" class="btn btn-primary btn-sm mb-3"><i class="fa-solid fa-plus fs-2 me-3"></i></a> -->
        <div class="container">
            <a href="cadastrar.php" class="btn btn-dark btn-sm mb-3" role="button">Add New</a>
            <!--            <table id="datatable" class="table table-sm table-hover table-striped">-->
            <table id="datatable" class="table table-sm table-hover table-striped mt-3" style="width:100%">
                <!-- <table class="table table-sm table-dark"> -->
                <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col">FIRST NAME</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">BIRTHDAY</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col" class="text-center">CREATE AT</th>
                    <th scope="col" class="text-center">ACTION</th>
                </tr>
                </thead>

                <tbody>
                <?php
                // Estabelecendo as variáveis de conexão
                $servername = "localhost";
                $username = "user1";
                $password = "password1";
                $dbname = "db_crud";

                // Aqui a função PHP mysql_connect que recebe como parâmetros as variáveis de conexão é atribuída à variável $conn.
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }else{
                    //echo"Ok!";
                };
                $sql = "SELECT*FROM tbl_crud"; // PHP manda o banco de dados fazer um select na tabela tbl_crud e armazena o resultado da consulta na variável $sql
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->connect_error);
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $row['id'] ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><a href="view.php?id=<?php echo $row['id'] ?>"><?php echo $row['last_name'] ?></a></td>
                        <td><?php echo $row['data_nascimento'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td class="text-center"><?php echo $row['ts'] ?></td>
                        <td class="text-center">
                            <!--<a href="view.php?id=<?php /*echo $row['id'] */ ?>" class="link-success"><i
                                            class="fa-solid fa-eye fs-5 me-3"></i></a>-->
                            <a href="editar.php?id=<?php echo $row['id'] ?>" class="link-primary"><i
                                        class="fa-solid fa-pen-to-square me-3"></i></a>
                            <a href="excluir.php?id=<?php echo $row['id'] ?>" class="link-danger"><i
                                        class="fa-solid fa-trash me-3"></i></a>
                        </td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<footer class="footer mt-auto py-3 fixed-bottom bg-body-tertiary">
    <!-- Include do footer da página  -->
    <?php include "shareds/footer.php"; ?>
</footer>

<!--Scripts adicionais do próprio Bootstratp-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

<!--Script padrão do JS do Bootstrap 5.3.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


<!--Script do Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- CDN do javascript do data-table -->
<script type="text/javascript" src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

<script type="text/javascript">
    new DataTable('#datatable');
</script>
</body>

</html>