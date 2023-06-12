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
            <a href="datatable.php" class="btn btn-danger btn-sm"><i
                    class="fa-sharp fa-solid fa-xmark me-2"></i>Cancelar</a>
            <button type="reset" class="btn btn-primary btn-sm" name="submit"><i
                    class="fa-solid fa-broom me-2"></i>Limpar</button>
        </div>
    </form>
</div>