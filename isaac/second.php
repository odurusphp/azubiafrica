<?php

function fizzBuzz($number){

    for ($n =1; $n <= $number; $n++){

        if (($n % 3) == 0 && ($n % 5) == 0){
            echo 'fizzbuzz'.'<br/>';
        }
        else {
            if (($n % 3)== 0){
                echo 'fizz'.'<br/>';
            }
            else if (($n % 5) == 0){
                echo 'buzz'.'<br/>';
            }

            else {
                echo $n.'<br/>';
            }
        }

    }
    return $n;

}

echo fizzBuzz(35);


?>