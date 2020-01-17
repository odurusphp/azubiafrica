<?php

class Calculations {

    public $score = 89;

    public static function TotalScore($score) {
        return $score;
    }

    public function AverageScore($avscore) {
       return $avscore;
    }

}


class StudentRanking extends Calculations {
    public function  __construct(){
        $this->TotalScore($this->score);
    }
}



function Ranking() {

    $studentscores =   [77, 40 , 89, 65, 100, 55,  70, 80, 33, 85, 96, 88];
    sort($studentscores);

    $lgth = count($studentscores);
    for($x = 0; $x < $lgth; $x++) {
        echo $studentscores[$x].",";
    }
}

echo Ranking();