<?php

include './pdo_conn.php';


$rs = $conexao->query("SELECT * FROM pessoas;");
while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
    echo $row->id_pessoa . " ";
    echo $row->nome_pessoa . " ";
    echo $row->cidade_pessoa . "<br />";
}