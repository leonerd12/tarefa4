<?php session_start(); ?>
<?php if (!$_SESSION['acessou']): ?>
    <script>
        alert("Você não pode acessar os dados sem estar logado.");
        location.href = "index.php";
    </script>
<?php else: ?>
    <?php include "top.php" ?>

    <footer>

    </footer>
    </html> 

<?php endif; ?>