<?php

session_start();
unset($_SESSION['acessou']);
unset($_SESSION['editar']);
unset($_SESSION['excluir']);
unset($_SESSION['incluir']);
header("location: index.php");
?>