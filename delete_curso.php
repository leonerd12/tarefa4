<?php 
include "top_session.php";
include 'permissao_excluir.php';
include 'pdo_conn.php';

$id_curso = $_POST['id_d'];

$stmt = $conn->prepare("DELETE FROM cursos WHERE id_curso = :id_curso"); 
$stmt->bindParam(':id_curso', $id_curso);

if ($stmt->execute()) {
    echo '<script>
			alert("Exclusão realizada com sucesso.");
			location.href="tabela_cursos.php";
		  </script>';
} else {
    echo '<script>
            alert("Não foi possível concluir a exclusão.");
            location.href = "tabela_cursos.php";
          </script>';
}