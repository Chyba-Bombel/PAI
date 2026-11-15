<?php
require_once "db_connect.php";
$id = (int) ($_GET["id"] ?? $_POST["id"] ?? 0);
$blad = "";

$stmt = mysqli_prepare($conn, "SELECT tytul, gatunek, platforma, rok_wydania, ocena FROM gry WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$gra = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
mysqli_stmt_close($stmt);

if (!$gra) {
    die("Nie znaleziono gry. <a href='lista.php'>Wróć do listy</a>");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tytul = trim($_POST["tytul"] ?? "");
    $gatunek = trim($_POST["gatunek"] ?? "");
    $platforma = trim($_POST["platforma"] ?? "");
    $rok = (int) ($_POST["rok_wydania"] ?? 0);
    $ocena = (float) ($_POST["ocena"] ?? 0);

    if ($tytul === "" || $gatunek === "" || $platforma === "" || $rok < 1 || $ocena < 0 || $ocena > 10) {
        $blad = "Uzupełnij wszystkie pola. Ocena musi być od 0 do 10.";
    } else {
        $stmt = mysqli_prepare($conn, "UPDATE gry SET tytul=?, gatunek=?, platforma=?, rok_wydania=?, ocena=? WHERE id=?");
        mysqli_stmt_bind_param($stmt, "sssidi", $tytul, $gatunek, $platforma, $rok, $ocena, $id);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        if ($success) {
            header("Location: lista.php");
            exit;
        }
        $blad = "Nie udało się zapisać zmian.";
    }
    $gra = compact("tytul", "gatunek", "platforma", "rok", "ocena");
    $gra["rok_wydania"] = $gra["rok"];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"><title>Edytuj grę</title></head>
<body>
<?php require "nav.php"; ?>
<h1>Edytuj grę</h1>
<?php if ($blad !== ""): ?><p style="color:red"><?= htmlspecialchars($blad) ?></p><?php endif; ?>
<form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label>Tytuł: <input type="text" name="tytul" value="<?= htmlspecialchars($gra["tytul"]) ?>" required></label><br><br>
    <label>Gatunek: <input type="text" name="gatunek" value="<?= htmlspecialchars($gra["gatunek"]) ?>" required></label><br><br>
    <label>Platforma: <input type="text" name="platforma" value="<?= htmlspecialchars($gra["platforma"]) ?>" required></label><br><br>
    <label>Rok wydania: <input type="number" name="rok_wydania" value="<?= htmlspecialchars($gra["rok_wydania"]) ?>" required></label><br><br>
    <label>Ocena: <input type="number" name="ocena" min="0" max="10" step="0.1" value="<?= htmlspecialchars($gra["ocena"]) ?>" required></label><br><br>
    <button type="submit">Zapisz zmiany</button>
</form>
<?php require "footer.php"; ?>
</body>
</html>