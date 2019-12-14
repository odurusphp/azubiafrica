<?php

function reverse($word){

    $reverse = str_split($word);
    $newword = "";

    for($i= max(array_keys($reverse));$i >= 0 ;$i--){
        $newword .= $reverse[$i];
    }
    return $newword;

}

echo(reverse("apple"));

?>
