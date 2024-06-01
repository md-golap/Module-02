

<?php


$numbers = [1,2,3,4,5,6,7,8,9];

function squere($n){
    return $n * $n;
}


function cube($n){

    return $n * $n * $n;
}


$cubes = array_map("cube", $numbers);
print_r($cubes);


?>