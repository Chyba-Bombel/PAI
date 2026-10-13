<form action="./" method="GET">
    <label for="name">Imię:</label>
    <input type="text" id="name" name="name" placeholder="Podaj imię"><br>

    <label for="surname">Nazwisko:</label>
    <input type="text" id="surname" name="surname" placeholder="Podaj nazwisko"><br>

    <label for="age">Wiek:</label>
    <input type="Number" id="age" name="age" placeholder="Podaj wiek"><br>

    <label for="typ">Typ Biletu:</label>
    <Select id = "typ" name = "typ">
        <option value = "Normalny">Normalny</option>
        <option value = "Ulgowy">Ulgowy</option>
    </Select> <br>

    <input type="submit" value="Oblicz cenę">
</form>

<?php
    if(isset($_GET['name'])&& isset($_GET['surname']) && isset($_GET['age']) && isset($_GET['typ'])){
        $imie = $_GET['name'];
        $nazwisko = $_GET["surname"];
        $wiek = $_GET["age"];
        $bilet = $_GET['typ'];
        $cena = 0;
        if($bilet == "Normalny" && $wiek > 7 ){
            $cena = 30; 
        } else if($bilet == "Ulgowy" && $wiek > 7){
            $cena = 15;
        }else if($wiek <= 7){
            $cena = 0;
            $bilet = "Poniżej 7 lat";
        }
        echo "Cześć: ".$imie." ".$nazwisko."! <br>";
        echo "Twój wiek: ".$wiek.".<br>";
        echo "Rodzaj biletu: ".$bilet.".<br>";
        echo "Cena: ".$cena.".<br>";

    }
    
?>