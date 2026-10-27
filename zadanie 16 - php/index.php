<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method='get'>
        <label for = imie> Imie </label>
        <input type="text" placeholder="wpisz imię" name="imie">
        <button type="submit">Kliknij</button>
    </form>
    <hr>
    <form action="./" method="post">
        <label for="wiek">Wiek</label>
        <input type="number" placeholder="podaj wiek" name="wiek">
        <button type="submit">Kliknij</button>

    </form>
    <hr>
    <form action="./" method="post">
        <label for="name">Nazwa produktu</label>
        <input type="text" placeholder="Podaj nazwe produktu" name="name"><br>
        <label for="price">Cena</label>
        <input type="number" placeholder="Podaj cene" name="price"><br>
        <label for="amount">Ile kupiłeś sztuk</label>
        <input type="number" name="amount" placeholder="Podaj ilość sztuk"><br>
        <button type="submit">Kliknij</button>
    </form>
</body>
</html>
<?php
    if (isset($_GET['imie'])){
        echo "Twoje imię to: " . $_GET['imie']."<br>";
    }
    if (isset($_POST['wiek'])){
        echo "Twój wiek wynosi".$_POST['wiek'];
    }
    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){
        $suma = $_POST['price'] * $_POST['amount'];
        echo "Nazwa produktu ".$_POST['name']." Cena jednego produktu ".$_POST['price']." Ilośc sztuk ".$_POST['amount']." Suma: ".$suma;
    }
?>
