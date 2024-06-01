<?php

    $numbers = [1,2,3,4,5,6,7,8,9];


    function isEven($n){
        if($n % 2 == 0){
            return true;

        }return false;

    }




    $evenNumbers = array_filter($numbers, "isEven");

    print_r($evenNumbers);



?>