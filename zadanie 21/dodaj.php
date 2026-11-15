<?php
require_once "db_connect.php";
$blad = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tytul = trim($_POST["tytul"] ?? "");
    $gatunek = trim($_POST["gatunek"] ?? "");
    $platforma = trim($_POST["platforma"] ?? "");
    $rok = (int) ($_POST["rok_wydania"] ?? 0);
    $ocena = (float) ($_POST["ocena"] ?? 0);

    if ($tytul === "" || $gatunek === "" || $platforma === "" || $rok < 1 || $ocena < 0 || $ocena > 10) {
        $blad = "Uzupełnij wszystkie pola. Ocena musi być od 0 do 10.";
    } else {
        $stmt = mysqli_prepare($conn, "INSERT INTO gry (tytul, gatunek, platforma, rok_wydania, ocena) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssid", $tytul, $gatunek, $platforma, $rok, $ocena);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        if ($success) {
            header("Location: lista.php");
            exit;
        }
        $blad = "Nie udało się dodać gry.";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"><title>Dodaj grę</title></head>
<body>
<?php require "nav.php"; ?>
<h1>Dodaj grę</h1>
<?php if ($blad !== ""): ?><p style="color:red"><?= htmlspecialchars($blad) ?></p><?php endif; ?>
<form method="post">
    <label>Tytuł: <input type="text" name="tytul" required></label><br><br>
    <label>Gatunek: <input type="text" name="gatunek" required></label><br><br>
    <label>Platforma: <input type="text" name="platforma" required></label><br><br>
    <label>Rok wydania: <input type="number" name="rok_wydania" min="1" max="2155" required></label><br><br>
    <label>Ocena: <input type="number" name="ocena" min="0" max="10" step="0.1" required></label><br><br>
    <button type="submit">Zapisz</button>
</form>
<?php require "footer.php"; ?>
</body>
</html>