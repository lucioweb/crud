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

    $sql = "INSERT INTO `tbl_user`(`id`, `first_name`, `last_name`, `email`, `estado_civil`,`cidade`, `uf`, `cep`, `gender`) VALUES (NULL, '$first_name', '$last_name', '$email', '$estado_civil', '$cidade', '$uf', '$cep', '$gender')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro inserido com sucesso na base de dados!");
    } else {
        echo "Falhou! " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD com PHP">
    <meta name="author" content="Lúcio Flávio Lemos">
    <title>CADASTRAR</title>

    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Folha de estilo própria -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">



</head>

<body>
    <header>
        <!-- Include do navbar da página  -->
        <?php include "shareds/navbar.php"; ?>
    </header>

    <main class="container">
        <div class="text-center mb-4">
            <h3>CADASTRAR</h3>
            <p class="text-muted">Complete os campos do formulário para adicionar um novo usuário</p>
        </div>

        <div class="container d-flex justify-content-center">
            <!-- Array PHP com os elementos que rendereizam o campo tipo select estado civil -->
            <?php
            $estado_civil = ["Casado(a)", "União Estável", "Solteiro(a)", "Divorciado(a)", "Outros"];
            ?>

            <form action="" method="post" style="width:50vw; min-width: 300px;" class="row g-3 needs-validation">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">NOME</label>
                    <input type="text" class="form-control" name="first_name" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">SOBRENOME</label>
                    <input type="text" class="form-control" name="last_name" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" name="email" id="validationCustom03" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">CIDADE</label>
                    <input type="text" class="form-control" name="cidade" id="validationCustom04" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <!-- Exemplo de campo do tipo select pegando dados em uma tabela de banco de dados -->
                <div class="col-md-5">
                    <label for="validationCustom05" class="form-label">UF</label>
                    <select class="form-select" name="uf" id="validationCustom05" required>
                        <option selected disabled value="">Selecione...</option>
                        <?php
                        $query_uf = "SELECT * FROM `tbl_uf` ORDER BY `uf` ASC";
                        $query_result = mysqli_query($conn, $query_uf);
                        while ($row = mysqli_fetch_assoc($query_result)) {
                            echo '<option value="' . $row['id'] . '"> ' . $row['uf'] . ' </option>';
                        }
                        ?>

                    </select>

                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom06" class="form-label">CEP</label>
                    <input type="text" class="form-control" name="cep" id="validationCustom06" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>

                <!-- Exemplo de campo do tipo select pegando dados em um array PHP -->
                <div class="col-md-12">
                    <label for="validationCustom07" class="form-label">ESTADO CIVIL</label>
                    <select class="form-select" name="estado_civil" id="validationCustom07" required>
                        <option selected disabled value="">Selecione...</option>
                        <?php foreach ($estado_civil as $status) { ?>
                        <option value="<?php echo $status ?>"><?php echo $status ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>


                <div class="form-group mb-3">
                    <label>SEXO:</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="masculino" value="M">
                    <label for="masculino" class="form-input-label">Masculino</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="feminino" value="F">
                    <label for="feminino" class="form-input-label">Feminino</label>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success" name="submit"><i
                            class="fa-solid fa-floppy-disk me-2"></i>Salvar</button>
                    <a href="data_table.php" class="btn btn-danger"><i
                            class="fa-sharp fa-solid fa-xmark me-2"></i>Cancelar</a>
                    <button type="reset" class="btn btn-primary" name="submit"><i
                            class="fa-solid fa-broom me-2"></i>Limpar</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="footer mt-auto py-3 fixed-bottom bg-body-tertiary">
        <!-- Include do footer da página  -->
        <?php include "shareds/footer.php"; ?>
    </footer>

    <!--Scripts adicionais do próprio Bootstratp-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!--Script padrão do Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <!--Script do Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Script do Jquery-mask-plugin-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/js/mask.js"></script>
</body>

</html>