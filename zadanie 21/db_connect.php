<?php
$conn = mysqli_connect("localhost", "root", "", "gry_db");

if (!$conn) {
    die("Błąd połączenia z bazą: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>