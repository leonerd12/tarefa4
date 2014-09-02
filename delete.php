<?php
include 'permissao_excluir.php';

include "top_session.php";

include 'pdo_conn.php';

$id_usuario = $_POST['id_d'];

$stmt = $conn->prepare("DELETE FROM usuarios WHERE id_usuario = :id_usuario"); 
$stmt->bindParam(':id_usuario', $id_usuario);

if ($stmt->execute()) {
    echo '<script>
		alert("Exclusão realizada com sucesso.");
		location.href="tabela_usuarios.php";
            </script>';
} else {
    echo '<script>
            alert("Não foi possível concluir a exclusão.");
            location.href = "tabela_usuarios.php";
          </script>';
}