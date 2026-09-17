<?php
    // $array = [1,2,3,4,5,6];
    // $index_to_remove = 2;
    // unset($array[$index_to_remove]);
    // var_dump($array);
    $wala = [];
    for ($i = 0; $i < 5; $i++){
        $wala[$i] = 0;

    }
    foreach($wala as $i){
        echo $i;
        echo "<br>";
    }
    echo "<br>";
    echo "<h1>Tablice dwuwymiarowe</h1> <br>";
    $tablica2d =[
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    for ($i = 0; $i < count($tablica2d); $i++){
        for ($j = 0; $j < count($tablica2d[$i]); $j++){
            echo $tablica2d[$i][$j] . " ";
        }
    }
    echo "<br>";
    $osoby = [
        ["imie" => "Jan", "wiek" => 20],
        ["imie" => "Anna", "wiek" => 25],
        ["imie" => "Piotr", "wiek" => 30]
    ];
    foreach($osoby as $wiersz){
        foreach($wiersz as $element){
            echo $element . " ";
        }
    }
    echo "<br>";
    $array4x4 = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]
    ];
    for ($i = 0; $i < count($array4x4); $i++){
        for ($j = 0; $j < count($array4x4[$i]); $j++){
            if ($i == $j){
                $array4x4[$i][$j] = 0;
            }
        }
    }
    for ($i = 0; $i < count($array4x4); $i++){
        for ($j = 0; $j < count($array4x4[$i]); $j++){
            echo $array4x4[$i][$j]." ";
        }
    }    
    echo "<br>";

?>