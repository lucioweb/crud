<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD com PHP">
    <meta name="author" content="Lúcio Flávio Lemos">
    <title>LISTAR</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Folha de estilo do data-table -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css" />
    <!-- Folha de estilo própria -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">


</head>

<body>
    <header>
        <!-- Include do navbar da página  -->
        <?php include "shareds/navbar.php"; ?>
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

            <a href="cadastrar.php" class="btn btn-dark btn-md mb-3" role="button">Add New</a>
            <!-- <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a> -->
            <!-- <a href="cadastrar.php" class="btn btn-primary btn-sm mb-3"><i class="fa-solid fa-plus fs-2 me-3"></i></a> -->
            <table id="datatable" class="table table-lg table-hover">
                <!-- <table class="table table-sm table-dark"> -->
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">CÓD</th>
                        <th scope="col">NOME</th>
                        <th scope="col">SOBRENOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">CIDADE</th>
                        <th scope="col">UF</th>
                        <th scope="col">CEP</th>
                        <th scope="col">SEXO</th>
                        <th scope="col" class="text-center">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM `tbl_user`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $row['id'] ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['cidade'] ?></td>
                        <td><?php echo $row['uf'] ?></td>
                        <td><?php echo $row['cep'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td class="text-center">
                            <a href="editar.php?id=<?php echo $row['id'] ?>" class="link-success"><i
                                    class="fa-solid fa-search fs-5 me-3"></i></a>
                            <a href="editar.php?id=<?php echo $row['id'] ?>" class="link-primary"><i
                                    class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="excluir.php?id=<?php echo $row['id'] ?>" class="link-danger"><i
                                    class="fa-solid fa-trash fs-5 me-3"></i></a>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </main>
    <footer class="footer mt-auto py-3 fixed-bottom bg-body-tertiary">
        <!-- Include do footer da página  -->
        <?php include "shareds/footer.php"; ?>
    </footer>

    <!--Scripts adicionais do próprio Bootstratp-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <!--Script padrão do Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!--Script do Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CDN do javascript do data-table -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>

    <script type="text/javascript">
    $(`#datatable`).DataTable({});
    </script>
</body>

</html>