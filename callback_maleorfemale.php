<?php

    $people = [

        ['Name' => 'A', 'Gender' => 'M'],
        ['Name' => 'b', 'Gender' => 'f'],
        ['Name' => 'c', 'Gender' => 'M'],
        ['Name' => 'd', 'Gender' => 'f'],
        ['Name' => 'e', 'Gender' => 'M'],
        ['Name' => 'f', 'Gender' => 'f'],

    ];
    
    function isMale($person){

        if($person['Gender'] == 'M'){

            return true;

        } return false;
    }


function isFemale($parson){
    if($parson['Gender'] == 'f'){
        return true;

    }return false;
}


$males = array_filter($people, "isMale");
//print_r($males);

$female = array_filter($people, "isFemale");

print_r($female);



A quick brown fox jumps over the laxy dog. A quick brown fox jumps over 




















?>