<?php include "permissao_incluir.php";
include "top_session.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>
<?php
include 'pdo_conn.php';

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

if ($conn) {
    echo "Conexão bem sucedida.";
} else {
    echo "Conexão mal sucedida.";
}

if ($nome == '' || $endereco == '' || $email == '' || $telefone == '') {
    echo '<script>
	alert("Digite todos os dados.");
	location.href="form_func.php";
	</script>';
} else {
    $stmt = $conn->prepare("INSERT INTO funcionarios(nome_func, endereco_func, email_func, telefone_func) VALUES (:nome,:endereco,:email,:telefone)");
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
}
if ($stmt->execute()) {
    echo "<script>
	alert('Cadastro realizado com sucesso.');
	opcao = prompt('Deseja cadastrar um novo funcionário? S ou N?');
	if (opcao == 's'){
		location.href='form_func.php';
	}else{
		location.href='tabela_func.php';
	}
        </script>";
} else {
    echo "<script>
     alert('Não foi possível concluir a inserção.');
     location.href=form_func.php;
     </script>";
}

pg_close($conn);
?>