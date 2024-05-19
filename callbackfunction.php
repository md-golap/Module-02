

<?php
    $people = [
        ['name'=> 'golap', 'gender'=>  'male'],
        ['name'=> 'golap1', 'gender'=>  'male'],
        ['name'=> 'golap2', 'gender'=>  'female'],
        ['name'=> 'golap3', 'gender'=>  'female'],
        ['name'=> 'golap4', 'gender'=>  'male'],

    ];


    function isMale($people){

        if($people['gender'] == 'male'){

            return true;
        }
        return false;
    }


   $males = array_filter($people, "isMale");

   print_r($males)
?>