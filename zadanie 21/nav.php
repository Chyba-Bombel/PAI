<?php
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<link rel="stylesheet" href="style.css">
<nav class="menu">
    <a class="<?= $currentPage === "lista.php" ? "active" : "" ?>" href="lista.php">Lista gier</a>
    <a class="<?= $currentPage === "dodaj.php" ? "active" : "" ?>" href="dodaj.php">Dodaj grę</a>
</nav>
