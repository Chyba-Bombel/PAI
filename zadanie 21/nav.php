<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav id="nav">
        <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active': '' ?>">Główna strona</a>
        
    </nav>
</body>
</html>

