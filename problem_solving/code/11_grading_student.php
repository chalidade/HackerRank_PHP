<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    $data   = [];
    foreach($grades as $grades) {
        $round  = ceil($grades/5) * 5;
        $diff   = abs($grades - $round);
        if($round >= 40 AND $round <= 100) {
            if ($diff < 3) {
                $data[] = $round;
            } else if($diff == 3) {
                $data[] = $grades;
            } else if($diff == 0) {
                $data[] = $grades;
            } else {
                $data[] = round(($grades-3)/5) * 5;
            }
        } else if($round < 38) {
                $data[] = $grades;
        }
    }

    return $data;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
