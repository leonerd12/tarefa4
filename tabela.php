<?php
include "top.php";
include 'conexao_banco.php';
$seleciona = 'SELECT * FROM USUARIOS ORDER BY id_usuario;';
$consulta = pg_query($conn, $seleciona);
?>
<table class='table table-hover table-bordered table-condensed'>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Atualizar Dados</th>
            <th>Excluir Dados</th>
        </tr>
    </thead>
    <tbody>

        <?php while ($usuario = pg_fetch_object($consulta)) : ?>
            <tr>
                <td><?= $usuario->id_usuario; ?></td>
                <td><?= $usuario->nome_usuario; ?></td>
                <td><?= $usuario->email_usuario; ?></td>
                <td><?= $usuario->login_usuario; ?></td>
                <td><?= $usuario->senha_usuario; ?></td>
                <td><a href="update.php?id=<?= $usuario->id_usuario; ?>" class="btn btn-primary" role="button">Atualizar Dados</a></td>
                <td><a href="aux_delete.php?id_d=<?= $usuario->id_usuario; ?>" class="btn btn-danger" role="button">Excluir Dados</a></td>
            </tr>

        <?php endwhile; ?>

    </tbody>
</table>
<br>
</body>
</html>
