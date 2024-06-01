<?php

    $name = "jon doe";// global scope

    function grate(){

        global $name;

        echo "hello ". $name;
    
    }


    grate();


    
?>