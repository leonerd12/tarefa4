<?php include "permissao_incluir.php";
include "top_session.php";
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>
<?php
include 'pdo_conn.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$editar = $_POST["editar"] ? true : false;
$excluir = $_POST["excluir"] ? true : false;
$incluir = $_POST["incluir"] ? true : false;

$senha_usuario = md5($senha);

if ($conn) {
    echo "Conexão bem sucedida.";
} else {
    echo "Conexão mal sucedida.";
}

if ($nome == '' || $email == '' || $login == '' || $senha_usuario == '') {
    echo '<script>
	alert("Digite todos os dados.");
	location.href="cadastro.html";
	</script>';
} else {
    $stmt = $conn->prepare("INSERT INTO usuarios(nome_usuario, email_usuario, login_usuario, senha_usuario, editar, excluir, incluir) VALUES (:nome,:email,:login,:senha_usuario,:editar,:excluir,:incluir)");
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':senha_usuario', $senha_usuario, PDO::PARAM_STR);
    $stmt->bindParam(':editar', $editar, PDO::PARAM_BOOL);
    $stmt->bindParam(':excluir', $excluir, PDO::PARAM_BOOL);
    $stmt->bindParam(':incluir', $incluir, PDO::PARAM_BOOL);
}
if ($stmt->execute()) {
    echo '<script>
	alert("Cadastro realizado com sucesso.");
	opcao = prompt("Deseja cadastrar um novo usuario? S ou N?");
	if (opcao == "s"){
		location.href="form_user.php";
	}else{
		location.href="tabela_usuarios.php";
	}
        </script>';
} else {
    echo "<script>
     alert('Não foi possível concluir a inserção.');
     location.href=form_user.php;
     </script>";
}
