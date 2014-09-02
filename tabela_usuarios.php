<?php
include "top.php";
include './pdo_conn.php';

$seleciona = $conn->query("SELECT * FROM usuarios ORDER BY id_usuario;");
?>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading text-center">Usuários</div>
    <table class='table table-hover table-bordered table-condensed'>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Login</th>
                <th>Senha</th>
                <?php if ($_SESSION['editar'] === true): ?>
                    <th>Atualizar Dados</th>
                <?php endif; ?>
                <?php if ($_SESSION['excluir'] === true): ?>
                    <th>Excluir Dados</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php while ($usuario = $seleciona->fetch(PDO::FETCH_OBJ)) : ?>
                <tr>
                    <td><?= $usuario->id_usuario; ?></td>
                    <td><?= $usuario->nome_usuario; ?></td>
                    <td><?= $usuario->email_usuario; ?></td>
                    <td><?= $usuario->login_usuario; ?></td>                    
                    <td><?= $usuario->senha_usuario; ?></td>
                    <?php if ($_SESSION['editar'] === true): ?>
                        <td><a href="update.php?id=<?= $usuario->id_usuario; ?>" class="btn btn-primary" role="button">Atualizar Dados</a></td>
                    <?php endif; ?>
                    <?php if ($_SESSION['excluir'] === true): ?>
                        <td><a href="aux_delete.php?id_d=<?= $usuario->id_usuario; ?>" class="btn btn-danger" role="button">Excluir Dados</a></td>
                    <?php endif; ?>
                </tr>

            <?php endwhile; ?>

        </tbody>
    </table>
</div>
<br>
<?php if ($_SESSION['incluir'] === true): ?>
    <center><a href="form_user.php" class="btn btn-default" role="button">Incluir Usuário</a></center>
    <?php endif; ?>
</body>
</html>
