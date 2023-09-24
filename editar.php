<?php
include "db_conn.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `tbl_user` SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email', `cidade`='$cidade', `uf`='$uf', `cep`='$cep', `gender`='$gender' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro atualizado com sucesso na base de dados!");
    } else {
        echo "Falhou! " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD com PHP">
    <meta name="author" content="Lúcio Flávio Lemos">
    <title>EDITAR</title>

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
        <?php include "shareds/navbar.php"; ?>
    </header>

    <main class="container">
        <div class="text-center mb-4">
            <h3>EDITAR</h3>
            <p class="text-muted">Atualize os dados do usuário</p>
        </div>

        <?php
        $sql = "SELECT * FROM `tbl_user` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <!-- Array PHP com os elementos que rendereizam o campo tipo select estado civil -->
            <?php
            $estado_civil = ["Casado", "União Estável", "Solteiro", "Divorciado", "Outros"];
            ?>
            <form action="" method="post" style="width:50vw; min-width: 300px;" class="row g-3 needs-validation">

                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">NOME</label>
                    <input type="text" class="form-control" name="first_name" id="validationCustom01"
                        value="<?php echo $row['first_name'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">SOBRENOME</label>
                    <input type="text" class="form-control" name="last_name" id="validationCustom02"
                        value="<?php echo $row['last_name'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" name="email" id="validationCustom03"
                        value="<?php echo $row['email'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">CIDADE</label>
                    <input type="text" class="form-control" name="cidade" id="validationCustom04"
                        value="<?php echo $row['cidade'] ?>">
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">UF</label>
                    <select class="form-select" name="uf" id="validationCustom05" required>
                        <option selected disabled value="">Selecione...</option>
                        <?php
                        $query_uf = "SELECT id, uf FROM `tbl_uf` ORDER BY uf ASC";
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
                    <input type="text" class="form-control" name="cep" id="validationCustom06"
                        value="<?php echo $row['cep'] ?>">
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
                    <input type="radio" class="form-check-input" name="gender" id="masculino" value="M"
                        <?php echo ($row['gender'] == 'M') ? "checked" : ""; ?>>
                    <label for="masculino" class="form-input-label">Masculino</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="feminino" value="F"
                        <?php echo ($row['gender'] == 'F') ? "checked" : ""; ?>>
                    <label for="feminino" class="form-input-label">Feminino</label>
                </div>



                <div class="col-12">
                    <button type="submit" class="btn btn-success" name="submit"><i
                            class="fa-solid fa-floppy-disk me-2"></i>Atualizar</button>
                    <a href="data_table.php" class="btn btn-danger"><i
                            class="fa-sharp fa-solid fa-xmark me-2"></i>Cancelar</a>
                </div>
            </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Script do Jquery-mask-plugin-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
    $(document).ready(function() {
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('#validationCustom06').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_area').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.money').mask('000.000.000.000.000,00', {
            reverse: true
        });
        $('.money2').mask("#.##0,00", {
            reverse: true
        });
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            }
        });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {
            reverse: true
        });
        $('.clear-if-not-match').mask("00/00/0000", {
            clearIfNotMatch: true
        });
        $('.placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                },
                placeholder: "__/__/____"
            }
        });
        $('.selectonfocus').mask("00/00/0000", {
            selectOnFocus: true
        });
    });
    </script>

</body>

</html>