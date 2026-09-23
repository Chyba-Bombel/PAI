<?php

    $tablica = [7,4,2,3,7,1,10];
    function obliczSume (array $SumTablica) : int{
        $suma = 0;
        foreach($SumTablica as $element){
            $suma = $suma + $element;
        }
        return $suma;

    }
    function obliczSrednia (array $SredniaTablica) : float{
        if(count($SredniaTablica) === 0){
            return 0.0;
        }
        return array_sum($SredniaTablica) / count($SredniaTablica);

    }
    function obliczMaks(array $MaksTablica) : int{
        if(count($MaksTablica) === 0){
            echo "Tablica jest pusta!";
        }
        $maks = $MaksTablica[0];
        foreach($MaksTablica as $liczba){
            if ($liczba > $maks){
                $maks = $liczba;
            }
        }
        return $maks;


    }
    function obliczMin(array $MinTablica) : int {
        if (count($MinTablica) === 0){
            return "Tablica jest pusta !";
        }
        $min = $MinTablica[0];
        foreach($MinTablica as $liczba){
            if($liczba < $min){
                $min = $liczba;
            }
        }
        return $min;
    }
    function obliczStatystyki(array $TablicaStatystyk) : void{
        $statystyki = [
            "Suma" => obliczSume($TablicaStatystyk),
            "Średnia" => obliczSrednia($TablicaStatystyk),
            "Minimum" => obliczMin($TablicaStatystyk),
            "Maksimum" => obliczMaks($TablicaStatystyk)
        ];
        echo "--- Statystyki Tablicy ---\n";
        foreach($statystyki as $klucz => $wartosc){
            echo "$klucz: $wartosc\n";
        }
    }
    obliczStatystyki($tablica);





?>