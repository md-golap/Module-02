<?php

    function add($x1,$x2){

        echo "adding $x1 and $x2";
    }


    function divide($v1,$v2){

        echo "dividing $v1 and $v2";
    }


  function multiply($b1,$b2){

    echo "multipling $b1 and $b2";
  }  

  function process($n1 , $n2, $cb){
       if(is_callable($cb)){
            $cb($n1,$n2);

       }else{
         echo "$cb is not callable";
       }

  }

process(44,55,"multiply")





?>