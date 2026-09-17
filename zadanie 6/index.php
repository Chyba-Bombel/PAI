<?php
    $array = [1,2,3,4,5,6];
    $index_to_remove = 2;
    unset($array[$index_to_remove]);
    var_dump($array);
?>