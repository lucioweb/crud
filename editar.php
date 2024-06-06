<?php
include_once "db_conn.php";
$id = $_GET['id'];
$first_name = $_GET['first_name'];
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];

    $sql = "UPDATE `tbl_crud` SET `first_name`='$first_name', `last_name`='$last_name', `data_nascimento`='$data_nascimento', `email`='$email' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro de número $id, pertencente ao usuário $first_name foi atualizado com sucesso!");
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
        $sql = "SELECT * FROM `tbl_crud` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <!-- Array PHP com os elementos que rendereizam o campo tipo select estado civil -->

            <form action="" method="post" style="width:50vw; min-width: 300px;" class="row g-3 needs-validation">

                <div class="col-md-4">
                    <label for="first_name" class="form-label">FIRST NAME</label>
                    <input type="text" class="form-control" name="first_name" id="first_name"
                        value="<?php echo $row['first_name'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="last_name" class="form-label">LAST NAME</label>
                    <input type="text" class="form-control" name="last_name" id="last_name"
                        value="<?php echo $row['last_name'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="data_nascimento" class="form-label">BIRTHDAY</label>
                    <input type="date" class="form-control text-center" name="data_nascimento" id="data_nascimento"
                           value="<?php echo $row['data_nascimento'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" name="email" id="email"
                        value="<?php echo $row['email'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="address" class="form-label">ADDRESS</label>
                    <input type="text" class="form-control" name="address" id="address"
                           value="<?php echo $row['address'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="ts" class="form-label">CREATE AT</label>
                    <input type="text" class="form-control text-center" name="ts" id="ts" disabled
                           value="<?php echo $row['ts'] ?>">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-sm" name="submit"><i
                            class="fa-solid fa-floppy-disk me-2"></i>Save</button>
                    <a href="data_table.php" class="btn btn-danger btn-sm"><i
                            class="fa-sharp fa-solid fa-xmark me-2"></i>Abort</a>
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


    <script src="/js/mask.js"></script>

</body>

</html>