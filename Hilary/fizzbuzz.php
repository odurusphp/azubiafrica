<?php
    function fizzbuzz(int $num) {
        for($i = 1; $i <= $num; $i++) {
            if ($i%3 == 0 && $i%5 == 0) {
                echo "FizzBuzz<br>";
            } elseif ($i%3 == 0) {
                echo "Fizz<br>";
            } elseif ($i%5 == 0) {
                echo "Buzz<br>";
            } else {
                echo $i . "<br>";
            }
        }
    }

    fizzbuzz(0);
    fizzbuzz(15);
    echo "<br>";
    fizzbuzz(5);

?>