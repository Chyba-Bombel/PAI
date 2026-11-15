<?php
    require_once "db_connect.php";
    $sql = "CREATE TABLE IF NOT EXISTS gry (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        tytul VARCHAR(100) NOT NULL,
        gatunek VARCHAR(50) NOT NULL,
        platforma VARCHAR(50) NOT NULL,
        rok_wydania YEAR NOT NULL,
        ocena DECIMAL(3,1) NOT NULL
    ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";

    if (mysqli_query($conn, $sql)) {
        echo "Tabela gry jest gotowa. <a href='lista.php'>Przejdź do programu</a>";
    } else {
        echo "Błąd tworzenia tabeli: " . htmlspecialchars(mysqli_error($conn));
    }