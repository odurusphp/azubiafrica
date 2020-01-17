<?php

class Calculations {

    public $score = 89;
    public $studentscores =   [77, 40 , 89, 65, 100, 55,  70, 80, 33, 85, 96, 88];

    public static function TotalScore($score) {
        $sum = array_sum($score);
        return $sum;
    }

    public function AverageScore($avscore) {
        $sumarray = array_sum($avscore);
        $countarray = count($avscore);
        return ($sumarray/$countarray);
    }

}


class StudentRanking extends Calculations {
    public function  __construct(){
        $this->TotalScore($this->score);
    }
}

$newObject = new Calculations();


function Ranking() {

    $studentscores =   [77, 40 , 89, 65, 100, 55,  70, 80, 33, 85, 96, 88];
    sort($studentscores);

    $lgth = count($studentscores);
    for($x = 0; $x < $lgth; $x++) {
        echo $studentscores[$x].",";
    }
}

$studentscores =   [77, 40 , 89, 65, 100, 55,  70, 80, 33, 85, 96, 88];

echo "Sum of marks is ".Calculations::TotalScore($studentscores)."<br/>";
echo "Average of marks is ".$newObject->AverageScore($studentscores)."<br/>";
echo Ranking()." is the ranking of marks";