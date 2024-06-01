<?php

    $name = "Jon Deo";


    function change (&$name){

        $name = "New Name";
        
    }


    change($name);
    echo $name;


?>