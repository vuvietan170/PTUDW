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
function calculateAverageScore($student){
    $total =  0;
    foreach ($student as $stu){
        $total += $stu['score'];
    }
    return "Điểm trung bình: " . ( $total / count($student)). "<hr>"; 
}
function getRank($score){
    if($score >= 8){
        return "Giỏi";
    } elseif ($score >= 6.5){
        return "Kha";
    } elseif ($score >= 5) {
        return "Trung Binh";
    } else {
        return "Yeu";
    }
}

function displayStudent($student) {
    echo  "Họ tên: ". $student['name'] . "<br>";
    echo "Tuổi: " . $student['age'] . "<br>";
    echo "Điểm: " . $student['score'] . "<br>";

    echo "Rank: ". getRank($student['score']);
    echo "<hr>";
}
echo calculateAverageScore($students);
displayStudent($students[0]);
?>