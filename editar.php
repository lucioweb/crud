<?php
include "db_conn.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $sql = "UPDATE `usuarios` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id=$id";
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
    <!-- Bootstrap 5.3.0 - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
        $sql = "SELECT * FROM `usuarios` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width: 300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Primeiro nome</label>
                        <input type="text" class="form-control" name="first_name"
                            value="<?php echo $row['first_name'] ?>">

                    </div>
                    <div class="col">
                        <label class="form-label">Último nome</label>
                        <input type="text" class="form-control" name="last_name"
                            value="<?php echo $row['last_name'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label>Sexo:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="masculino" value="masculino"
                        <?php echo ($row['gender'] == 'masculino') ? "checked" : ""; ?>>
                    <label for="massculino" class="form-input-label">Masculino</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="feminino" value="feminino"
                        <?php echo ($row['gender'] == 'feminino') ? "checked" : ""; ?>>
                    <label for="feminino" class="form-input-label">Feminino</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success btn-sm" name="submit"><i
                            class="fa-solid fa-floppy-disk me-2"></i>Atualizar</button>
                    <a href="data_table.php" class="btn btn-danger btn-sm"><i
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>