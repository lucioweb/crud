<?php
include "assets/crud/edit.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <!-- Bootstrap 5.2.3 - CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link para as próprias folhas de estilo -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Include do navbar  -->
        <?php
        include "assets/shareds/navbar.php";
        ?>
    </header>

    <main class="container">
        <div class="text-center mb-4">
            <h3>EDITAR</h3>
            <p class="text-muted">Atualize os dados do usuário</p>
        </div>

        <?php
        $sql = "SELECT * FROM `crud_2` WHERE id = $id LIMIT 1";
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
                    <a href="datatable.php" class="btn btn-danger btn-sm"><i
                            class="fa-sharp fa-solid fa-xmark me-2"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="footer mt-auto py-3 fixed-bottom bg-dark">
        <!-- Include do footer  -->
        <?php
        include "assets/shareds/footer.php";
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>