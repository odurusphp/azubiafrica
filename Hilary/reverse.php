<?php
    function reverse(string $str): string {
        $str_arr = str_split($str);
        $result = [];
        for($i = array_key_last($str_arr); $i >= 0; $i--) {
            $result[] = $str_arr[$i];
        }
        return implode("", $result);
    }
    echo reverse('aapple') . "<br>";
    echo reverse('orange');
?>