<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Folha de estilo do datatable -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css" />
    <!-- Link para as próprias folhas de estilo -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php
        include "assets/shareds/navbar.php";
        ?>
    </header>

    <main class="container">
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

        <a href="cadastro.php" class="btn btn-success btn-sm mb-3" role="button">Cadastrar</a>
        <!-- <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a> -->
        <!-- <a href="cadastrar.php" class="btn btn-primary btn-sm mb-3"><i class="fa-solid fa-plus fs-2 me-3"></i></a> -->
        <table id="datatable" class="table table-sm table-hover">
            <!-- <table class="table table-sm table-dark"> -->
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">CÓD</th>
                    <th scope="col">NOME</th>
                    <th scope="col">SOBRENOME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SEXO</th>
                    <th scope="col" class="text-center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "assets/shareds/conexion.php";
                $sql = "SELECT * FROM `crud_2`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td class="text-center"><?php echo $row['id'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td class="text-center">
                        <a href="editar.php?id=<?php echo $row['id'] ?>" class="link-primary"><i
                                class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="deletar.php?id=<?php echo $row['id'] ?>" class="link-danger"><i
                                class="fa-solid fa-trash fs-5 me-3"></i></a>
                    </td>
                </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </main>
    <footer class="footer mt-auto py-3 fixed-bottom bg-dark">
        <?php
        include "assets/shareds/footer.php";
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Popper e JS separadamente -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <!-- CDN do jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- CDN do javascript do data-table -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
    <script type="text/javascript">
    $(`#datatable`).DataTable({});
    </script>
</body>

</html>