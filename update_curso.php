<?php 
include "permissao_editar.php";
include "top.php";

include 'pdo_conn.php';

$id = $_GET['id'];

$seleciona = $conn->query("SELECT * FROM tacursos WHERE id_curso = $id");

$seleciona_2 = $conn->query("SELECT * FROM funcionarios");

$row = $seleciona->fetch(PDO::FETCH_OBJ);
?>

<form class="form-group" role="form" method="post" action="atualizacao_curso.php">
    <div class="form-group col-md-8">
        <input type="hidden" name="id" value="<?= $row->id_curso; ?>" >
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?= $row->nome_curso; ?>">
    </div>
    <div class="form-group col-md-8">
        <label class="exampleInputEmail1">Tipo</label>
        <input type="text" class="form-control" name="tipo" value="<?= $row->tipo_curso; ?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Preço</label>
        <input type="text" class="form-control" name="preco" value="<?= $row->preco_curso; ?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputPassword1">Professor</label>
        <select class="form-control" name="codigo_professor">
<?php while ($func = $seleciona_2->fetch(PDO::FETCH_OBJ)) : ?>
                <option value="<?= $row->id_func; ?>" <?php if ($row->codigo_professor_curso == $func->id_func) echo 'selected' ?>><?= $func->nome_func; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>