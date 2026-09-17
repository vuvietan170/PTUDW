<?php
require_once "bai4.php";

$student1 = new Student('Nguyen Van An', 20, 8.5);
$student2 = new Student('Tran Thi Binh', 21, 6.5);
$student3 = new Student('Le Van Cuong', 19, 4.5);
$student4 = new Student('Pham Thi Dung', 20, 7.5);

// tạo mảng để test highestScore và average
$students = [$student1, $student2, $student3, $student4];

// display
$student1->display();

// highestScore
$highest = Student::highestScore($students);
echo "Sinh viên có điểm cao nhất: " . "<br>";
$highest->display();
echo "<br>";

$average = Student::average($students);
echo "Điểm trung bình: " . $average . "<br>";
?>