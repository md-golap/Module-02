<?php

    function incriment(){

       static $counter = 0;
        $counter ++;

        echo $counter;
    }

 incriment();
 incriment();
 incriment();
 incriment();



?>