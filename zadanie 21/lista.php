<?php
require_once "db_connect.php";
$wynik = mysqli_query($conn, "SELECT id, tytul, gatunek, platforma, rok_wydania, ocena FROM gry ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista gier</title>
</head>
<body>
<?php require "nav.php"; ?>
<h1>Lista gier</h1>
<a href="dodaj.php">+ Dodaj nową grę</a>
<br><br>
<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>Tytuł</th>
        <th>Gatunek</th>
        <th>Platforma</th>
        <th>Rok wydania</th>
        <th>Ocena</th>
        <th>Akcje</th>
    </tr>
    <?php while ($gra = mysqli_fetch_assoc($wynik)): ?>
        <tr>
            <td><?= htmlspecialchars($gra["tytul"]) ?></td>
            <td><?= htmlspecialchars($gra["gatunek"]) ?></td>
            <td><?= htmlspecialchars($gra["platforma"]) ?></td>
            <td><?= htmlspecialchars($gra["rok_wydania"]) ?></td>
            <td><?= htmlspecialchars($gra["ocena"]) ?></td>
            <td>
                <a href="edytuj.php?id=<?= (int) $gra["id"] ?>">Edytuj</a> |
                <a href="usun.php?id=<?= (int) $gra["id"] ?>"
                   onclick="return confirm('Czy na pewno usunąć tę grę?')">Usuń</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
<?php require "footer.php"; ?>
</body>
</html>