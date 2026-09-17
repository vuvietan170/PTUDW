<!-- Viết các function để xử lý danh sách sinh viên:
 findBestStudent($students): Tìm và trả về sinh viên có điểm cao nhất.
 findWorstStudent($students): Tìm và trả về sinh viên có điểm thấp nhất.
 countPassedStudents($students): Đếm số sinh viên đạt. Sinh viên đạt khi điểm &gt;= 5.
 findStudentByName($students, $name): Tìm sinh viên theo tên và trả về sinh viên tìm được.
Thử gọi các function và in kết quả ra màn hình. -->
<?php
$students = [
	[
		"name" => "Nguyen Van An",
		"age" => 20,
		"score" => 8.5
	],
	[
		"name" => "Tran Thi Binh",
		"age" => 21,
		"score" => 6.5
	],
	[
		"name" => "Le Van Cuong",
		"age" => 19,
		"score" => 4.5
	],
	[
		"name" => "Pham Thi Dung",
		"age" => 20,
		"score" => 7.5
	]
];
function findBestStudent($student){
    $bestStudent = $student[0];
    foreach ($student as $stu){
        if($stu['score'] > $bestStudent['score']){
            $bestStudent = $stu;
        }
    }
    return $bestStudent;
}
// testcase
$best = findBestStudent($students);
echo "Best sutdent: " . $best['name'] . "<br>";

function findWorstStudent($student){
    $worstStudent = $student[0];
    foreach ($student as $stu){
        if($stu['score'] < $worstStudent['score']){
            $worstStudent = $stu;
        }
    }
    return $worstStudent;
}
//testcase
$worst = findWorstStudent($students);
echo "Worst Student: " . $worst["name"] . "<br>";
function countPassedStudents($student){
    $count = 0;
    foreach ($student as $stu){
        if($stu['score'] >= 5){
            $count++;
        }
    }
    return $count;
}
//testcase
$passed = countPassedStudents($students);
echo "passed student: " . $passed. "<hr>";

function findStudentByName($student, $name){
    foreach($student as $stu){
        if($stu['name'] === $name){
            return $stu;
        }
    }
    return null;
}
// testcase
$find =findBestStudent($students,"Nguyen Van An");
if($find !== null){
    echo "Name: " . $find['name'] . "<br>";
    echo "age: " . $find['age'] . "<br>";
    echo "score: " . $find['score']. "<br>";
 
}
?>