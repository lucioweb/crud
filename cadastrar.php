<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO `usuarios`(`id`,`first_name`, `last_name`, `email`, `gender`) VALUES (NULL, '$first_name', '$last_name', '$email', '$gender')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro inserido com sucesso na base de dados!");
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
    <title>CADASTRAR</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
            <form action="" method="post" style="width:50vw; min-width: 300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Primeiro nome</label>
                        <input type="text" class="form-control" name="first_name" id="" placeholder="Lucio">
                    </div>
                    <div class="col">
                        <label class="form-label">Último nome</label>
                        <input type="text" class="form-control" name="last_name" id="" placeholder="Lemos">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="" placeholder="luciolemos@luciolemos.com">
                </div>
                <div class="form-group mb-3">
                    <label>Sexo:</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="masculino" value="masculino">
                    <label for="massculino" class="form-input-label">Masculino</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="feminino" value="feminino">
                    <label for="feminino" class="form-input-label">Feminino</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success btn-sm" name="submit"><i
                            class="fa-solid fa-floppy-disk me-2"></i>Salvar</button>
                    <a href="data_table.php" class="btn btn-danger btn-sm"><i
                            class="fa-sharp fa-solid fa-xmark me-2"></i>Cancelar</a>
                    <button type="reset" class="btn btn-primary btn-sm" name="submit"><i
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

</body>

</html>