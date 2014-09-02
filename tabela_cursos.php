<?php
include "top.php";
include './pdo_conn.php';
$seleciona = $conn->query("SELECT * FROM tacursos ORDER BY id_curso;");
?>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading text-center">Cursos</div>
    <table class='table table-hover table-bordered table-condensed'>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Preço</th>
                <th>Nome do Professor</th>
                <?php if ($_SESSION['editar'] === true): ?>
                    <th>Atualizar Dados</th>
                <?php endif; ?>
                <?php if ($_SESSION['excluir'] === true): ?>
                    <th>Excluir Dados</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>

            <?php while ($curso = $seleciona->fetch(PDO::FETCH_OBJ)) : ?>
                <tr>
                    <td><?= $curso->id_curso; ?></td>
                    <td><?= $curso->nome_curso; ?></td>
                    <td><?= $curso->tipo_curso; ?></td>
                    <td><?= $curso->preco_curso; ?></td>
                    <td><?= $curso->nome_func; ?></td>
                    <?php if ($_SESSION['editar'] === true): ?>
                        <td><a href="update_curso.php?id=<?= $curso->id_curso; ?>" class="btn btn-primary" role="button">Atualizar Dados</a></td>
                    <?php endif; ?>
                    <?php if ($_SESSION['excluir'] === true): ?>
                        <td><a href="aux_delete_curso.php?id_d=<?= $curso->id_curso; ?>" class="btn btn-danger" role="button">Excluir Dados</a></td>
                    <?php endif; ?>
                </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<br>
<?php if ($_SESSION['incluir'] === true): ?>
    <center><a href="form_curso.php" class="btn btn-default" role="button">Incluir Curso</a></center>
    <?php endif; ?>
</body>
</html>
