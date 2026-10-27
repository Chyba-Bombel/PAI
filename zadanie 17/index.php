<?php
    session_start();
    if(!isset($_SESSION['koszyk'])){
        $_SESSION['koszyk'] = [];
    }
    if(isset($_POST['dodaj'])){
        $nazwa = trim($_POST['name']);
        $cena = $_POST['price'];
        $ilosc = $_POST['amount'];
        if($nazwa != " " && is_numeric($cena) && is_int($ilosc)){
            $_SESSION['koszyk'][] = [
                'nazwa' => $nazwa,
                'cena' => $cena,
                'ilosc => $ilosc'
    
            ];

        } else {
            echo "Nieprawidłowe dane! ";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Koszyk zakupowy</h1>

    <h2>Dodaj produkt</h2>
    <form action="./" method="post">
        <label for="name">Nazwa produtku: </label>
        <input type="text" placeholder="Podaj nazwe produktu:" name="name" required><br>
        <label type="price">Cena jednostkowa: </label>
        <input type="number" placeholder="Podaj Cene jednostkową:" name="price" min ="0" required><br>
        <label for="amount">Podaj ilość sztuk: </label>
        <input type="number" placeholder="Podaj liczbe sztuk" name="amount" required><br>
        <button type="submit" name="dodaj">Kliknij</button>
    </form>
    <h2> Produkty</h2>
    <table border="1">
        <tr>
            <th>Nazwa</th>
            <th>Cena</th>
            <th>Ilość</th>
            <th>Wartość</th>
            <th>Usuń</th>
        </tr>
    </table>
</body>
</html>