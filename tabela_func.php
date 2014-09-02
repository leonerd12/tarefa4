<?php
include "top.php";
include './pdo_conn.php';
$seleciona = $conn->query("SELECT * FROM funcionarios ORDER BY id_func;");
?>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading text-center">Funcionários</div>
    <table class='table table-hover table-bordered table-condensed'>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Telefone</th>
                <?php if ($_SESSION['editar'] === true): ?>
                    <th>Atualizar Dados</th>
                <?php endif; ?>
                <?php if ($_SESSION['excluir'] === true): ?>
                    <th>Excluir Dados</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>

            <?php while ($func = $seleciona->fetch(PDO::FETCH_OBJ)) : ?>
                <tr>
                    <td><?= $func->id_func; ?></td>
                    <td><?= $func->nome_func; ?></td>
                    <td><?= $func->endereco_func; ?></td>
                    <td><?= $func->email_func; ?></td>
                    <td><?= $func->telefone_func; ?></td>
                    <?php if ($_SESSION['editar'] === true): ?>
                        <td><a href="update_func.php?id=<?= $func->id_func; ?>" class="btn btn-primary" role="button">Atualizar Dados</a></td>
                    <?php endif; ?>
                    <?php if ($_SESSION['excluir'] === true): ?>
                        <td><a href="aux_delete_func.php?id_d=<?= $func->id_func; ?>" class="btn btn-danger" role="button">Excluir Dados</a></td>
                    <?php endif; ?>
                </tr>

            <?php endwhile; ?>

        </tbody>
    </table>
</div>
<br>
<?php if ($_SESSION['incluir'] === true): ?>
<center><a href="form_func.php" class="btn btn-default" role="button">Incluir Funcionário</a></center>
    <?php endif; ?>
</body>
</html>
