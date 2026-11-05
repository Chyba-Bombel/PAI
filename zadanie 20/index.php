<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Koszyk zakupowy</h1>

    <h2>Dodaj produkt</h2>
    <form action="./" method="post">
        <label for="id">ID</label>
        <input type="number" placeholder="Podaj ID" name="id" required><br>
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

    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $price = $_POST['price'];
        $id = $_POST['id'];
        $sql = "UPDATE `products` SET
                `name` = '$name',
                `price` = '$price',
                `amount` = '$amount'
                WHERE `ID` = '$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Zaktualizowano o rekord o id: ".$id;
        } else {
            echo "Błąd aktualizacji ". mysqli_error($conn);
        }


        mysqli_close($conn);
    }
?>