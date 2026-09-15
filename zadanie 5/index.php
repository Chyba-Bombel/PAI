<?php
    // //for
    // for($i = 0; $i < 10; $i++){
    //     echo $i;
    // }
    // echo "<br>";
    // //while
    // $i = 0;
    // while($i < 5){
    //     echo $i;
    //     $i++;
    // }
    // echo "<br>";
    // //do-while
    // $i = 1;
    // do {
    //     echo $i;
    //     $i++;
    // } while ($i <= 5);
    // echo "<br>";
    // //foreach
    // $tablica =[1,2,3,4,5,6,7,8,9];
    // foreach($tablica as $wartosc){
    //     echo $wartosc;
    // }
    // echo "<br>";
    // $owoce = [
    //     "a" => "jabłko",
    //     "b" => "banan",
    //     "c" => "gruszka"
    // ];
    // foreach($tablica as $klucz => $wartosc){
    //     echo "Klucz: ".$klucz." Wartość: ".$wartosc." ";
    // }
    // echo "<br>"
    //zdanie z for
    for($i = 1; $i <= 100; $i += 2){
        echo $i . " ";
    }
    $i -= 4;
    while ($i >= 1){
        echo $i . " ";
        $i -= 4;
    }
    echo "<br>";
    //zadanie z while
    $z = 1;
    while ($z <= 100){
        echo $z." ";
        $z += 2;
    }
    $z -= 4;
    while ($z >= 1){
        echo $z." ";
        $z -= 4;
    }

?>