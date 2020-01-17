<?php
  class Calculations {
    public static $studentScore =  [77, 40 , 89, 65, 100, 55,  70, 80, 33, 85, 96, 88];

    public static function totalScore() {
      $result = 0;
      $scores = self::$studentScore;
      foreach( $scores as $score) {
        $result += $score;
      }
      return $result;
    }


    public function averageScore() {
      $scoreNum = count(self::$studentScore);
      return self::totalScore()/$scoreNum;
    }
  }

  class StudentRanking extends Calculations {
    public function ranking() {
      $result = [];
      sort(self::$studentScore);
      return self::$studentScore;
    }
  }

  $nStudent = new StudentRanking;
  echo $nStudent->totalScore() . "<br>";
  echo $nStudent->averageScore() . "<br>";

  echo "<pre>";
  print_r ($nStudent->ranking());
  echo "</pre>";
?>
