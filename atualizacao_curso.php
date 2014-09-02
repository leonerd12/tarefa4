<?php 
include "top_session.php";
include 'pdo_conn.php';

$id_curso = $_POST['id'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];
$codigo_professor = $_POST['codigo_professor'];


$stmt = $conn->prepare("UPDATE cursos SET nome_curso = :nome, tipo_curso = :tipo, preco_curso = :preco, codigo_professor_curso=:codigo_professor WHERE id_curso = :id_curso");
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
$stmt->bindParam(':preco', $preco, PDO::PARAM_STR);
$stmt->bindParam(':codigo_professor', $codigo_professor, PDO::PARAM_STR);
$stmt->bindParam(':id_curso', $id_curso, PDO::PARAM_STR);

if ($stmt->execute()) {
    echo '<script>
		alert("Atualização realizada com sucesso.");
		location.href="tabela_cursos.php";
          </script>';
} else {
    echo '<script> 
                alert("Não foi possível realizar a atualização.");
                location.href="tabela_cursos.php";
          </scriṕt>';
}