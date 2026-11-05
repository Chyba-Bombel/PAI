<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'zakupy';
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if(!$conn){
        die("Błąd połączenia: ". mysqli_connect_error());
    } else {echo "Połączono!<br>";}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista produktów</h1>
    <?php 
        $zapytanie = 'SELECT * FROM `products`';
        $wynik = mysqli_query($conn, $zapytanie);
        while($row = $wynik -> fetch_assoc()){
            echo $row['ID']." ".$row['name']." ". $row['price']." ".$row['amount']."<br>";
        }
        mysqli_close($conn);
    ?>
</body>
</html>
<?php

?>