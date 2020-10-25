<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    $residue = $grades % 5;
    $nextMultiple = $grades + (5 - $residue);
    $diff = $nextMultiple - $grades;
    if ($grades > 40 ) {
        if ( $diff < 3) {
            return $nextMultiple;
        } else {
            return $grades;
        }
    } else {
        return $grades;
    }

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