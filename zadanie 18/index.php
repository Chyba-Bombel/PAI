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
        <input type="num" placeholder="Podaj liczbe sztuk" name="amount" required><br>
        <button type="submit" name="dodaj">Kliknij</button>
    </form>
</body>
</html>

<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'zakupy';
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        die("Błąd połączenia: ". mysqli_connect_error());
    } else {echo "Połączono!<br>";}

    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){
        echo "nazwa: ".$_POST['name']."<br>";
        echo "cena: ".$_POST['price']."<br>";
        echo "ilość: ".$_POST['amount']."<br>";

        $nazwa = trim($_POST['name']);
        $cena = floatval($_POST['price']);
        $ilosc = intval($_POST['amount']);
        $sql = "INSERT INTO Products (name, price, amount) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt -> bind_param("sdi", $nazwa, $cena, $ilosc);
        $stmt -> execute();
        $stmt -> close();


        mysqli_close($conn);
    }
?>