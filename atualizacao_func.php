<?php 
include "top_session.php";

include 'pdo_conn.php';

$id_func = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$stmt = $conn->prepare("UPDATE funcionarios SET nome_func = :nome, endereco_func = :endereco, email_func = :email, telefone_func=:telefone WHERE id_func = :id_func");
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
$stmt->bindParam(':id_func', $id_func, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo '<script>
            alert("Atualização realizada com sucesso.");
            location.href="tabela_func.php";
	  </script>';
} else {
    echo '<script> 
            alert("Não foi possível realizar a atualização.");
            location.href="tabela_func.php";
</script>';
}