<form action="./" method="POST">
    <label for="name">Imię:</label>
    <input type="text" id="name" name="name" placeholder="Podaj imię"><br>

    <label for="age">Wiek:</label>
    <input type="number" id="age" name="age" placeholder="Podaj wiek"><br>

    <label for="sex">Płeć:</label>
    <input type = "radio" name = "sex" value="k"> Kobieta
    <input type = "radio" name = "sex" value="m"> Mężczyzna<br>    
    
    <label for="games">Ulubiona seria gier:</label>
    <input type = "checkbox" name = "game1" value="GTA">Grand Theft Auto 
    <input type = "checkbox" name = "game2" value="FIFA"> FIFA
    <input type = "checkbox" name = "game3" value="CS"> Counter Strike
    <input type = "checkbox" name = "game4" value="COD"> Call of Duty <br>

    <input type="submit"> <br>
</form>

<?php
if (isset($_POST['name']) && //czy klucz name istnieje
 isset($_POST['age']) &&  //czy klucz age istnieje
 !empty($_POST['name']) && //czy klucz name jest pusty
 !empty($_POST['age'])) { //czy klucz age jest pusty
    echo $_POST['name']." ";
    echo $_POST['age']." ";
} else{
    echo "Prosze wypełnić wszystkie pola";
}
if (isset($_POST['sex'])){
    if($_POST['sex'] == 'm'){
        echo "Mężczyzna";
    } else {
        echo "Kobieta";
    }
}
for($i = 1; $i <= 4; $i++){
   if(isset($_POST['game'.$i])){
    echo "<br>";
    echo $_POST['game'.$i];
} 
}
?>