<?php include "permissao_incluir.php";?>
<?php
include "top.php";
include 'pdo_conn.php';

$seleciona = $conn->query("SELECT * FROM funcionarios");
?>

<form class="form-group" role="form" method="post" action="cadastro_curso.php">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-8">
        <label class="exampleInputEmail1">Tipo</label>
        <input type="text" class="form-control" name="tipo" placeholder="Tipo">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Preço</label>
        <input type="text" class="form-control" name="preco" placeholder="Preço">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Professor</label>
        <select class="form-control" name="codigo_professor">
            <?php while ($func = $seleciona->fetch(PDO::FETCH_OBJ)) : ?>
                <option value="<?= $func->id_func; ?>"><?= $func->nome_func; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <div class="col-sm-8">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>