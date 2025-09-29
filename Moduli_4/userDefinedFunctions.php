<?php
     function helloworld(){
        echo "Hello World";
     }
     helloworld();

      echo '<br>';

      function sum(){
         $value = 120 + 20;
         echo($value);
      }
      sum();

      echo '<br>';

      function maximum($x,$y){
         if($x > $y){
            return $x;
         }else{
            return $y;
         }
      }

      $a = 20;
      $b = 30;

      $test = maximum($a,$b);
      echo "the maximum for $a and for $b is $test";

?>