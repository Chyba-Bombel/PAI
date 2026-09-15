<?php
    //zadanie 1
    $a = 3;
    if ($a%2 == 0){
        echo "Liczba jest parzysta <br>";
    } else {
        echo "Liczba jest nieparzysta <br>";
    }
    //zadanie 2
    $b = 318;
    $c = 5;
    if ($b%$c == 0){
        echo "Pierwsza liczba jest podzielna przez drugą <br>";
    } else{
        echo "Pierwsza liczba nie jest podzielna przez drugą <br>";
    }
    //zadanie 3
    $d = 1;
    if ($d >= 1 && $d <= 10){
        echo "Liczba jest z przedziału <1,10> <br>";
    } elseif ($d >= 17 && $d <= 21){
        echo "Liczba jest z przedziału <17,21> <br>";
    } else {
        echo "Liczba nie jest z przedziału <1,10> lub <17,21> <br>";
    }
    //zadanie 4
    $f = 0;
    if ($f < 0){
        echo "Liczba jest mniejsza niż 0 <br>";
    } elseif ($f == 0){
        echo "Liczba wynosi 0 <br>";
    } else {
        echo "Liczba jest większa od 0 <br>";
    }
    //zadanie 5
    $wiek = 18;
    if($wiek < 11){
        echo "Dziecko <br>";
    } elseif ($wiek > 11 && $wiek <= 17){
        echo "Nastolatek <br>";
    } else {
        echo "Dorosły <br>";
    }

?>