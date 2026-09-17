<?php

use BcMath\Number;

    Class Student{
        private string $name;
        private int $age;
        private float $score;

        public function __construct($name, $age , $score){
            $this->name = $name;
            $this->age = $age;
            $this->score = $score;
        }
      
        public function getName() {
            return $this->name;
        }
        public function getScore(){
            return $this->score;
        }

          public function getRank(){
            if($this->score >= 8.5){
                return "Gioi";
            } elseif ($this->score >= 6.5){
                return "Kha";
            } elseif ($this->score >= 5){
                return "Trung Binh";
            } else {
                return "Yeu";
            }
        }

        public function isPassed(){
            return $this->score >= 5;
        }

        public function display(){
            echo "Name: " . $this->name . "<br>";
            echo "Age: " . $this->age . "<br>";
            echo "Score: " . $this->score . "<br>";
            echo "Rank: " . $this->getRank() . "<br>";
            echo "Passed? " .( $this->isPassed() ? "yes": "no") . "<hr>";
        }
        //dùng static vì 2 hàm không phụ thuộc vào số sv cụ thể
        public static function highestScore(array $students){
            $highest = $students[0];
            foreach($students as $student){
                if($highest->getScore() < $student->getScore()){
                    $highest = $student;
                }
            }
            return $highest;
        }

        public static function average(array $students) : float {
            $total = 0;
            foreach($students as $student){
                $total += $student->getScore();
            }
            return $total/count($students);
        }
    }
?>