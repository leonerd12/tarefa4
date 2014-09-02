<?php 
include "top_session.php";
include 'permissao_excluir.php';
include 'pdo_conn.php';

$id_func = $_POST['id_d'];

$stmt = $conn->prepare("DELETE FROM funcionarios WHERE id_func = :id_func"); 
$stmt->bindParam(':id_func', $id_func);

if ($stmt->execute()) {
    echo '<script>
            alert("Exclusão realizada com sucesso.");
            location.href="tabela_func.php";
          </script>';
} else {
    echo '<script>
            alert("Não foi possível concluir a exclusão.");
            location.href = "tabela_func.php";
          </script>';
}