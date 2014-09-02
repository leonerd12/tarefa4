<?php include "permissao_incluir.php";
include "top_session.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>
<?php
include 'pdo_conn.php';

$nome_curso = $_POST["nome"];
$tipo_curso = $_POST["tipo"];
$preco_curso = $_POST["preco"];
$codigo_professor = $_POST["codigo_professor"];

if ($conn) {
    echo "Conexão bem sucedida.";
} else {
    echo "Conexão mal sucedida.";
}

if ($nome_curso == '' || $tipo_curso == '' || $preco_curso == '' || $codigo_professor == '') {
    echo '<script>
	alert("Digite todos os dados.");
	location.href="form_curso.php";
	</script>';
} else {
    $stmt = $conn->prepare("INSERT INTO cursos(nome_curso, tipo_curso, preco_curso, codigo_professor_curso) VALUES (:nome,:tipo,:preco,:codigo_professor)");
    $stmt->bindParam(':nome', $nome_curso, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $tipo_curso, PDO::PARAM_STR);
    $stmt->bindParam(':preco', $preco_curso, PDO::PARAM_STR);
    $stmt->bindParam(':codigo_professor', $codigo_professor, PDO::PARAM_STR);
}
if ($stmt->execute()) {
    echo '<script>
	alert("Cadastro realizado com sucesso.");
	opcao = prompt("Deseja cadastrar um novo curso? S ou N?");
	if (opcao == "s"){
		location.href="form_curso.php";
	}else{
                location.href="tabela_cursos.php"
        }
        </script>';
} else {
    echo "<script>
     alert('Não foi possível concluir a inserção.');
     location.href=form_curso.php;
     </script>";
}

pg_close($conn);
?>