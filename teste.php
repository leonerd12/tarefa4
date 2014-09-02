<?php

include "top_session.php";
include 'pdo_conn.php';

$id_usuario = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

if ($senha) {
    $stmt = $conn->prepare("UPDATE usuarios SET nome_usuario = :nome, email_usuario = :email, login_usuario = :login, senha_usuario=:senha_usuario WHERE id_usuario = :id_usuario");
    $stmt->bindParam(':senha_usuario', md5($senha_usuario), PDO::PARAM_STR);
} else {
    $stmt = $conn->prepare("UPDATE usuarios SET nome_usuario = :nome, email_usuario = :email, login_usuario = :login WHERE id_usuario = :id_usuario");
}

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':login', $login, PDO::PARAM_STR);
$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo '<script>
			alert("Atualização realizada com sucesso.");
			location.href="tabela_usuarios.php";
		  </script>';
} else {
    echo '<script> 
            alert("Não foi possível realizar a atualização.");
            location.href="tabela_usuarios.php";
</scriṕt>';
}