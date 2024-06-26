<?php
include "db_conn.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "SELECT `id`, `last_name` FROM `tbl_crud` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro de atualizado com sucesso na base de dados!");
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
    <title>RESUMO</title>

    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

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
    <div class="text-center mx-auto pt-5">
        <h3>VISUALIZA (READ) DADOS DO CLIENTE</h3>
        <p class="text-muted">Visualiza dados do cadastro</p>
    </div>
    <table id="datatable" class="table table-bordered table-hover table-striped">
        <!-- <table class="table table-sm table-dark"> -->
       <tbody>
        <?php
        include_once 'db_conn.php';
        $sql = "SELECT * FROM `tbl_crud` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="col">ID:</th>
                <td><?php echo $row['id'] ?></td>
            </tr>
            <tr>
                <th scope="col">FIRST NAME:</th>
                <td><?php echo $row['first_name'] ?></td>
            </tr>
            <tr>
                <th scope="col">LAST NAME:</th>
                <td><?php echo $row['last_name'] ?></td>
            </tr>
            <tr>
                <th scope="col">BIRTHDAY:</th>
                <td><?php echo $row['data_nascimento'] ?></td>
            </tr>
            <tr>
                <th scope="col">EMAIL:</th>
                <td><?php echo $row['email'] ?></td>
            </tr>

            <tr>
                <th scope="col">ADDRESS:</th>
                <td><?php echo $row['address'] ?></td>
            </tr>

            <tr>
                <th scope="col">CREATE AT:</th>
                <td><?php echo $row['ts'] ?></td>
            </tr>


            <?php
        }
        ?>

        </tbody>
    </table>


    <div class="container d-flex justify-content-left">
        <form action="data_table.php" method="" style="width:50vw; min-width: 300px;" class="row g-3 needs-validation">
            <div class="col-12">
            <!-- <a href="#" onclick="window.print();">Imprimir Página</a>-->
            <!-- <a href="data_table.php" class="btn btn-danger"><i class="fa-solid fa-angles-left me-2"></i></i>Back</a>-->
            <!-- <button type="reset" class="btn btn-primary" name="submit"><i class="fa-solid fa-broom me-2"></i>Limpar</button> -->
            <!-- <button type="submit" class="btn btn-success" name="imprimir" onclick="imprime()"><i class="fa-solid fa-print me-2"></i>Imprimir</button>-->
            <!-- <input class="btn btn-primary" type="button" value="Imprimir" onClick="window.print()" />-->
                <a href="#" class="btn btn-primary btn-sm" onclick="window.print();"><i class="fa-solid fa-print me-2"></i></i>Print</a>
                <a href="gerar_pdf.php" class="btn btn-danger btn-sm"><i class="fa-sharp fa-solid fa-file-pdf me-2"></i>Export PDF</a>
                <a href="data_table.php" class="btn btn-danger btn-sm"><i class="fa-sharp fa-solid fa-xmark me-2"></i>Abort</a>



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
<script language="javaScript">
    function imprime(text){
        text=document
        print()
    };
</script>
</body>

</html>