<?php include 'permissao_excluir.php';
include "top.php" ?>
<form method="post" action="delete.php">
    <input type="hidden" name="id_d" value="<?= $_GET['id_d']; ?>" >
    <label>Você deseja mesmo excluir sua conta?</label>
    <input type="submit" value="Sim" class="btn btn-danger" role="button">
    <a href="tabela_usuarios.php" class="btn btn-primary" role="button">Não</a>
</form>
