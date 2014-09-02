<?php session_start(); 

if (!$_SESSION['acessou']): ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <script>
                alert("Você não pode acessar os dados sem estar logado.");
                location.href = "index.php";
            </script>
        </body>
    </html>

<?php endif; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>M2 Smart</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <header>
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicial.php"><span class="glyphicon glyphicon-home"></span>Home</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="tabela_usuarios.php"><span class="glyphicon glyphicon-th"></span>Tabela de Usuários</a></li>
                        <li><a href="tabela_func.php"><span class="glyphicon glyphicon-th"></span>Tabela de Funcionários</a></li>
                        <li><a href="tabela_cursos.php"><span class="glyphicon glyphicon-th"></span>Tabela de Cursos</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-remove"></span>Sair</a></li>
                    </ul>
                </div>
            </nav>
        </header>