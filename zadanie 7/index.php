<?php
    //zadanie 1
    for ($i = 0; $i <= 1000; $i++){
        if ($i%3 == 0 && $i%7 == 0){
            echo $i." ";
        }
    }
    echo "<br>";
    echo "<br>";
    //zadanie 2
    for ($i = 0; $i <= 100; $i++){
        if($i%3 != 0){
            echo $i." ";
        }
    }
    echo "<br>";
    echo "<br>";
    //zadanie 3
    $liczba = 67;
    $n = 0;
    while($n < 20){
        if($liczba%3 == 0){
            echo $liczba. " ";
            $n++;
        }
        $liczba++;
    }
    echo "<br>";
    echo "<br>";
    //zadanie 4
    $a = 10;
    $m = 21;
    $o = 0;
    while ($o < 20){
        if($a%$m == 0){
            echo $a." ";
            $o++;
        }
        $a++;
    }
    echo "<br>";
    echo "<br>";
    //zadanie 5
    function czyPierwsza($liczba){
        if($liczba < 2){
            echo "Nie jest pierwsza";
            return false;
        }
        if ($liczba == 2){
            echo "Jest pierwsza";
            return true;
        }
        if($liczba%2 == 0){
            echo "Nie jest Pierwsza";
            return false;
        }
        for($i = 3; $i <= sqrt($liczba); $i += 2){
            if ($liczba%$i == 0){
                echo "Nie jest pierwsza";
                return false;
            }
        }
        echo "Jest pierwsza";
        return true;
    }
    czyPierwsza(45);
    echo "<br>";
    echo "<br>";
    //zadanie 6
    $tablica = [1,4,3,6,8,9,2];
    $maks = $tablica[0];
    for ($i = 0; $i < count($tablica); $i++){
        if ($maks < $tablica[$i]){
            $maks = $tablica[$i];
        }
    }
    echo $maks;
    echo "<br>";
    echo "<br>";

    //zadanie szachownica
    for($i = 0; $i < 8; $i++){
        for($j = 0; $j < 8; $j++){
            if(($i + $j)% 2 == 0){
                echo "X";
            }else{
                echo "O";
            }
            
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    //zadanie tabliczka mnozenia
    for($i = 1; $i < 10; $i++){
        for($j = 1; $j < 10; $j++){
            $wynik = $i * $j;
            echo $wynik." ";
        }
        echo "<br>";
    }


?>