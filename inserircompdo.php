<?php

include './pdo_conn.php';

//$stmt = $conexao->prepare("INSERT INTO pessoas(nome_pessoa, cidade_pessoa) VALUES (:dpv, :cidade)*");
$nome = 'Leonardo';
$cidade = 'Boa Vista';
////
//$stmt->bindParam(":dpv", 'calories', PDO::PARAM_STR);
//$stmt->bindParam(":cidade", 'colour', PDO::PARAM_STR);

$stmt = $conexao->prepare("INSERT INTO pessoas(nome_pessoa,cidade_pessoa) VALUES (:nome,:cidade)");
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$stmt->execute();
//var_dump($stmt);
//$stmt->execute();
