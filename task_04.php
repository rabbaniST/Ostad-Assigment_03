<?php

$studentGrades = [
    'student1' => ['Math' => '80', 'English' => '93','Science' => '70'],
    'student2' => ['Math' => '82', 'English' => '88','Science' => '79'],
    'student3' => ['Math' => '82', 'English' => '90','Science' => '92'],
];

function averageGrades($result)
{
    foreach ($result as $student => $studentGrades){
        $total = array_sum($studentGrades);
        $count = count($studentGrades);
        $average = $total / $count;

        echo "Average Grade for $student: $average \n";
    }
}
averageGrades($studentGrades);