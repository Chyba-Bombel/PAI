<?php
    //zadanie 1
    // $a = 10;
    // $b = 4;
    // function obliczSume($a, $b) : int{
    //     return $a + $b;
    // }
    // function obliczRoznice($a, $b): int{
    //     return $a - $b;
    // }
    // function obliczIloczyn($a, $b){
    //     return $a * $b;
    // }
    // function obliczIloraz($a, $b){
    //     return $a / $b;
    // }
    // function modulo($a, $b){
    //     $wynikzdzielenia = $a % $b;
    //     return $wynikzdzielenia;
    // }
    // echo "Suma: " . obliczSume($a, $b) . "<br>";
    // echo "Różnica: " . obliczRoznice($a, $b) . "<br>";
    // echo "Iloczyn: " . obliczIloczyn($a, $b) . "<br>";
    // echo "Iloraz: " . obliczIloraz($a, $b) . "<br>";
    // echo "Modulo: " . modulo($a, $b) . "<br>";
    

    //zadanie 2
    // $imie = "Kacper";
    // echo "Cześć jestem ". $imie . " i uczę sie PHP."
    

    //zadanie 3
    // $liczba = 1;
    // $tekst = "Kocham pana dettlafa";
    // $boolean = TRUE;
    // $float = 1.5;
    // var_dump($liczba, $tekst, $boolean, $float);

    //zadanie 4
    // $x = 1;
    // if ($x > 0){
    //     echo "Dodatnia.";
    // }elseif($x < 0){
    //     echo "Liczba jest ujemna.";
    // }else {
    //     echo "Liczba jest równa 0.";
    // }
    //zadanie 5
    // $a = 10;
    // $b = 4;
    // if ($a > $b){
    //     echo "Liczba a jest większa od liczby b.";
    // }elseif($a < $b){
    //     echo "Liczba a jest mniejsza od liczby b.";
    // }else {
    //     echo "Liczba a jest równa liczbie b.";
    // }


    // //zadanie 6
    // $dzien = 3;
    // switch($dzien){
    //     case 1:
    //         echo "Poniedziałek";
    //         break;
    //     case 2:
    //         echo "Wtorek";
    //         break;
    //     case 3:
    //         echo "Środa";
    //         break;
    //     case 4:
    //         echo "Czwartek";
    //         break;
    //     case 5:
    //         echo "Piątek";
    //         break;
    //     case 6:
    //         echo "Sobota";
    //         break;
    //     case 7:
    //         echo "Niedziela";
    //         break;
    //     default:
    //         echo "Nie ma takiego dnia w tygodniu.";
    // }


    //zadanie 7
    // for ($i = 0; $i <= 50; $i++){
    //     if($i%2 == 0){
    //         echo $i." \n";
    //     }
    // }


    //zadanie 8
    // $i = 10;
    // while ($i >= 0){
    //     echo $i . " <br>";
    //     $i = $i - 1;
    // }
    
    //zadanie 9
    // $imiona = ["Kacper", "Chuj", "Wala", "Śmiec", "Cwel"];
    // foreach ($imiona as $imie){
    //     echo $imie."<br>";
    // }

    //zadanie 10
    // $tablica = [1,2,3,4,5,6];
    // $srednia = 0;
    // foreach($tablica as $liczba){
    //     $srednia = $srednia + $liczba;
    // }
    // $srednia = $srednia / count($tablica);
    // echo $srednia;

    //zadanie 11
    // $asocjacja = [
    //     "imie" => "Kacper",
    //     "wiek" => 17,
    //     "miasto" => "Łódź"
    // ];
    // foreach ($asocjacja as $klucz => $wynik){
    //     echo "$klucz : $wynik ";
    // }

    $osoby = [
    ["imie" => "chuj", "wiek" => 17],
    ["imie" => "Bartek", "wiek" => 6]
];

    foreach ($osoby as $osoba) {
        echo "Imię: " . $osoba["imie"] . " | Wiek: " . $osoba["wiek"] . "<br>\n";
    }
?>