<?php
/* Class Work
Create a class with two methods. (Class Name :  Calculations)
Method 1.  static method - TotalScore

Method  2. regular method  - Average Score

Class  Atttribute : studentscore =   [77, 40 , 89, 65, 100, 55,  70, 80, 33, 85, 96, 88]


Create a  subclass (ie StudentRanking) that inherits from the  Calculations Class
Inherit  the studentscore class property

Create a method (Ranking) that orders the student score in ascending order */


class Calculations {

    static $studentscore =   [77, 40 , 89, 65, 100, 55,  70, 80, 33, 85, 96, 88];
    
    static function TotalScore(){
        return array_sum(Calculations::$studentscore);
    }

    function AverageScore(){
        return floatval(Calculations::TotalScore() / count(Calculations::$studentscore));
    }

    function getScores(){
        return Calculations::$studentscore;
    }
}

class StudentRanking extends Calculations {

    function Ranking(){
        $scores = $this->getScores();
        sort($scores);
        return $scores;
    }
}

$totalScore = Calculations::TotalScore();
echo "Total Score: {$totalScore} <br />";

$calculations = new Calculations;
$averageScore = $calculations->AverageScore();

echo "Average Score: {$averageScore} <br />";

$studentRanking = new StudentRanking;
echo "<br />Ascending order of students score:";
echo "<pre>";
echo implode(', ', $studentRanking->Ranking());
echo "</pre>";
?>

