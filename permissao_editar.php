<?php
session_start();

if ($_SESSION['editar'] === FALSE):
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <script>
                alert("Você não tem permissão para acessar esse tipo de página.");
                location.href = "tabela_usuarios.php";
            </script>
        </body>
    </html>
<?php endif; ?>