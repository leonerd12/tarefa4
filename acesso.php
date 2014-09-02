<?php

session_start();

include 'pdo_conn.php';

$login_login = $_POST["login"];
$senha = $_POST["senha"];
$senha_login = md5($senha);

$consulta = $conn->query("SELECT * FROM usuarios WHERE login_usuario = '$login_login'");

$dados = $consulta->fetch(PDO::FETCH_OBJ);
$senha_banco = $dados->senha_usuario;

if ($senha_login == $senha_banco) {
    $_SESSION['acessou'] = TRUE;

    if ($dados->editar === TRUE) {
        $_SESSION['editar'] = TRUE;
    } else {
        $_SESSION['editar'] = FALSE;
    }
    if ($dados->excluir === TRUE) {
        $_SESSION['excluir'] = TRUE;
    } else {
        $_SESSION['excluir'] = FALSE;
    }
    if ($dados->incluir === TRUE) {
        $_SESSION['incluir'] = TRUE;
    } else {
        $_SESSION['incluir'] = FALSE;
    }

    header("location: inicial.php");
} else {
    echo '<script>
		alert("Dados incorretos.");
		location.href="login.php";
		</script>';
}
?>