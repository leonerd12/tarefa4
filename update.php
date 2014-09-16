<?php
include "top.php";
include "permissao_editar.php";
include 'pdo_conn.php';

$id = $_GET['id'];

$consulta = $conn->query("SELECT * FROM usuarios WHERE id_usuario = $id");

$row = $consulta->fetch(PDO::FETCH_OBJ);
?>

<form class="form-group" role="form" method="post" action="atualizacao.php">
    <div class="form-group col-md-8">
        <input type="hidden" name="id" value="<?= $row->id_usuario; ?>" >
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control"  name="nome" value="<?= $row->nome_usuario; ?>">
    </div>
    <div class="form-group col-md-8">
        <label class="exampleInputEmail1">Email</label>
        <input type="Email" class="form-control" name="email" value="<?= $row->email_usuario; ?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Login</label>
        <input type="text" class="form-control" name="login" value="<?= $row->login_usuario; ?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" name="senha" value="">
    </div>
    <div class="form-group col-md-8 checkbox">
        <label>
            <input name="editar" type="checkbox" <?php if($row->editar) echo 'checked';  ?>>
            Editar Dados
        </label>
    </div>
    <div class="form-group col-md-8 checkbox">
        <label>
            <input name="excluir" type="checkbox" <?php if($row->excluir) echo 'checked';  ?>>
            Excluir Dados
        </label>
    </div>
    <div class="form-group col-md-8 checkbox">
        <label>
            <input name="incluir" type="checkbox" <?php if($row->incluir) echo 'checked';  ?>>
            Incluir Dados
        </label>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>