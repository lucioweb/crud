<!-- Editar.php -->
<!-- Array PHP com os elementos que rendereizam o campo tipo select estado civil -->
<?php
$estado_civil = ["Casado", "União Estável", "Solteiro", "Divorciado", "Outros"];
?>

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

<div class="col-md-3">
    <label for="validationCustom05" class="form-label">UF</label>
    <select class="form-select" name="uf" id="validationCustom05" required>
        <option selected disabled value="">Selecione...</option>
        <?php
        $unidade_federacao = "SELECT id, uf FROM tbl_uf WHERE ORDER BY uf ASC";
        $federacao = mysqli_query($conn, $unidade_federacao);
        while ($row = mysqli_fetch_assoc($federacao)) {
            echo '<option value="' . $row['id'] . '"> ' . $row['uf'] . ' </option>';
        }
        ?>
    </select>

    <div class="invalid-feedback">
        Please select a valid state.
    </div>
</div>