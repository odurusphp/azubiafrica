<?php 


function fizzbuzz($number){
    if(is_numeric($number)){
        for($i=1;$i<=$number;$i++){

            if (($i % 5 == 0) && ($i % 3 == 0)) {
                echo ("fizzbuzz");
            }elseif($i%3==0){
                echo("fizz");
            }elseif($i%5==0){
                echo("buzz");
            }      else{
                echo($i);
            }
            echo ("</br>");
        }
    }
}

fizzbuzz(15);

?>