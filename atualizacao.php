<?php 
include "top_session.php";

include 'pdo_conn.php';

$id_usuario = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$editar = $_POST["editar"] ? true : false;
$excluir = $_POST["excluir"] ? true : false;
$incluir = $_POST["incluir"] ? true : false;

if ($senha) {
    $senha_usuario = md5($senha);
}else{
    $consulta = $conn->query("SELECT * FROM usuarios WHERE id_usuario = $id_usuario");
    $row = $consulta->fetch(PDO::FETCH_OBJ);
    $senha_usuario = $row->senha_usuario;
}

$stmt = $conn->prepare("UPDATE usuarios SET nome_usuario = :nome, email_usuario = :email, login_usuario = :login, senha_usuario = :senha_usuario, editar = :editar, excluir = :excluir, incluir = :incluir WHERE id_usuario = :id_usuario");
$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':login', $login, PDO::PARAM_STR);
$stmt->bindParam(':senha_usuario', $senha_usuario, PDO::PARAM_STR);
$stmt->bindParam(':editar', $editar, PDO::PARAM_BOOL);
$stmt->bindParam(':excluir', $excluir, PDO::PARAM_BOOL);
$stmt->bindParam(':incluir', $incluir, PDO::PARAM_BOOL);

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