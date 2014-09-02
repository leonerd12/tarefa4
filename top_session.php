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